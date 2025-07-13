<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-primary">Inserción de Clientes</h1>
        <hr>
        <form action="index.php?accion=guardarcliente" method="post">
            <input type="text" name="txtNom" placeholder="Nombre" class="form-control mb-2">
            <input type="text" name="txtApe" placeholder="Apellido" class="form-control mb-2">
            <input type="text" name="txtEma" placeholder="Email" class="form-control mb-2">
            <input type="text" name="txtCel" placeholder="Celular" class="form-control mb-2">
            <input type="text" name="txtEmp" placeholder="Empresa" class="form-control mb-3">
            <input type="submit" value="Guardar" class="btn btn-success">
        </form>
    </div>
</body>
</html>
