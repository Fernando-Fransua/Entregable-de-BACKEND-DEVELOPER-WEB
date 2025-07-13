<?php
    class Cliente{
        private $idcliente;
        private $nombres;
        private $apellidos;
        private $email;
        private $celular;
        private $empresa;

        public function getIdcliente() {
            return $this->idcliente;
        }

        public function setIdcliente($idcliente) {
            $this->idcliente = $idcliente;
        }

        public function getNombres() {
            return $this->nombres;
        }
        
        public function setNombres($nombres) {
            $this->nombres = $nombres;
        }

        public function getApellidos() {
            return $this->apellidos;
        }   

        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setCelular($celular) {
            $this->celular = $celular;
        }

        public function getEmpresa() {
            return $this->empresa;
        }
        public function setEmpresa($empresa) {
            $this->empresa = $empresa;
        }


    } 
?>