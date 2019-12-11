<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        if(isset($_GET["user"]))
        {
        if($_GET["user"] == "successful")
        {
        echo "<h4>User Successfully Added!</h4>";
        }
        else if($_GET["user"] == "duplicate")
        {
        echo "<h4>User Already Exists</h4>";
        echo "<h4>Please Enter another Username &amp Password</h4>";
        }
        
        }
        else
        {
        echo "<h4>Sign Up</h4>";
        }
        ?>
    </body>
</html>