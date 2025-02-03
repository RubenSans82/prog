<?php

include_once("Operacion.php");
class Sumar implements Operacion
{
    public function calcular($a, $b)
    {
        return $a + $b;
    }

    public function mostrar($a, $b)
    {
        return "El resultado de la suma de $a + $b es: {$this->calcular($a, $b)}";
    }
}

?>