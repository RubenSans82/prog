<?php

// Ejercicio 1 crear variables y uso de if else
$numero1 = "34";
$numero2 = "45";

if ($numero1 > $numero2) {
    echo "El número mayor es: {$numero1}";
} else if ($numero1 < $numero2) {
    echo "El número mayor es: {$numero2}";
} else {
    echo "Los números son iguales";
}
echo "<br>";

// Ejercicio 2 mostrar el nombre de usuario si no coincide con el nombre
$nombre = "pepe";
$usuario = "juan";
if ($nombre != $usuario) {
    var_dump($nombre, $usuario);
    echo "<br>";
}

//Ejercicio 3 uso de switch

$signo = ".";

switch ($signo) {
    case '+':
        echo $numero1 + $numero2;
        break;
    case '-':
        echo $numero1 - $numero2;
        break;
    case '.':
        echo $numero1 . $numero2;
        break;

    default:
        echo "No se puede realizar la operación";
        break;
}

if ($numero1 == $numero2) {
    echo "Los números son iguales";
} else if ($numero1 === $numero2) {
    echo "Los números son iguales y del mismo tipo";
} else if ($numero1 != $numero2) {
    echo "Los números son diferentes";
} else if ($numero1 !== $numero2) {
    echo "Los números son diferentes y del mismo tipo";
    echo "<br>";
}

//Ejercicio 4 uso de while

$a = 0;
$asteriscos = "";
while ($a <= 10) {
    $asteriscos .= "*"; // $asteriscos=$asteriscos."*", es lo mismo. Agrega un asterisco a la variable $asteriscos
    $a++;
}
echo $asteriscos;
echo "<br>";
//Ejercicio 5 piramide de asteriscos con while

$a = 4;
$i = 0;
$asteriscos = "";
while ($i < $a) {
    $j = 0;
    while ($j < ($a - $i)) {
        $asteriscos .= "*";
        $j++;
    }
    echo $asteriscos . "<br>";
    $asteriscos = "";

    $i++;
}
