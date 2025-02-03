<?php


class Alumno extends Persona
{

    private $asignaturas = [];

    public function matricularAsignatura($asignaturas)
    {
        if (!isset($this->asignaturas[$asignaturas])) {
            $this->asignaturas[$asignaturas] = "sin calificar";
        }
    }

    public function get_asignaturas()
    {
        return $this->asignaturas;
    }

    public function __tostring()
    {
        return parent::__tostring() . " Asignaturas: " . implode(",", $this->asignaturas);
    }

}

?>