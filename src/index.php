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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/review.css">
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/smoky14-high-resolution-logo-transparent.png" alt="" style="height: auto; width: 300px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="menuitems.php">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto gap-2">
                        <li class="nav-item cta-btn"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item cta-btn"><a class="nav-link" href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Burger Haven</h1>
            <p>Delicious, juicy, and made just for you! Order now and satisfy your cravings.</p>
            <a href="menuitems.php" class="cta-btn">Order Now</a>
        </div>
    </section>
    <section class="reviews">
        <div class="scroll-container">
            <?php
            $sql = "SELECT image, name, description FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card'>
                        <div class='profile'>
                            <img src='" . $row["image"] . "' alt='" . $row["name"] . "' class='profile-img'>
                            <div class='info'>
                                <h2>" . $row["name"] . "</h2>
                            </div>
                        </div>
                        <div class='stars'>
                            <span class='star'><i class='fa-solid fa-star'></i></span>
                            <span class='star'><i class='fa-solid fa-star'></i></span>
                            <span class='star'><i class='fa-solid fa-star'></i></span>
                            <span class='star'><i class='fa-solid fa-star'></i></span>
                            <span class='star'><i class='fa-solid fa-star'></i></span>
                        </div>
                        <div class='description'>
                            <p><i class='fa-solid fa-quote-left'></i><br>" . $row["description"] . "<br><i class='fa-solid fa-quote-right'></i></p>
                        </div>
                    </div>";
                }
            } else {
                echo "No users found.";
            }
            $conn->close();
            ?>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <!-- Contact Section -->
            <div class="footer-section">
                <h2>Contact Us</h2>
                <h3>Hotline Order</h3>
                <p>0515 96 36 36</p>
                <p>$25 Bolt Hill St, Adhesible, NO: 26693</p>
                <p>help@gesto.com</p>

                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook fa-beat-fade"
                            style="color: #004275;"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter fa-beat-fade"
                            style="color: #74C0FC;"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram fa-beat-fade"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in fa-beat-fade"></i></a>
                </div>
            </div>

            <!-- Opening Hours -->
            <div class="footer-section">
                <h2>Opening Hours</h2>
                <table>
                    <tr>
                        <td>Main</td>
                        <td>8:00 - 20:30</td>
                    </tr>
                    <tr>
                        <td>Tue</td>
                        <td>9:00 - 20:30</td>
                    </tr>
                    <tr>
                        <td>Wed</td>
                        <td>9:00 - 20:30</td>
                    </tr>
                    <tr>
                        <td>Thu</td>
                        <td>9:00 - 20:30</td>
                    </tr>
                    <tr>
                        <td>Fri</td>
                        <td>9:00 - 20:30</td>
                    </tr>
                    <tr>
                        <td>Sat</td>
                        <td>9:00 - 11:30</td>
                    </tr>
                    <tr>
                        <td>Sun</td>
                        <td>Cancel</td>
                    </tr>
                </table>
            </div>

            <!-- Information -->
            <div class="footer-section">
                <h2>Information</h2>
                <ul>
                    <li><a href="#">About Smoky14</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="#">News & Events</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Status Location</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-section">
                <h2>Newsletter</h2>
                <p>Register now to get latest updates on promotions & coupons. Don't mention, are not spam !</p>
                <div class="newsletter-input">
                    <input type="email" placeholder="Enter your email">
                    <button>U.S.D.Cause</button>
                </div>
                <p class="subscription-text">By subscribing, you accepted me our DMS!</p>
            </div>
        </div>
    </footer>
</body>

</html>