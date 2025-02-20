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

// Handle Create Order (Customer Side)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = $_POST['customer_id'];
    $order_date = $_POST['order_date'];
    $total_amount = $_POST['total_amount'];

    // Create Order
    $sql = "INSERT INTO Orders (customer_id, order_date, total_amount) VALUES ('$customer_id', '$order_date', $total_amount)";
    if ($conn->query($sql)) {
        echo "<p class='success'>Order placed successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoky14 Orders</title>
    <link rel="stylesheet" href="orders.css">
</head>

<body>
    <h1>Smoky14 Orders</h1>
    <form id="orderForm" action="orders.php" method="post" onsubmit="return validateForm()">
        <label for="customer_id">Customer ID:</label>
        <input type="number" id="customer_id" name="customer_id" required>
        <div id="customerIdError" class="validation-error"></div>

        <label for="order_date">Order Date:</label>
        <input type="date" id="order_date" name="order_date" required>
        <div id="orderDateError" class="validation-error"></div>

        <label for="total_amount">Total Amount:</label>
        <input type="number" id="total_amount" name="total_amount" required>
        <div id="totalAmountError" class="validation-error"></div>

        <input type="submit" value="Place Order">
    </form>

    <script>
        // JavaScript Validation
        function validateForm() {
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

        // JavaScript Event Handlers
        document.getElementById('orderForm').addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>
</body>

</html>