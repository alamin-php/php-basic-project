<?php 
    class Helper{
        public static function getTitle(){
            $url = $_SERVER['PHP_SELF'];
            $url = ltrim($url, '/');
            switch ($url) {
                case 'index.php':
                    echo 'Home';
                    break;
                case 'job_apply.php':
                    echo 'Job Apply';
                    break;
                case 'job_details.php':
                    echo 'Job Details';
                    break;
                case 'job_list.php':
                    echo 'Job List';
                    break;
                default:
                    echo 'Home';
                    break;
            }
        }
    }
?>