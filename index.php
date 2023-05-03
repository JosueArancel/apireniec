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
    <h4 class="text-center text-success my-5">BIENVENIDO AL FORMULARIO DE CONSULTA RENIEC</h4>
    <div class="row d-flex justify-content-center aling-items-center">
        <div class="col-md-7">
            <div class="row p-5">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <label>DNI</label><br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="num_docu" id="num_docu" minlength="8" maxlength="8">
                                <button type="button" class="btn btn-primary" id="btn_search">RENIEC</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="text-secondary fw-bolder my-3">Datos Obtenidos de la RENIEC</label>
                </div>
                <div class="col-md-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" name="names" id="names" readonly>
                </div>
                <div class="col-md-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="lastnames" id="lastnames" readonly>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./main.js"></script>

</html>