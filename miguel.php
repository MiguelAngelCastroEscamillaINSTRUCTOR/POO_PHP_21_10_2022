<?php

    interface UsuarioMiguel{
        public function getAllUser():object;
        public function getUserCedula(int $cedula):array;
        public function getLoginUser(string $usuario, string $contraseña):array;
    }
?>