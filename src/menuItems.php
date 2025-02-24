<?php
include("database.php");



$sqlretrieve = "SELECT * FROM menu_items";
$result = $conn->query($sqlretrieve);


?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/565a681be0eb6f1d92c6bc57c629ea35?family=Flame+Bold" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menuitems.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <?php
        include("navbar.php");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>
            <img src='images/" . $row['image'] . "' alt='Burger 1'>
            <h3>" . $row['name'] . "</h3>
            <p>" . $row['description'] . "</p>
            <div class='divrow'>
                <button class='select-button'>Select item</button>
                <p class='price'>" . $row['price'] . "</p>
            </div>
        </div>";
            }
        } else {
            echo "No items found!";
        }

        ?>
    </div>

</body>

</html>