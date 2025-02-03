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
echo "<br>";
//Ejercicio 6 recorrer un array

$numeros = [1, 2, "hola", 4, 5, 6, ["pepe", "juan"], 8, 9, 10];
var_dump($numeros);
echo "<br>";

//con while recorrer el array y mostrar los valores hasta encontrar un array
$condicion = true;
$i = 0;
while ($condicion) {
    if (gettype($numeros[$i]) == "array") {
        $condicion = false;
    } else {
        echo $numeros[$i] . "<br>";
        $i++;

    }
}
echo "<br>";

//solo mostrar los elementos tipo numero
$condicion = true;
$i = 0;
while ($condicion && $i < count($numeros)) {
    if (gettype($numeros[$i]) == "integer") {
        echo $numeros[$i] . "<br>";
    }
    $i++;
}
echo "<br>";

//crear una funcion para pintar solo los numeros del array
function pintarNumeros($a)
{
    $i = 0;
    while ($i < count($a)) {
        if (gettype($a[$i]) == "integer") {
            echo $a[$i] . "<br>";
        }
        $i++;
    }
    echo "<br>";

}

pintarNumeros($numeros);


//crear una funcion para pintar los strings del array

function pintarStrings($a): void
{
    $i = 0;
    if (gettype($a) == "array") {
        while ($i < count($a)) {
            if (gettype($a[$i]) == "string") {
                echo $a[$i] . "<br>";
            }
            $i++;
        }
    }
}

pintarStrings($numeros);
//pintarStrings(45); //no se puede pasar un numero a la funcion pintarStrings, error


//crear una funcion para contar los numeros del array
function contarNumeros($a): int
{
    $i = 0;
    $contador = 0;
    if (gettype($a) == "array") {
        for ($i = 0; $i < count($a); $i++) {
            if (gettype($a[$i]) == "integer") {
                $contador++;
            }
        }
        echo "Hay $contador números en el array";
        return $contador;
    }
}

contarNumeros($numeros);
echo "<br>";

//buscar($array,$elemento) que devuelva true si el elemento está en el array y false si no está
function buscar(array $a, $elemento): bool
{
    $i = 0;
    $encontrado = false;
    if (gettype($a) == "array") {
        foreach ($a as $valor) {
            if ($valor == $elemento) {
                $encontrado = true;
            }
        }
        return $encontrado;
    }
}

$resultado = buscar($numeros, "ss");
echo $resultado ? "true" : "false";
/*if ($resultado) {
    echo "true";
} else {
    echo "false";}*/
echo "<br>";


//hacer una funcion para devolver el numero mayor

function mayor(array $a): int
{
    $i = 0;
    if (gettype($a) == "array") {

        foreach ($a as $valor) {
            if (gettype($valor) != "integer") {
                continue;
            }

            if ($valor > $i) {
                $i = $valor;
            }
            var_dump($i);
        }
    }
    echo $i;
    return $i;
}


mayor($numeros);
echo "<br>";
//arrays
$clase = [];
$alumno1 = [
    "id" => 1,
    "nombre" => "pepe",
    "edad" => 23,
];

print_r($alumno1["nombre"]);
echo "<br>";
print_r($alumno1);
echo "<br>";
var_dump($alumno1);
echo "<br>";

echo array_push($clase, $alumno1); //añade un elemento al array 
var_dump($clase);
echo "<br>";

$clase[] = [
    "id" => 2,
    "nombre" => "juan",
    "edad" => 25,
];
echo "<br>";


//añade un elemento al array
var_dump($clase);
echo "<br>";
echo $clase[1]["nombre"];
echo "<br>";
echo "----------------------------";
echo "<br>";

$result = [
    [
        "id" => 1,
        "nombre" => "pepe",
        "web" => "www.pepe.com",
        "iddireccion" => 1,
        "calle" => "calle pepe",
        "numero" => 23,
        "ciudad" => "ciudad pepe",
        "idtelefono" => 1,
        "telefono" => 165413513,
    ],
    [
        "id" => 1,
        "nombre" => "pepe",
        "web" => "www.pepe.com",
        "iddireccion" => 2,
        "calle" => "calle pepe2",
        "numero" => 23,
        "ciudad" => "ciudad pepe",
        "idtelefono" => 1,
        "telefono" => 165413513,
    ],
    [
        "id" => 1,
        "nombre" => "pepe",
        "web" => "www.pepe.com",
        "iddireccion" => 1,
        "calle" => "calle pepe",
        "numero" => 23,
        "ciudad" => "ciudad pepe",
        "idtelefono" => 2,
        "telefono" => 23211412,
    ],
    [
        "id" => 1,
        "nombre" => "pepe",
        "web" => "www.pepe.com",
        "iddireccion" => 2,
        "calle" => "calle pepe2",
        "numero" => 23,
        "ciudad" => "ciudad pepe",
        "idtelefono" => 2,
        "telefono" => 23211412,
    ],
];

echo "<br>";

//crear una funcion que devuelva las direcciones
function getDirection(array $a)
{
    $direcciones = [];
    foreach ($a as $element) {
        if ($element["iddireccion"] != null) {
            $direccion = [
                "calle" => $element["calle"],
                "numero" => $element["numero"],
                "ciudad" => $element["ciudad"]
            ];
            if (!in_array($direccion, $direcciones)) {
                $direcciones[] = $direccion;
            }


        }

    }
    return $direcciones;
}

var_dump(getDirection($result));

echo "<br>";
echo "----------------------------";
echo "<br>";

//crear una funcion que devuelva los telefonos

function getPhone(array $a)
{
    $telefonos = [];
    foreach ($a as $element) {
        if ($element["idtelefono"] != null) {
            $telefono = [
                "idtelefono" => $element["idtelefono"],
                "telefono" => $element["telefono"]
            ];
            if (!in_array($telefono, $telefonos)) {
                $telefonos[] = $telefono;
            }
        }
    }
    return $telefonos;
}
var_dump(getPhone($result));

//crear una funcion que devuelva los actores que mas veces se repiten en sakila
$sql="SELECT * FROM actor";
$result=$conexion->query($sql);
$registros = $result ->fetchAll(pdo::FETCH_ASSOC);
$contadorActores=[];
foreach($registros as $actor){
    if(isset($contadorActores[$actor["first_name"]])){
        $contadorActores[$actor["first_name"]]++;
    }else{
        $contadorActores[$actor["first_name"]]=1;
    }
}
print_r($contadorActores);
echo "<br>";
echo "-------------------------------------";
echo "<br>";
var_dump($contadorActores);
