<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgRAmmer</title>
    <link rel="stylesheet" href="styke_login.css">
</head>

<body>
    <form action="dblogin.php" method = "post">
    <div class="box">
        <div class="form">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="text" required="required" name = "username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name = "pswd">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="register.php">Signup</a>
            </div>
            <input type="submit" value="Login">
        </div>
    </div>
    </form>


</body>

</html>