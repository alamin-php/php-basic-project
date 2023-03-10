<?php 
    function checkNumber($num){
        if($num>=1){
            throw new Exception('Value must be less than 1');
        }
        return true;
    }

    try{
        checkNumber(0);
            echo "If you see this text, the passed value is less then 1";
    }
    catch(Exception $e){
        echo 'Exception Message: '.$e->getMessage();
    }
?>