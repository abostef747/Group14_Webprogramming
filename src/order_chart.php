<?php
session_start();
include("database.php");

if (isset($_POST["submit_order"])) {
    if (!isset($_SESSION["user_id"])) {
        die("Please log in first.");
    }
    
    $order_id = uniqid("ORD_"); // Generate a unique order ID
    $items = $_POST["items"] ?? []; // Selected items from the form
    
    if (empty($items)) {
        echo "<p style='color:red;'>No items selected!</p>";
    } else {
        foreach ($items as $item_id => $quantity) {
            if ($quantity > 0) {
                $stmt = $conn->prepare("INSERT INTO order_items (order_id, item_id, quantity, subtotal) VALUES (?, ?, ?, (SELECT price * ? FROM items WHERE id = ?))");
                $stmt->bind_param("siiii", $order_id, $item_id, $quantity, $quantity, $item_id);
                $stmt->execute();
                $stmt->close();
            }
        }
        echo "<p style='color:green;'>Order placed successfully! Order ID: $order_id</p>";
    }
}

$result = $conn->query("SELECT id, name, price FROM items"); // Fetch items from database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Chart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Order Your Items</h1>
    <form action="order_chart.php" method="post">
        <table border="1">
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row["name"]); ?></td>
                <td><?php echo number_format($row["price"], 2); ?> €</td>
                <td><input type="number" name="items[<?php echo $row['id']; ?>]" min="0" value="0"></td>
            </tr>
            <?php } ?>
        </table>
        <button type="submit" name="submit_order">Place Order</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
