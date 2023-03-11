<?php 
$filename = 'D:\xampp\htdocs\php-basic-project\file_system\data\file3.txt';

$students = array(
    array(
        'fname'=>'Shahin',
        'lname'=>'Ahmed',
        'age'=>23,
        'class'=>5,
        'roll'=>9,
    ),
    array(
        'fname'=>'Sabbir',
        'lname'=>'Ahmed',
        'age'=>20,
        'class'=>10,
        'roll'=>7,
    ),
    array(
        'fname'=>'Sharif',
        'lname'=>'Ahmed',
        'age'=>19,
        'class'=>9,
        'roll'=>3,
    ),
);

$fp = fopen($filename, 'w');
foreach($students as $student){
    $data = sprintf("%s,%s,%s,%s,%s \n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    fwrite($fp,$data);
}
fclose($fp);
