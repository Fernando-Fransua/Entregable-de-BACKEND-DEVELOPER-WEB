<?php
    require_once 'config/DB.php';
    require_once 'Model/Proyecto.php';

    class ProyectoModel{

        private $db;

        public function __construct(){
            $this->db = DB::conectar();
        }

        public function guardar(Proyecto $proyecto){
            $sql = "insert into proyectos (nombre, empresa, fechainicio, fechaentrega, descripcion) values (:nom, :emp, :fei, :fea, :des)";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(':nom', $proyecto->getNombre());
            $ps->bindParam(':emp', $proyecto->getEmpresa());
            $ps->bindParam(':fei', $proyecto->getFechainicio());
            $ps->bindParam(':fea', $proyecto->getFechaentrega());
            $ps->bindParam(':des', $proyecto->getDescripcion());
            $ps->execute();
        }

        public function cargar(){
            $sql = "select * from proyectos";
            $ps = $this->db->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
            $proyectos = array();
            foreach($filas as $f){
                $pro = new Proyecto();
                $pro->setIdproyecto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setEmpresa($f[2]);
                $pro->setFechainicio($f[3]);
                $pro->setFechaentrega($f[4]);
                $pro->setDescripcion($f[5]);
                array_push($proyectos, $pro);
            }
            return $proyectos;
        }

        public function borrar($idproy){
        $sql = "delete from proyectos where idproyecto=:idproy";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idproy', $idproy);
        $ps->execute();
    }
    }

?>