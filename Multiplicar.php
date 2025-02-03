<?php

include_once("Operacion.php");
class Multiplicar implements Operacion
{
    public function calcular($a, $b)
    {
        return $a * $b;
    }

    public function mostrar($a, $b)
    {
        return "El resultado de la multiplicacion de $a * $b es: {$this->calcular($a, $b)}";
    }
}

?>