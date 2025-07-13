<?php
    class Proyecto{
        private $idproyecto;
        private $nombre;
        private $empresa;
        private $fechainicio;
        private $fechaentrega;
        private $descripcion;

        public function getIdproyecto() {
            return $this->idproyecto;
        }

        public function setIdproyecto($idproyecto) {
            $this->idproyecto = $idproyecto;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getEmpresa() {
            return $this->empresa;
        }

        public function setEmpresa($empresa) {
            $this->empresa = $empresa;
        }

        public function getFechainicio() {
            return $this->fechainicio;
        }

        public function setFechainicio($fechainicio) {
            $this->fechainicio = $fechainicio;
        }

        public function getFechaentrega() {
            return $this->fechaentrega;
        }

        public function setFechaentrega($fechaentrega) {
            $this->fechaentrega = $fechaentrega;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    }
?>