<?php


class Alumno {
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $carnet;
    private $dir; 
    private $seccion;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getnombre() {
        return $this->nombre;
    }

    public function getapellido() {
        return $this->apellido;
    }

    public function getfechaNac() {
        return $this->fechaNac;
    }

    public function getcarnet() {
        return $this->carnet;
    }

    public function getdir() {
        return $this->dir;
    }

    public function getseccion() {
        return $this->seccion;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setapellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setfechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function setcarnet($carnet) {
        $this->carnet = $carnet;
    }

    public function setdir($dir) {
        $this->dir = $dir;
    }

    public function setseccion($seccion) {
        $this->seccion = $seccion;
    }


}
