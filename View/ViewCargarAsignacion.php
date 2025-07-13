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
        <?php 
            include 'menu.php';
        ?>
        <a href="../Model/cerrar.php" class="btn btn-outline-danger float-end mb-3">Cerrar sesión</a>
        <h1 class="text-primary">LISTA ASIGNACIONES</h1>
        <hr>
        <a href="index.php?accion=guardarasignacion" class="btn btn-success mb-3">Crear Nuevo</a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>IdAsignacion</th>
                    <th>Nombres Proyecto</th>
                    <th>Descripcion</th>
                    <th>Nombres Empleado</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($asignaciones as $asig){ ?>
                <tr>
                    <td><?=$asig->getIdasignacion()?></td>
                    <td><?=$asig->getDescripcion()?></td>
                    <td><?=$asig->getNombre()?></td>
                    <td><?=$asig->getNombres()?></td>
                    <td>
                        <a href="index.php?accion=borrarasignacion&idasig=<?=$asig->getIdasignacion()?>" class="btn btn-danger btn-sm">Borrar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
