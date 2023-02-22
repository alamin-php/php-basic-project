<?php 
   if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $password_length = $_POST['length'];
        $include_symboles = $_POST['symbole'];
        $include_numbers = $_POST['numbers'];
        $available_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ';
        $available_symboles = '!@#$%^&*()_+-=~';
        $available_numbers = '1234567890';

        if($include_symboles){
            $available_chars.=$available_symboles;
        }
        if($include_numbers){
            $available_chars.=$available_numbers;
        }

        $password="";

        for($i=0; $i<$password_length; $i++){
           $string_len = strlen($available_chars);
            $password.=$available_chars[rand(0,$string_len-1)];
        }
        echo "Your generated password:".$password;
   }