<?php 
// $filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\test.txt';
$filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\attn.txt';
$fp = fopen($filename, 'r');
while($line = fgets($fp)){
    echo $line;
}
while($line = fgets($fp)){
    echo $line;
}
fclose($fp);