<?php require_once 'header.php'; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container border border-dark rounded" style="background-color: white;">
        <h1 class="display-4 text-center"><b>Actualizar Registro</b></h1>
        <hr>
        <p class="lead">
            <form action="" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required placeholder="Aqui va tu nombre">
                <br>
                <label for="nombre">Apellido Paterno:</label>
                <input type="text" name="paterno" class="form-control" required placeholder="Aqui va tu apellido paterno">
                <br>
                <label for="nombre">Apellido Materno:</label>
                <input type="text" name="materno" class="form-control" required placeholder="Aqui va tu apellido materno">
                <br>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required placeholder="Aqui va tu fecha de nacimiento">
                <hr>
                <div class="row">
                    <div class="col-sm-6 text-center"><button class="btn btn-success"><i class="fas fa-sync"></i>&nbsp Actualizar</button></div>
                    <div class="col-sm-6 text-center"><a href="index.php" class="btn btn-info"><i class="fas fa-undo"></i>&nbsp Regresar</a></div>
                </div>
            </form>
        </p>
    </div>
</div>