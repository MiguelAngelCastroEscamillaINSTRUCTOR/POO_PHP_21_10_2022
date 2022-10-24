<?php
    class Espada{
        public $material;
        public $puntos;
        public $durailidad;
        public $quitar;
        static $espada;
        public function __construct(
            string $material="madera",
            int $puntos=2,
            int $durailidad=100,
            float $quitar = 4){
                $this->material = $material;
                $this->puntos = $puntos;
                $this->durailidad = $durailidad;
                $this->quitar = $quitar;
        }
        static function getIns(){
            if(!self::$espada instanceof self){
                self::$espada = new Espada();
            }
            return self::$espada;
        }
        public function atacar():string{
            return <<<TEXTO
                Realizo un daño de ${!${''} = $this->puntos} con una espada de ${!${''} = $this->material} ${!${''} = $this->destruye()}
            TEXTO;
        }
        static function validacion(string $material):string{
            return <<<TEXTO2
                la espada de ${!${''} = $material} se rompio :( <br>
            TEXTO2;
        }
        public function destruye():string{
            $this->durailidad -= $this->quitar;
            if($this->durailidad<=0){
                $this->puntos = -1;
                return self::validacion($this->material);
            }
            else
                return "<br>";
        }
    }
    class Hierro extends Espada{
        static $hierro;
        public function __construct(
                string $material="hierro",
                int $puntos=4,
                int $durailidad=200,
                float $quitar = 1.5){
            $this->material = $material;
            $this->puntos = $puntos;
            $this->durailidad = $durailidad;
            $this->quitar = $quitar;
        }
        static function getIns(){
            if(!self::$hierro instanceof self){
                self::$hierro = new Hierro();
            }
            return self::$hierro;
        }
    }
    class Diamante extends Espada{
        static $diamante;
        public function __construct(
                string $material="diamante",
                int $puntos=8,
                int $durailidad=600,
                float $quitar = 1){
            $this->material = $material;
            $this->puntos = $puntos;
            $this->durailidad = $durailidad;
            $this->quitar = $quitar;
        }
        static function getIns(){
            if(!self::$diamante instanceof self){
                self::$diamante = new Diamante();
            }
            return self::$diamante;
        }
    }

    echo Espada::getIns()->atacar();
    echo Espada::getIns()->atacar();
    var_dump(Espada::getIns()); 
    echo Hierro::getIns()->atacar();
    echo Hierro::getIns()->atacar();
    var_dump(Hierro::getIns()); 
    echo Diamante::getIns()->atacar();
    echo Diamante::getIns()->atacar();
    var_dump(Diamante::getIns()); 
?>