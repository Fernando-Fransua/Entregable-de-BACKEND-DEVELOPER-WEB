<?php
    require_once './controller/ClienteController.php';
    require_once './Controller/ProyectoController.php';
    require_once './Controller/AsignacionController.php';
    session_start();

    if (!isset($_SESSION['usuario']) && (!isset($_GET['accion']) || $_GET['accion'] !== 'login')) {
    header('Location: View/login.php');
    exit;
    }
    $accion = isset($_GET['accion']) ? $_GET['accion'] : 'cargarclientes';
    switch($accion){
    case 'cargarclientes':
            $controller=new clienteController();
            $controller->cargar();
        break;
        case 'guardarcliente':
            $controller=new clienteController();
            $controller->guardar();
        break;  
        
        case 'borrarcliente':
            $controller=new clienteController();
            $controller->borrar();
        break;

        case 'cargarproyectos':
            $controller=new proyectoController();
            $controller->cargar();
        break;
        case 'guardarproyecto': 
            $controller=new proyectoController();
            $controller->guardar();
        break;
        case 'borrarproyecto':
            $controller=new proyectoController();
            $controller->borrar();
        break;
        case 'cargarasignaciones':
            $controller=new asignacionController();
            $controller->cargar();
        break;
        case 'guardarasignacion':
            $controller=new asignacionController();
            $controller->guardar();
        break;
        case 'borrarasignacion':
            $controller=new asignacionController();
            $controller->borrar();
        break;

        case 'login':
        require_once './Controller/LoginController.php';
        $controller = new LoginController();
        $controller->login();
        break;

        case 'logout':
            require_once './Controller/LoginController.php';
            $controller = new LoginController();
            $controller->logout();
        break;
        }
?>