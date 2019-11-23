<?php

    class ControllerHelper{
        
        public function loadView($view,$viewDate = array()){
            extract($viewDate);
            if(file_exists("Views/".$view.".php")){
                require("Views/".$view.".php") ;
            }
            
        }
    
        public function loadTemplate($view,$viewDate = array()){
            require ('Views/Template.php');
            
            
        }
        public function loadViewInTemplate($view,$viewDate = array()){
             extract($viewDate);
            if(file_exists("Views/".$view.".php")){
                require("Views/".$view.".php") ;
            }
            
        }
         
        
        
        
        }
      
                 
            
?>