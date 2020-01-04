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
                <form class="login-form" method="POST" action="login.php">
                    <? include('errors.php') ?>
                    <input type="text" name="username" placeholder="username"/>
                    <input type="password" name="password" placeholder="password"/>
                    <button type="submit" name="login_btn">login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p>
                </form>
            </div>
        </div>
        
    </body>
</html>