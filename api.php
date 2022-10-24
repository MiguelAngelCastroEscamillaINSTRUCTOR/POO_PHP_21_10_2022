<?php

    class a{
        public $mensaje_A = "Clase a entidad";
        public function saludo():string{
            return "Hola soy la clase a :V";
        }
    }
    class b extends a{
        public $mensaje_b = "Clase b entidad";
        public function saludo():string{
            return "Hola soy la clase b :V";
        }
    }
    class c extends b{
        public $mensaje_c = "Clase c entidad";
    }

    $obj = new c();
    var_dump($obj->saludo());


?>