<?php 
    abstract class Father{
        private $accNo;
        private $amount;
        private $deduction;

        public function bankDetails($deduction=0){
            echo "Account No ".$this->accNo = '122-XXX-XXX-990'.PHP_EOL;
            echo "Total Balance ".$this->amount = 400000;
            echo PHP_EOL;
        }
        public function deductionBalance($deduction=0){
            echo "now current balance: ".$this->amount -= $deduction;
        }
    }

    class Son extends Father{

    }

    $obj = new Father();
    $obj->bankDetails();

    $obj = new Son();
    $obj->bankDetails();
    $obj->deductionBalance(300000);
?>