<?php
    class espada{
        public $material;
        public $puntos;
        public $durailidad;
        public function __construct(
            string $material="madera",
            int $puntos=2,
            int $durailidad=100){
                $this->material = $material;
                $this->puntos = $puntos;
                $this->durailidad = $durailidad;
        }
        public function atacar(int $quitar = 4):string{
            $this->set_durailidad($quitar);
            return <<<TEXTO
                Realizo un daño de ${!${''} = $this->puntos} con una espada de ${!${''} = $this->material} ${!${''} = $this->destruye($this->durailidad)}
            TEXTO;
        }
        public function set_durailidad($quitar){
            $this->durailidad -= $quitar;
        }
        static function validacion(string $material):string{
            return <<<TEXTO2
                la espada de ${!${''} = $material} se rompio :( <br>
            TEXTO2;
        }
        public function destruye($durabilidad):string{
            if($durabilidad<=0){
                $this->puntos = -1;
                return self::validacion($this->material);
            }
            else
                return "<br>";
        }
    }

    class diamante extends espada{
        public function __construct(
                string $material="diamante",
                int $puntos=8,
                int $durailidad=600){
            $this->material = $material;
            $this->puntos = $puntos;
            $this->durailidad = $durailidad;
        }
    }
    $obj = new diamante();
    echo $obj->atacar(1);
    var_dump($obj); 
?>