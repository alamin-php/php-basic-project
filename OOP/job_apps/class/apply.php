<?php
class Apply{
    private $jobId;
    private $name;
    private $email;
    private $phone;
    private $resume;

    // get applicant informations 
    public function __construct($jobId,$name,$email,$phone,$resume){
        $this->jobId  = $jobId;
        $this->name   = $name;
        $this->email  = $email;
        $this->phone  = $phone;
        $this->resume = $resume;
    }
    // applicant data save
    public function save(){
        return true;
    }
}
?>