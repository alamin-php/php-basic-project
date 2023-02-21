<?php 
    class Apps{
        public function getInput($input, $function){
            $getInput = $input;
            $getFunction = $function;
            if(isset($getInput) && isset($getFunction)){
                switch ($getFunction) {
                    case 'strlen':
                     return strlen($getInput);
                      break;
                    case 'strrev':
                     return strrev($getInput);
                      break;
                    case 'strtoupper':
                     return strtoupper($getInput);
                      break;
                    case 'strtolower':
                     return strtolower($getInput);
                      break;
                    case 'ucfirst':
                     return ucfirst($getInput);
                      break;
                    case 'ucwords':
                     return ucwords($getInput);
                      break;
                    case 'trim':
                     return trim($getInput);
                      break;
                    case 'str_repeat':
                     return str_repeat($getInput, 3);
                      break;
                    
                    default:
                     return "Invalid";
                  }
            }
        }
    }
