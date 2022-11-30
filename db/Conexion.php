<?php

    class Conexion{
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $bd = "molesrios";

        public function conectar(){
            try{
                $conexion = mysqli_connect(
                    $this ->servidor,
                    $this ->usuario,
                    $this ->password,
                    $this ->bd
                );
                return $conexion;
            }catch(\Throwable $th){
                return $th->getMessage();
            }
        }
    }

?>