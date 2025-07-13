<?php
    require_once 'Model/Cliente.php';
    require_once 'Model/Proyecto.php';
    
    class Asignacion {
        private $idasignacion;
        private $idproyecto;
        private $idcliente;
        private $nombres;
        private $descripcion;
        private $nombre;

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        public function getNombres() {
            return $this->nombres;
        }
        public function setNombres($nombres) {
            $this->nombres = $nombres;
        }
   

        public function getIdasignacion() {
            return $this->idasignacion;
        }

        public function setIdasignacion($idasignacion) {
            $this->idasignacion = $idasignacion;
        }

        public function getIdproyecto() {
            return $this->idproyecto;
        }

        public function setIdproyecto($idproyecto) {
            $this->idproyecto = $idproyecto;
        }

        public function getIdcliente() {
            return $this->idcliente;
        }

        public function setIdcliente($idcliente) {
            $this->idcliente = $idcliente;
        }
    }
?>