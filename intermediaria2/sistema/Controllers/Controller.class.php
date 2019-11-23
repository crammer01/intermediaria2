<?php

class Controller {

    public function run() {

        $url = isset($_GET['url']) ? $_GET['url'] : "/";
        $url = explode('/', $url);


        $controllerAtual = "";
        $metodoAtual = "";
        $parametros = array();

        if ($url[0] != "") {
            $controllerAtual = "Controller" . ucfirst($url[0]);

            array_shift($url);
            //nao pode estar vazia e tem que existir
            if (isset($url[0]) && !empty($url[0])) {

                echo $metodoAtual = $url[0];
            } else {

                $metodoAtual = "index";
            }
            if (count($url) > 0) {
                $parametros = $url;
            }
            print_r($url);
        } else {
            $controllerAtual = "controllerHome";
            $metodoAtual = "index";
        }

        $c = new $controllerAtual();
        //por essa funcao posso passar os parmetros
        call_user_func_array(array($c,$metodoAtual), $parametros);
        //     echo "<hr>";
        //   echo "Controller Atual:".$controllerAtual."<br>";
        // echo "Metodo Atual:".$metodoAtual."<br>";
        //echo "Parametros".print_r($parametros,TRUE);
    }

}

?>