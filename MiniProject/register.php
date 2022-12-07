<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgRAmmer</title>
    <link rel="stylesheet" href="styke_register.css">
</head>

<body>
    <form action="dbregister.php" method ="post">
    <div class="box">
        <div class="form">
            <h2>Register Here</h2>
            <div class="inputBox">
                <input type="text" required="required" name ="name">
                <span>Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name ="username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" required="required" name ="emailid">
                <span>Email Address</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name ="pswd">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
            <a href="#"></a>
                <a href="login.php">Sign In</a>
            </div>
            <input type="submit" value="Sign Up">
        </div>
    </div>
    </form>


</body>

</html>