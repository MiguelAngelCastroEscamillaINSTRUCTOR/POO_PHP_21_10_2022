<?php
    
    include "miguel.php";

    class Usuario implements UsuarioMiguel{
        public function getAllUser():object{
            return [];
        }
        public function getUserCedula(int $cedula):array{
            return (object) [];
        }
        public function getLoginUser(string $usuario, string $contraseña):array{
            return [];
        }
    }
 

    
?>