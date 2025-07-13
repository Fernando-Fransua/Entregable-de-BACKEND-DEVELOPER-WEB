<?php
    require_once 'config/DB.php';
    require_once 'Model/Asignacion.php';
    require_once 'Model/ClienteModel.php';
    require_once 'Model/ProyectoModel.php';

    class   AsignacionModel{
         private $db;

        public function __construct(){
            $this->db = DB::conectar();
        }

        public function guardar(Asignacion $asignacion){
            $sql = "insert into asignacion (idcliente,idproyecto) values (:idcliente,:idproyecto)";
            $ps=$this->db->prepare($sql);
            $ps->bindValue(':idcliente', $asignacion->getIdCliente());
            $ps->bindValue(':idproyecto', $asignacion->getIdProyecto());
            $ps->execute();
        }

        public function cargar(){
               $sql = "select a.idasignacion, a.idcliente, a.idproyecto, c.nombres, c.apellidos, p.nombre, p.descripcion, p.nombre
            from asignacion a
            join clientes c on a.idcliente = c.idcliente
            join proyectos p on a.idproyecto = p.idproyecto";
            $ps = $this->db->prepare($sql);
            $ps->execute();
            $filas = $ps->fetchAll();
            $asignacions = array();
                foreach($filas as $f){
                $asi = new Asignacion();
                $asi->setIdasignacion($f[0]);
                $asi->setIdcliente($f[1]);
                $asi->setIdproyecto($f[2]);
                $asi->setNombres($f[3] . ' ' . $f[4]);
                $asi->setDescripcion($f[5]);
                $asi->setNombre($f[6]);

                array_push($asignacions, $asi);
            }
            return $asignacions;
        }

        public function borrar($idasig){
        $sql = "delete from asignacion where idasignacion=:idasig";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idasig', $idasig);
        $ps->execute();
    }
    }
?>