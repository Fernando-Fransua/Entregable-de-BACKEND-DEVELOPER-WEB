<?php
    require_once './Model/AsignacionModel.php';

    class AsignacionController {
        public function cargar(){
            $model = new AsignacionModel();
            $asignaciones = $model->cargar();
            require_once './View/ViewCargarAsignacion.php';
        } 

        public function guardar(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $model = new AsignacionModel();
        $asignacion = new Asignacion();
      
        $asignacion->setIdcliente($_POST['txtCli']);
        $asignacion->setIdproyecto($_POST['txtPro']);
        $model->guardar($asignacion); 
        header('Location: index.php?accion=cargarasignaciones');
    } else {
        require_once './Model/ClienteModel.php';
        require_once './Model/ProyectoModel.php';
        $cliente = new ClienteModel();
        $proyecto = new ProyectoModel();
        $clientes = $cliente->cargar();
        $proyectos = $proyecto->cargar();
        require_once './View/ViewGuardarAsignacion.php';
    }
}

        public function borrar(){
                if(isset($_GET['idasig'])){
                    $model =new AsignacionModel();
                    $model->borrar($_GET['idasig']);
                    header('Location: index.php?accion=cargarasignaciones');
                }
            }
    }

     
?>