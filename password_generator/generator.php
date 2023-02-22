<?php 
    class Generate{
        public $pass_length;
        public $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=~1234567890';

        public function passwordGenerate($length){
            $this->pass_length    = $length;

            if($length > 6){
                $password = "";
                for($i=0;$i<$length; $i++){
                    $password.=$this->chars[rand(0, strlen($this->chars)-1)];
                }
    
                return $password;
            }else{
                return false;
            }

        }
    }
