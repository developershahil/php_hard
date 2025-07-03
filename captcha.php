<?php
    session_start();
    
    $captcha =  bin2hex(random_bytes(3));
    $_SESSION['captcha'] = $captcha;
    
    $image = imagecreate(150,50);

    $bgcolor = imagecolorallocate($image,255,255,255);
    $text_color = imagecolorallocate($image, 0 ,0 ,0);
    
    imagestring($image, 5,40,15, $captcha, $text_color);

    header("Content-Type: image/png");
    imagepng($image);

    imagedestroy($image);
?>