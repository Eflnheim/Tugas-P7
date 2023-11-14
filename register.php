<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./backend/register.php" method="post">
    <h2>REGISTER</h2>
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm" placeholder="Confirm your password">
        <input class="submit" type="submit" value="Register" name="submit">
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
</body>
</html>