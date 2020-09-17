<?php

session_start();

if( isset($_GET['captcha_text']) and isset($_SESSION['captcha']) ){

    $captcha_text = $_GET['captcha_text'];

    $image = imagecreate( 120 , 50 ); //(width,height)

    $background_color = imagecolorallocate( $image , 0 , 0 , 0);

    $text_color = imagecolorallocate( $image , 255, 255, 255);

    imagestring( $image, 20, 28, 16, $captcha_text, $text_color); //(font size, leftpos , toppos)



    header( "Content-type: image/png");

    imagepng( $image);

    imagecolorallocate( $text_color );

    imagecolorallocate( $background_color);

    imagedestroy( $image);

}
?>