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
        <h1 class="text-primary">Inserción de Asignaciones</h1>
        <hr>
        <form action="index.php?accion=guardarasignacion" method="post">
            <div class="mb-3">
                <label class="form-label">Cliente</label>
                <select name="txtCli" required class="form-select">
                    <option value="">Seleccione Cliente</option>
                    <?php foreach($clientes as $cli): ?>
                        <option value="<?=$cli->getIdcliente()?>"><?=$cli->getNombres()?> <?=$cli->getApellidos()?> (ID: <?=$cli->getIdcliente()?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Proyecto</label>
                <select name="txtPro" required class="form-select">
                    <option value="">Seleccione Proyecto</option>
                    <?php foreach($proyectos as $proy): ?>
                        <option value="<?=$proy->getIdproyecto()?>"><?=$proy->getNombre()?> (ID: <?=$proy->getIdproyecto()?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Guardar" class="btn btn-success">
        </form>
    </div>
</body>
</html>
