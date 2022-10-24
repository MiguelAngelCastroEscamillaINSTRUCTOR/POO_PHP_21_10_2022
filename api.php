<?php
    class humano{
        public $extremidades;
        public $torso;
        public $cerebro;
        public function __construct(int $extremidades, 
                                    bool $torso,
                                    bool $cerebro){

            $this->extremidades = $extremidades;
            $this->torso = $torso;
            $this->cerebro = $cerebro;
        }
        public function mostrarDatos():string{
            return <<<HTML
                <p>extremidades: <b>${!${''} = $this->extremidades}</b></p>
                <p>torso: <b>${!${''} = $this->torso}</b></p>
                <p>cerebro: <b>${!${''} = $this->cerebro}</b></p>
            HTML;
        }
    }

    $obj = new humano(cerebro: true, extremidades: 4, torso:true);

    echo $obj->mostrarDatos();
?>