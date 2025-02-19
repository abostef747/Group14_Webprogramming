<!-- 
// SQL query to insert data
// $sql = "INSERT INTO users (user, password) 
// VALUES ('Mussa', 'mumo')";
// Execute the query and check for errors
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully!";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// Close the connection -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Document</title>
</head>
<html>

<body>
    <div class="container">
        <?php
        include("database.php");

        $sqlInsertion = "INSERT INTO users (user, password)
                        VALUES ('Mussa', 'mumo')";
        if (mysqli_query($conn, $sqlInsertion)) {
            echo "New record created successfully!";
        } else {
            echo "Error: " . $sqlInsertion . "<br>" . mysqli_error($conn);
        }


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
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="password">
                <button type="submit" value="login" name="submit" style="margin-bottom: 10px">Login</button>
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