<?php

if (isset($_POST['register'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="loginstyle.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
    <style>
        body {
            background-image: url('images/burgerback1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            scroll-behavior: smooth;
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: cyan;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
            border-color: black;
            border-style: solid;
            border: 2px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.75);
        }

        .form-group {
            max-height: fit-content;
            margin-bottom: 0.2rem;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
        }

        .form-group label {
            margin-bottom: 0.1rem;
            font-size: 0.8rem;
        }

        .form-group .button {
            align-items: center;
            justify-content: center;
            width: 50%;
        }

        .bottomlink {
            margin-top: 0;
            font-size: 0.8rem;
        }
    </style>
</head>
<html>

<body>
    <div class="container">
        <?php
        include("database.php");

        // $sqlInsertion = "";
        //                 if (mysqli_query($conn, $sqlInsertion)) {
        //                          echo "New record created successfully!";
        //                     } else {
        //                          echo "Error: " . $sqlInsertion . "<br>" . mysqli_error($conn);
        //                     }


        // $sql = "SELECT * FROM users WHERE user = 'Sohaib'";
        // $result = mysqli_query( $conn, $sql );

        // if ( mysqli_num_rows( $result ) > 0){
        //     $row = mysqli_fetch_assoc( $result );
        //     echo "id: " . $row["id"]. "<br>";
        //     echo "Name: " . $row["user"]. "<br>";
        //     echo "Password: " . $row["password"]. "<br>";
        //     echo "Date:". $row["reg_date"]."<br>";
        // }else{
        //     echo "no user found!";
        // }
        // mysqli_close($conn);
        ?>
        <form action="login.php" method="post">
            <h1>Login to our platform</h1>
            <h5>Login and start ordering</h5>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <button type="submit" value="login" name="submit" style="margin-bottom: 10px">Login</button>
            </div>
            <div class="form-group">
                <p style="margin-top: 1px">Don't have an account? <a href="register.php">register</a></p>
                <p style="margin-top: 1px">Return to the homepage?<a href="index.php">homepage</a></p>
            </div>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            if ($_POST["email"] != "" || $_POST["password"] != "") {
                echo "<h3 style='color: green; margin: 0 auto'>Successfully logged in</h3> <br>";
                echo "this is your email: {$_POST["email"]} <br>";
                echo "this is your password: {$_POST["password"]} <br>";
            } else {
                echo "<h3 style='color: red; margin: 0 auto'>Please enter your email and password</h3> <br>";
            }
        }
        ?>
    </div>

</html>