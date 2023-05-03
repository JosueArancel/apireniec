<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1>BIENVENIDO AL FORMULARIO</h1>
    <form action="" class="row">
        <div class="col-md-12">
            <label>NRO. Documento</label>
            <input type="text" class="form-control" name="num_docu" id="num_docu" minlength="8" maxlength="8">
        </div>
        <div class="col-md-12">
            <label>Nombres</label>
            <input type="text" class="form-control" name="names" id="names">
        </div>
        <div class="col-md-12">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="names" id="names">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>