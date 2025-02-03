<?php

class Persona
{
    public $id;
    public $nombre;
    public $apellido;
    public $dni;
    public static $contador = 0;
    public static function getContador()
    {
        return self::$contador;
    }


    public function __construct($nombre, $apellido, $dni)
    {
        $this->id = self::$contador++;
        $this->nombre = $this->corregir_dato($nombre);
        $this->apellido = $this->corregir_dato($apellido);
        $this->dni = $this->corregir_dato($dni);
    }


    public function nombreCompleto(): string
    {
        return "{$this->nombre} {$this->apellido}";
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        if ($nombre != "")
            $this->nombre = $nombre;
        else
            echo "El nombre no puede estar vacio";
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    private function corregir_dato($dato)
    {
        if (strlen($dato) > 0) {
            $dato = ucfirst($dato); //convierte la primera letra en mayuscula
        }
        return $dato;
    }

    
    public function __tostring()
    {
        return "Id: {$this->id} Nombre: {$this->nombre} Apellido: {$this->apellido} DNI: {$this->dni}";
    }

}