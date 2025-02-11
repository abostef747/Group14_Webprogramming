<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Document</title>
</head>
<html>
    <body>
    <div class="container">
        <form action="register.php" method="post">
            <h1>Register form</h1>
            <h3>save your orders and track them with us</h3>
            <div class="form-group">   
            <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group">
                <input type="password" name="repeatpassword" placeholder="repeat password" required>
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