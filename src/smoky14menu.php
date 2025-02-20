<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>
</head>

<body>
    <div class="page2" id="page2">
        <?php
        include("navbar.php");
        ?>
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
</body>

</html>