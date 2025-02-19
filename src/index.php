<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Grilled Beef Burger</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Londrina Solid' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lovers Quarrel' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/565a681be0eb6f1d92c6bc57c629ea35?family=Flame+Bold" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="page1">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand"><img src="images/logo.png" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#page1" class="nav-link"><i class="fa-fw fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#page2" class="nav-link"><i class="fa-solid fa-burger"></i>Smoky'14</a>
                        </li>
                        <li class="nav-item">
                            <a href="#page5" class="nav-link"><i class="fa fa-envelope"></i>About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#page4" class="nav-link"><i class="fa-solid fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="#page6" class="nav-link"><i class="fa-solid fa-cart-shopping"></i>Shop</a>
                        </li>
                        <li>
                            <a href="login.php" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="headerbottom">
                <div class="content">
                    <h1>Grilled Beef Burger</h1>
                    <p>Special Deal on only <span>TUESDAY</span> every week</p>
                    <p>Buy 3 Get 4th <span>FREE!</span></p>
                    <a href="#page3"><button class="order-btn">Order Now</button></a>
                </div>
                <!-- <img class="firstImage" src="images/tasty_burgers.png" alt=""> -->
            </div>

        </header>
    </div>
    <div class="page2" id="page2">
        <header class="menu-header">
            <div class="menuHeaderTitle">
                <h1>Smoky14's Menu</h1>
            </div>

            <nav class="menu-nav">
                <a href="#hot">
                    <img src="images/WhatsHot.png" alt="What's Hot Icon">
                    What's Hot
                </a>
                <a href="#burger">
                    <img src="images/Burger.png" alt="Burger Icon">
                    Burger
                </a>
                <a href="#chicken">
                    <img src="images/chickenSalads.png" alt="Chickens & Salads Icon">
                    Chickens & Salads
                </a>
                <a href="#tacos">
                    <img src="images/Tacos.png" alt="Tacos Icon">
                    Tacos, Fries & Sides
                </a>
                <a href="#breakfast">
                    <img src="images/Breakfast.png" alt="Breakfast Icon">
                    Breakfast
                </a>
                <a href="#desserts">
                    <img src="images/Drinks.png" alt="Desserts & Drinks Icon">
                    Desserts & Drinks
                </a>
            </nav>
        </header>

        <main class="menu-main">
            <!-- Banner Section -->
            <section class="banner">
                <div class="delivery-info">
                    <img src="images/DeliveryMan.png" alt="Delivery Icon">
                    <h2>Express Delivery<br>"Free Delivery on <br>orders over €20"</h2>
                    <p>Hotline:<strong>0515 96 36 36</strong></p>
                </div>
                <div class="offer buy-one-get-one">
                    <div class="buy1get1Container">
                        <h3>Buy 1 Get 1 <span class="highlight">Save 30%</span></h3>
                        <p>Only on <span class="highlight">Thursday</span> Every Week</p>
                        <p><strong>Only @ €15</strong></p>
                    </div>
                </div>
            </section>

            <!-- Deals Section -->
            <section class="deals">
                <div class="deal1">
                    <h3>Double King <span class="highlight">Cheese</span></h3>
                    <img src="images/DoubleCheese.png" alt="Double King Cheese">
                    <p><strong>Only @ €20</strong></p>
                </div>
                <div class="deal2">
                    <h3>Burger Day</h3>
                    <p><strong>Every Saturday</strong></p>
                    <img src="images/BurgerDay.png" alt="Burger Day">
                    <p><strong>Order more than 2 Burgers and get 50% off with any Burger!</strong></p>
                </div>
                <div class="deal3">
                    <h3>Taco Tuesday</h3>
                    <h4>minced beef</h4>
                    <img src="images/TacoTuesday.png" alt="Taco Tuesday">
                    <p>10% Discount</p>
                    <p>When Buying 3 pcs up to Only on <span class="highlight">Tuesday</span></p>
                </div>
            </section>
        </main>
    </div>
    <div class="page3" id="page3">

        <div class="container">
            <div class="scroll-container">
                <div class="card">

                    <img src="images/Big_King.png" alt="Burger 1">
                    <h3>American Whopper</h3>
                    <p>Beef, lettuce, tomato, onion, cheese</p>
                    <p class="price">€5.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">

                    <img src="images/Bacon_King.png" alt="Burger 2">
                    <h3>BBQ & Bacon Whopper</h3>
                    <p>Grilled beef, smoky bacon, BBQ sauce</p>
                    <p class="price">€10.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">

                    <img src="images/Big_King.png" alt="Burger 3">
                    <h3>Bacon King</h3>
                    <p>Double beef, crispy bacon, cheese</p>
                    <p class="price">€15.00</p>
                    <button class="select-button">Select item</button>
                </div>

                <div class="card">

                    <img src="images/Big_King.png" alt="Burger 1">
                    <h3>American Whopper</h3>
                    <p>Beef, lettuce, tomato, onion, cheese</p>
                    <p class="price">€5.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">

                    <img src="images/Bacon_King.png" alt="Burger 2">
                    <h3>BBQ & Bacon Whopper</h3>
                    <p>Grilled beef, smoky bacon, BBQ sauce</p>
                    <p class="price">€10.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">

                    <img src="images/Chicken_Tendercrisp.png" alt="Burger 3">
                    <h3>Bacon King</h3>
                    <p>Double beef, crispy bacon, cheese</p>
                    <p class="price">€15.00</p>
                    <button class="select-button">Select item</button>
                </div>

                <div class="card">
                    <img src="images/Chicken_Tendercrisp.png" alt="Burger 1">
                    <h3>American Whopper</h3>
                    <p>Beef, lettuce, tomato, onion, cheese</p>
                    <p class="price">€5.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">
                    <img src="images/Burger.png" alt="Burger 2">
                    <h3>BBQ & Bacon Whopper</h3>
                    <p>Grilled beef, smoky bacon, BBQ sauce</p>
                    <p class="price">€10.00</p>
                    <button class="select-button">Select item</button>
                </div>
                <div class="card">
                    <img src="images/Burger.png" alt="Burger 3">
                    <h3>Bacon King</h3>
                    <p>Double beef, crispy bacon, cheese</p>
                    <p class="price">€15.00</p>
                    <button class="select-button">Select item</button>
                </div>
            </div>
        </div>



    </div>
    <div class="page4" id="page4"></div>
    <div class="page5" id="page5">
        <div class="review-carousel">
            <h1>Voice of the Customer!</h1>
            <div class="carousel-container">
                <button class="nav-button left">&#8249;</button>
                <div class="reviews">
                    <div class="review">
                        <img src="images/rating.png" alt="Rating" class="rating">
                        <img src="images/boy.png" alt="Avatar" class="avatar">
                        <p class="review-text">Great service and amazing food!</p>
                    </div>
                    <div class="review">
                        <img src="images/rating.png" alt="Rating" class="rating">
                        <img src="images/woman.png" alt="Avatar" class="avatar">
                        <p class="review-text">Quick delivery and excellent quality!</p>
                    </div>
                    <div class="review">
                        <img src="images/rating.png" alt="Rating" class="rating">
                        <img src="images/man.png" alt="Avatar" class="avatar">
                        <p class="review-text">Loved the variety offered!</p>
                    </div>
                </div>
                <button class="nav-button right">&#8250;</button>
            </div>
            <div class="pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
    <div class="page6" id="page6">
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
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"
                                style="color: #004275;"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"
                                style="color: #74C0FC;"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram fa-beat-fade"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
    </div>
</body>

</html>