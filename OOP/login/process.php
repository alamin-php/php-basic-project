<?php 
    class User{
        private $username;
        private $password;

        public function __construct($username,$password){
            $this->username = $username;
            $this->password = $password;
        }
        public function getUsername(){
            return $this->username;

        }
        public function getPassword(){
            return $this->password;

        }

        public function getLoginDetails(){
            return "Username: ".$this->username." and Password: ".$this->password;
        }
    }

    class Admin extends User{
        public static function isAdmin(){
            return true;
        }
    }

?>