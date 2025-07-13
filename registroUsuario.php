<?php
require_once 'config/DB.php';
$db = DB::conectar();

$email = 'empleado@tecno.com';
$contra = password_hash('123456', PASSWORD_DEFAULT);

$sql = "insert into usuarios (email, contra) values (:email, :contra)";
$ps = $db->prepare($sql);
$ps->execute([':email' => $email, ':contra' => $contra]);
?>
