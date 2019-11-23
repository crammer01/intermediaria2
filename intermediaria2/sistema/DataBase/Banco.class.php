<?php
    class Banco{
        private static $DSN = "mysql:adocao=teste;host=localhost";
        private static $USER = "root";
        private static $PASS = "";
        private static $instance;

        public static function instanciar(){
            if(!self::$instance){
                try{

                    self::$instance = new PDO(self::$DSN, self::$USER, self::$PASS);

                }catch (Exception $e){
                    $e->getMessage();
                    die();
                }
            }

            return self::$instance;
        }

        public function pesquisarcachorro(){
            $data = "SELECT * FROM cachorro";
            $data = self::instanciar()->prepare($data);
            $data->execute();
            $data = $data->fetchAll();

            print_r($data);
        }
         public function pesquisargato(){
            $data = "SELECT * FROM gato";
            $data = self::instanciar()->prepare($data);
            $data->execute();
            $data = $data->fetchAll();

            print_r($data);
        }
         public function pesquisaroutros(){
            $data = "SELECT * FROM outros";
            $data = self::instanciar()->prepare($data);
            $data->execute();
            $data = $data->fetchAll();

            print_r($data);
        }
    }
?>
