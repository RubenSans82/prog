<?php
include("conexiondb.php");
include("Persona.php");
include("Alumno.php");
include("Animal.php");
include("Gato.php");
include("Operacion.php");
include("sumar.php");
include("multiplicar.php");

$alumno = new Alumno("juan","martinez","98654321");
$alumno1 = new Alumno("pepe","gonzalez","98654413");
$alumno2 = new Alumno("maria","gomez","98654321");
$alumno1->matricularAsignatura("matematicas");

var_dump($alumno->__tostring());
echo"<br>";
var_dump($alumno1->__tostring());
echo "<br>";
var_dump($alumno2->__tostring());
echo "<br>";
var_dump( $alumno1->get_asignaturas());
echo"<br>";
print_r($alumno1->get_asignaturas());
echo"<br>";

$gato = new Gato(4, 2);
var_dump($gato->hacerSonido());
echo "<br>";
function operar(Operacion $op,$a,$b): mixed
{
    return $op->mostrar($a,$b);
}

$sumar = new Sumar();
$mult = new Multiplicar();

echo operar($sumar, 5, 3);
echo "<br>";
echo operar($mult, 5, 3);
echo "<br>";

echo Persona::$contador;
echo "<br>";
echo Alumno::$contador;
echo "<br>";
echo Alumno::getContador();

?>