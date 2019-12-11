<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        echo "<img src='https://www.google.com/images/icons/product/keep-512.png' id='logo'/>";
        echo "<br>";
        echo "<form class='form' action='check_signup.php' method='POST'>" ;
        echo "<h4>Sign Up</h4>";
        echo "<label class='label' for='username'>Username</label>";
        echo "<input class='text' type='text' name='username' placeholder='Username'>";
        echo "<br>";
        echo "<label class='label' for='password'>Passwod</label>";
        echo "<input class='text' type='password' name='password' placeholder='Password'>";
        echo "<br>";
        echo "<input class'submit' type='submit' value='Sign Up'>";
        
        echo "</form>";
        ?>
    </body>
</html>