<?php
require_once 'config/DB.php';

class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function verificarUsuario($email, $contra) {
        $sql = "select * from usuarios where email = :email";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':email', $email);
        $ps->execute();
        $usuario = $ps->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($contra, $usuario['contra'])) {
            return $usuario;
        }

        return false;
    }
}
