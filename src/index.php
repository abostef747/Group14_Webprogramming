<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Grilled Beef Burger</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Londrina Solid' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lovers Quarrel' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/565a681be0eb6f1d92c6bc57c629ea35?family=Flame+Bold" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Burger Haven</h1>
            <p>Delicious, juicy, and made just for you! Order now and satisfy your cravings.</p>
            <a href="menuitems.php" class="btn btn-primary">Order Now</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>