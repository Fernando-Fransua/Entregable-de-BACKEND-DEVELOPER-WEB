<?php
require_once 'Model/UsuarioModel.php';
session_start();

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $contra = $_POST['contra'] ?? '';

            $modelo = new UsuarioModel();
            $usuario = $modelo->verificarUsuario($email, $contra);

            if ($usuario) {
                $_SESSION['usuario'] = $usuario;
                header('Location: /index.php');
                exit;
            } else {
                header('Location: View/login.php?error=1');
                exit;
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: View/login.php');
        exit;
    }
}
