<?php
// Database connection
$db_server = "group14_webprogramming-db-1";
$db_user = "root";
$db_pass = "password";
$db_name = "wp_db";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle CRUD operations (Admin Side)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $order_id = $_POST['order_id'];
        $customer_id = $_POST['customer_id'];
        $order_date = $_POST['order_date'];
        $total_amount = $_POST['total_amount'];

        if ($action === 'update') {
            // Update Order
            $sql = "UPDATE Orders SET customer_id='$customer_id', order_date='$order_date', total_amount=$total_amount WHERE order_id=$order_id";
            if ($conn->query($sql)) {
                echo "<p class='success'>Order updated successfully!</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
    }
}

// Handle Delete Operation
if (isset($_GET['delete'])) {
    $order_id = $_GET['delete'];
    $sql = "DELETE FROM Orders WHERE order_id=$order_id";
    if ($conn->query($sql)) {
        echo "<p class='success'>Order deleted successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// Fetch all orders
$sql = "SELECT * FROM Orders";
$result = $conn->query($sql);
$orders = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
} else {
    echo "<p class='info'>There are no orders.</p>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoky14 Admin</title>
    <link rel="stylesheet" href="orders.css">
    <script>
        // JavaScript Event Handlers 
        function editOrder(order_id, customer_id, order_date, total_amount) {
            document.getElementById('order_id').value = order_id;
            document.getElementById('customer_id').value = customer_id;
            document.getElementById('order_date').value = order_date;
            document.getElementById('total_amount').value = total_amount;
            document.getElementById('submit_button').value = 'Update Order';
            document.getElementById('form_action').value = 'update';
        }

        function deleteOrder(order_id) {
            if (confirm('Are you sure you want to delete this order?')) {
                window.location.href = 'admin.php?delete=' + order_id;
            }
        }
        // JavaScript Validation for Update Form
        function validateUpdateForm() {
            let isValid = true;

            // Reset error messages
            document.getElementById('customerIdError').textContent = '';
            document.getElementById('orderDateError').textContent = '';
            document.getElementById('totalAmountError').textContent = '';

            // Validate Customer ID
            const customerId = document.getElementById('customer_id').value;
            if (customerId <= 0 || isNaN(customerId)) {
                document.getElementById('customerIdError').textContent = 'Customer ID must be a positive number.';
                isValid = false;
            }

            // Validate Order Date
            const orderDate = document.getElementById('order_date').value;
            if (!orderDate) {
                document.getElementById('orderDateError').textContent = 'Order Date is required.';
                isValid = false;
            }

            // Validate Total Amount
            const totalAmount = document.getElementById('total_amount').value;
            if (totalAmount <= 0 || isNaN(totalAmount)) {
                document.getElementById('totalAmountError').textContent = 'Total Amount must be a positive number.';
                isValid = false;
            }

            return isValid;
        }

        // Attach validation to the update form
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            if (!validateUpdateForm()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>
</head>

<body>
    <h1>Smoky14 Admin</h1>
    <h2>Order List</h2>
    <?php if (!empty($orders)): ?>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo $order['order_id']; ?></td>
                    <td><?php echo $order['customer_id']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                    <td><?php echo $order['total_amount']; ?></td>
                    <td>
                        <button onclick="editOrder(<?php echo $order['order_id']; ?>, '<?php echo $order['customer_id']; ?>', '<?php echo $order['order_date']; ?>', <?php echo $order['total_amount']; ?>)">Edit</button>
                        <button class="delete" onclick="deleteOrder(<?php echo $order['order_id']; ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h2>Edit Order</h2>
    <form id="updateForm" action="admin.php" method="post">
        <input type="hidden" id="order_id" name="order_id">
        <input type="hidden" id="form_action" name="action" value="update">

        <label for="customer_id">Customer ID:</label>
        <input type="number" id="customer_id" name="customer_id" required>
        <div id="customerIdError" class="validation-error"></div>

        <label for="order_date">Order Date:</label>
        <input type="date" id="order_date" name="order_date" required>
        <div id="orderDateError" class="validation-error"></div>

        <label for="total_amount">Total Amount:</label>
        <input type="number" id="total_amount" name="total_amount" required>
        <div id="totalAmountError" class="validation-error"></div>

        <input type="submit" id="submit_button" value="Update Order">
    </form>


</body>

</html>