<?php
include("database.php");
?>

<body>
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
</body>