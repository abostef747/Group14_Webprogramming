<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Chart</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Order Chart</h2>
        <h3>Selected Items</h3>
        <ul id="selected-items-list"></ul>
        <button id="confirm-order">Confirm Order</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectedItemsList = document.getElementById('selected-items-list');
            const selectedItems = JSON.parse(localStorage.getItem('selectedItems')) || [];

            selectedItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.itemName} - €${item.itemPrice}`;
                selectedItemsList.appendChild(listItem);
            });

            document.getElementById('confirm-order').addEventListener('click', function() {
                alert('Order confirmed!');
                localStorage.removeItem('selectedItems');
                window.location.href = 'index.php';
            });
        });
    </script>
</body>
</html>