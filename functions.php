<?php
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