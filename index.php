<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./backend/login.php" method="post">
    <h2>LOGIN</h2> 
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input class="submit" type="submit" value="Login" name="submit">
    <p>Dont have an account? <a href="register.php">Register</a></p>
    </form>
</body>
</html>