<?php
define("NUM_TEL","06 60 44 32 72");
define("ADDR_MAIL","cabanne23@gmail.com");
define("ADDR_POST","01000");

function formatVerif($imagePath){
    if (isset($_SERVER['HHTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'avif') !==false){
        $imagePath = preg_replace('/\.(jpg|jpeg|png)$/', '.avif', $imagePath);
    } elseif (isset($_SERVER['HHTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'webp') !==false){
        $imagePath = preg_replace('/\.(jpg|jpeg|png)$/', '.webp', $imagePath);
    }

    return $imagePath;
}