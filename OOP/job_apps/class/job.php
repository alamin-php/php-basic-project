<?php
class Job{
    private $id;
    private $title;
    private $company;
    private $location;
    private $education;
    private $experience;
    private $requirments;

    public function __construct($id,$title,$company,$location,$education,$experience,$requirments){
        $this->id          = $id;
        $this->title       = $title;
        $this->company     = $company;
        $this->location    = $location;
        $this->education   = $education;
        $this->experience  = $experience;
        $this->requirments = $requirments;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getCompany(){
        return $this->company;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getEducation(){
        return $this->education;
    }
    public function getExperience(){
        return $this->experience;
    }
    public function getRequirments(){
        return $this->requirments;
    }
    // get all jobs 
    public static function getAllJobs(){
        $jobs = array(
            new Job(1,'Business Analysis','Microsoft', 'USA','Bachelor of Computer Science and Engineering','2 Year(s)', 'Must have know business analysis'),
            new Job(2,'Project Manager','Ostad', 'Gulshan','Masters of Computer Science and Engineering','10 Year(s)', 'Must have know largest project handel'),
            new Job(3,'Software Developer','BJIT', 'Gulshan','Bachelor of Computer Science and Engineering','1 Year(s)', 'Must have know PHP'),
            new Job(4,'Laravel Developer','WebHaks', 'Mirpur, DOSH','Bachelor of Computer Science and Engineering','5 Year(s)', 'Must have know Laravel'),
            new Job(5,'Python Developer','Next Venture', 'Gulshan','Bachelor of Computer Science and Engineering','3 Year(s)', 'Must have know PHP'),
            new Job(6,'.Net Developer','Data Soft', 'Shamoly','Bachelor of Computer Science and Engineering','2 Year(s)', 'Must have know .Net'),
        );
        return $jobs;
    }
    // get job by id 
    public static function getJobByID($id){
        $jobs = self::getAllJobs();
        foreach($jobs as $job){
            if($job->getId() == $id){
                return $job;
            }
        }
        return null;
    }
}