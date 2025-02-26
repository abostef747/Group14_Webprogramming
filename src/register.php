<?php
include("database.php");

session_start();
if (isset($_SESSION["username"])) {
    header("Location: index.php");
}

if (isset($_POST['register'])) {
    session_start();
}
if (isset($_SESSION["username"])) {
    header("Location: index.php");
}

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $role = 'user';
    $password = $_POST["password"];

    $role = 'user';

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg = "Email is not valid try again!";
    } else if (strlen($password) < 6) {
        $errorMsg = "password has to be more than 6 characters";
    } else if ($execute = mysqli_num_rows($result) > 0) {
        $errorMsg = "Email already exists";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg = "Email is not valid try again!";
    } else if (strlen($password) < 6) {
        $errorMsg = "password has to be more than 6 characters";
    } else if ($execute = mysqli_num_rows($result) > 0) {
        $errorMsg = "Email already exists";
    } else {
        $sql = "INSERT INTO users (username, email, password, role) 
        VALUES ('$username', '$email', '$password', '$role')";

        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            header("location: login.php");
        } else {
            $errorMsg = "Error: you are not registered";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/registerstyle.css">
    <title>Document</title>
</head>
<html>

<body>
    <div class="container">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h1>Register form</h1>
            <h3>save your orders and track them with us</h3>
            <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="email" name="email" placeholder="email" required>
                <i class="fa-solid fa-lock"></i>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>


            <div class="form-group">
                <button type="submit" value="register" name="register">Register</button>
                <button type="submit" value="register" name="register">Register</button>
            </div>


            <div class="form-group">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="form-group">
                <p>Return to the homepage?<a href="index.php">homepage</a></p>
            </div>
        </form>
    </div>

</html>

<?php
mysqli_close($conn);
?>