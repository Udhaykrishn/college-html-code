<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php

    $username = $usernameErr = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate username input
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z]*$/", $username)) {
                $usernameErr = "Only letters and white space allowed";
                $username = "";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h2>Validate Input: Username</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
        <span class="error"><?php echo $usernameErr; ?></span>
        <br><br> <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($username) {
        echo "<h3>Entered Username:</h3>";
        echo htmlspecialchars($username);
    }
    ?>

</body>

</html>