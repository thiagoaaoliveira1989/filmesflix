<?php

require_once __DIR__ . "/../view/galeria.php";


class Mensagem{
    public static function mostrar(){
        if( isset($_SESSION["msg"])){
            $msg = $_SESSION["msg"];
            unset($_SESSION["msg"]);
            return "<script>
                    M.toast({
                        html: '$msg'
                    });
                  </script>
            ";
        }
    }
}


