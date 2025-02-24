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

$sql = "SELECT Orders.order_id AS order_id, users.username AS customer, menu_items.name AS item, menu_items.price, Orders.order_date FROM Orders JOIN users ON Orders.customer_id = users.customer_id JOIN menu_items ON Orders.menu_item_id = menu_items.menu_item_id ORDER BY Orders.order_date DESC;";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Order History</h2>";
    echo "<table border='1'><tr><th>Order ID</th><th>Customer</th><th>Item</th><th>Price</th><th>Date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['order_id']}</td>
                <td>{$row['customer']}</td>
                <td>{$row['item']}</td>
                <td>\${$row['price']}</td>
                <td>{$row['order_date']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No orders found.";
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
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="images/smoky14-high-resolution-logo-transparent.png" alt="SMOKY14" style="height: 130px; width: 400px;">
                </a>

                <!-- Navbar Toggler for Mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recipes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">Food Catering</a>
                                <a class="dropdown-item" href="#">Drink & Beverages</a>
                                <a class="dropdown-item" href="#">Wedding & Birthday</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cta-btn" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            /* Navbar Styling */
            .navbar {
                background-color: #ffffff;
                /* White background */
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                /* Subtle shadow */
                padding: 10px 20px;
                font-family: 'Arial', sans-serif;
            }

            .navbar-brand img {
                height: 100px;
                /* Adjust logo size */
                width: auto;
                /* Maintain aspect ratio */
            }

            .navbar-nav {
                margin-left: auto;
                /* Align links to the right */
                display: flex;
                align-items: center;
            }

            .nav-item {
                margin: 0 15px;
                /* Space between items */
            }

            .nav-link {
                color: #333333 !important;
                /* Dark text */
                font-size: 16px;
                padding: 8px 12px;
                transition: color 0.3s ease;
            }

            .nav-link:hover {
                color: #007bff !important;
                /* Blue hover effect */
            }

            .nav-link.active {
                font-weight: bold;
                color: #007bff !important;
                /* Blue for active link */
            }

            .cta-btn {
                background-color: #007bff;
                /* Blue background for CTA button */
                color: #ffffff !important;
                /* White text */
                border-radius: 4px;
                padding: 8px 16px;
                transition: background-color 0.3s ease;
            }

            .cta-btn:hover {
                background-color: #0056b3;
                /* Darker blue on hover */
            }

            /* Dropdown Menu Styling */
            .dropdown-menu {
                background-color: #ffffff;
                border: none;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .dropdown-item {
                color: #333333;
                padding: 8px 16px;
                transition: background-color 0.3s ease;
            }

            .dropdown-item:hover {
                background-color: #f8f9fa;
                /* Light gray on hover */
                color: #007bff;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .navbar-brand img {
                    height: 80px;
                    /* Smaller logo for mobile */
                }

                .navbar-nav {
                    margin-top: 10px;
                }

                .nav-item {
                    margin: 10px 0;
                    /* Stack items vertically */
                }

                .cta-btn {
                    width: 100%;
                    /* Full-width button on mobile */
                    text-align: center;
                }
            }
        </style>
    </header>
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