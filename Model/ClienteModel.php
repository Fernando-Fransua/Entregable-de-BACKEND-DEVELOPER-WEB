<?php
    require_once 'config/DB.php';
    require_once 'Model/Cliente.php';

    class Clientemodel{
        private $db;

        public function __construct(){
            $this->db = DB::conectar();
        }

        public function guardar(Cliente $cliente){
            $sql = "insert into clientes (nombres, apellidos, email, celular, empresa) values (:nom, :ape, :ema, :cel, :emp)";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(':nom', $cliente->getNombres());
            $ps->bindParam(':ape', $cliente->getApellidos());
            $ps->bindParam(':ema', $cliente->getEmail());
            $ps->bindParam(':cel', $cliente->getCelular());
            $ps->bindParam(':emp', $cliente->getEmpresa());
            $ps->execute();

        }

        public function cargar(){
            $sql = "select * from clientes";
            $ps = $this->db->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
            $clientes = array();
            foreach($filas as $f){
                $cli = new Cliente();
                $cli->setIdcliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setEmail($f[3]);
                $cli->setCelular($f[4]);
                $cli->setEmpresa($f[5]);
                array_push($clientes, $cli);
            }
            return $clientes;
        }
        public function borrar($idclie){
        $sql = "delete from clientes where idcliente=:idclie";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idclie', $idclie);
        $ps->execute();
    }
        
    }

    
?>