<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Proyectos</h1>
        <hr>
        <form action="index.php?accion=guardarproyecto" method="post" class="container mt-4">
            <input type="text" name="txtNom" placeholder="Nombre" class="form-control mb-2">
            <input type="text" name="txtEmp" placeholder="Empresa" class="form-control mb-2">
            <input type="date" name="txtFei" placeholder="Fecha Inicio" class="form-control mb-2">
            <input type="date" name="txtFea" placeholder="Fecha Entrega" class="form-control mb-2">
            <input type="text" name="txtDes" placeholder="Descripcion" class="form-control mb-3">
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>