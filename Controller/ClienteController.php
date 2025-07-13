<?php
    require_once './Model/ClienteModel.php';

    class ClienteController{

        public function cargar(){
            $model = new ClienteModel();
            $clientes = $model->cargar();
            require_once './View/ViewCargarClientes.php';
        }

        public function guardar(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ClienteModel();
            $cliente = new Cliente();
            $cliente->setNombres($_POST['txtNom']);
            $cliente->setApellidos($_POST['txtApe']);
            $cliente->setEmail($_POST['txtEma']);
            $cliente->setCelular($_POST['txtCel']);
            $cliente->setEmpresa($_POST['txtEmp']);
            $model->guardar($cliente);
            header('Location: index.php?accion=cargarproyectos');
        } else {
            require_once './View/ViewGuardarClientes.php';
        }
        }


         public function borrar(){
        if(isset($_GET['idclie'])){
            $model =new ClienteModel();
            $model->borrar($_GET['idclie']);
            header('Location: index.php?accion=cargarclientes');
        }

    }
    }
?>