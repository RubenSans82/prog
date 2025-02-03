<?php

class Gato extends Animal
{
    public function __construct($patas, $edad)
    {
        $this->patas = $patas;
        $this->edad = $edad;
    }

    public function hacerSonido()
    {
        return "Miauuu";
    }
}


?>