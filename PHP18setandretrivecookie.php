<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $cookie_name = "name";
        $cookie_value = "uday";
        $expiration_time = time() + 24 * 3600; // 24 hours from now

        setcookie($cookie_name,$cookie_value,$expiration_time,"/");

        echo "Cookie '$cookie_name' is set.<br><br><br>";

        // Retrive the value of the 'user' cookie,if it exists

        if(isset($_COOKIE[$cookie_name])){
            echo "Value of cookie '$cookie_name' is: ". $_COOKIE[$cookie_name];
        }else{
            echo "Cookie named '$cookie_name' is not set";
        }
    
    ?>
</body>
</html>