<?php


function generateCaptcha($length = 6) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = "";

    $charLength = strlen($characters);


    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, $charLength - 1)];
    }

    $_SESSION['captcha'] = $captcha;

    return $captcha;
}


session_start();


$captchaCode = generateCaptcha(6);

echo "Generated Captcha: $captchaCode";
?>
