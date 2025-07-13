<?php
    require_once './Model/ProyectoModel.php';

    class ProyectoController{

        public function cargar(){
            $model = new ProyectoModel();
            $proyectos = $model->cargar();
            require_once './View/ViewCargarProyecto.php';
        }

        public function guardar(){
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ProyectoModel();
            $proyecto = new Proyecto();
            $proyecto->setNombre($_POST['txtNom']);
            $proyecto->setEmpresa($_POST['txtEmp']);
            $proyecto->setFechainicio($_POST['txtFei']);
            $proyecto->setFechaentrega($_POST['txtFea']);
            $proyecto->setDescripcion($_POST['txtDes']);
            $model->guardar($proyecto);
            header('Location: index.php?accion=cargarproyectos');
        } else {
            require_once './View/ViewGuardaProyecto.php';
        }
        

        }

         public function borrar(){
        if(isset($_GET['idproy'])){
            $model =new ProyectoModel();
            $model->borrar($_GET['idproy']);
            header('Location: index.php?accion=cargarproyectos');
        }

    }

    }
?>