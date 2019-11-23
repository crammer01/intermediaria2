<?php

    class ControllerHome extends ControllerHelper{
        
        Public  Function index(){
            $dados = array(
              "quantidade" =>5  
            );
            $this->loadTemplate("home",$dados);
        }
        
            

        Public  Function teste(){
             $dados = array(
              "quantidade" =>2
            );
            $this->loadTemplate("teste",$dados);
        }
          Public  Function cachorro(){
             $dados = array(
              "quantidade" =>2
            );
            $this->loadTemplate("cachorro",$dados);
        }
        
    }

?>