<?php 
    function divide($dividend, $divisor){
        if($divisor == 0){
            throw new Exception("Division by Zero\n");
        }
        return $dividend / $divisor;
    }

    try{
        divide(5,0);
        echo "Check Passing Aguments";
    }
    catch(Exception $e){
        echo "Error on line no ". $e->getLine()." exception message ".$e->getMessage();
    }
    finally{
        echo "Process complete.";
    }
?>