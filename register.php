<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="register-form" method="POST" action="register.php">
                    <?php include('errors.php') ?>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"/>
                    <input type="text" name="email" placeholder="email address" value="<?php echo $email; ?>"/>
                    <input type="password" name="password"  placeholder="password"/>
                    <button type="submit" name="reg_user">Register</button>
                    <p class="message">Already Registered? <a href="login.php">Login.</a></p>
                </form>
            </div>
        </div>
        
    </body>
</html>