<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../extra.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <section class="login-container">
        <div class="login">
            <a href="../index.html"><img src="images/logo.svg" alt=""></a>

            <form action="../php_files/registration.php" method="post">
                <input type="text" name="username" value="Username" onfocus="this.value=''">
                <input type="email" name="email" value="Email" onfocus="this.value=''">
                <input type="password" name="password" value="Password" onfocus="this.value=''">
                <input type="submit" value="Sign Up">
            </form>

            <span>By signing up, you agree to our <a href="">Terms , Data Policy and Cookies Policy.</a></span>
        </div>

        <div class="signup">
            <span>Have an account? <a href="login.php">Log In</a></span>
        </div>
    </section>
</body>
</html>