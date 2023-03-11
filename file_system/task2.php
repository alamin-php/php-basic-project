<?php 
$filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\task2.txt';
$fp = fopen($filename, 'a');
fwrite($fp, "Al-Amin\n");
fwrite($fp, "Orin\n");
fwrite($fp, "Moni\n");
fclose($fp);
