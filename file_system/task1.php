<?php 
// $filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\test.txt';
$filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\attn.txt';
if(is_readable($filename)){
    $fp = fopen($filename, 'r');
    while($line = fgets($fp)){
        // echo $line;
    }
    while($line = fgets($fp)){
        // echo $line;
    }
    fclose($fp);
    
    $data = file($filename);
    // echo $data[10];
    print_r($data);
}else{
    echo 'This file has been intranal error';
}