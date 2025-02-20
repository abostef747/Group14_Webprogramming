<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful! <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>

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
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="repeatpassword" placeholder="repeat password" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-phone"></i>
                <input type="tel" name="phone" placeholder="phone" required>
            </div>
            <div class="form-group">
                <button type="submit" value="register" name="submit">Register</button>
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