<?php
// Include the database connection
include ("database.php");

// Handle form submission (Insert New Order Item)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $subtotal = $_POST['subtotal'];

    // Insert Query
    $sql_insert = "INSERT INTO order_items (order_id, item_id, quantity, subtotal) 
                   VALUES ('$order_id', '$item_id', '$quantity', '$subtotal')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('New order item added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

// Fetch Data from order_items
$sql_fetch = "SELECT * FROM order_items";
$result = $conn->query($sql_fetch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Order Items</h2>

        <!-- Form to Insert New Order Item -->
        <form method="POST" class="mb-4">
            <div class="row g-3">
                <div class="col-md-3">
                    <input type="number" class="form-control" name="order_id" placeholder="Order ID" required>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="item_id" placeholder="Item ID" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" name="quantity" placeholder="Quantity" required>
                </div>
                <div class="col-md-3">
                    <input type="number" step="0.01" class="form-control" name="subtotal" placeholder="Subtotal" required>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>

        <!-- Display Table -->
        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered">
                <tr>
                    <th>Order Item ID</th>
                    <th>Order ID</th>
                    <th>Item ID</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['order_item_id']; ?></td>
                        <td><?= $row['order_id']; ?></td>
                        <td><?= $row['item_id']; ?></td>
                        <td><?= $row['quantity']; ?></td>
                        <td><?= $row['subtotal']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No order items found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
