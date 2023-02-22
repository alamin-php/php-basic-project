<?php 
    class Generate{
        public $pass_length;
        public $include_symble;
        public $include_number;
        public $available_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ';
        public $available_symboles = '!@#$%^&*()_+-=~';
        public $available_numbers = '1234567890';

        public function passwordGenerate($length,$symbole,$numbers){
            $this->pass_length    = $length;
            $this->include_symble = $symbole;
            $this->include_number = $numbers;

            if($length > 6){
                if($symbole){
                   $this->available_chars.=$this->available_symboles;
                }elseif($numbers){
                    $this->available_chars.=$this->available_numbers;
                }
                
                $password = "";
                for($i=0;$i<$length; $i++){
                    $password.=$this->available_chars[rand(0, strlen($this->available_chars)-1)];
                }
    
                return $password;
            }else{
                return false;
            }

        }
    }
?>