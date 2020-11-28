<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-3">Dashboard de manejo de datos</h1>
    </div>
    <form action='control.php' method='post'>
        <table class="table">
            <tr>
                <td>Nombre:</td>
                <td> <input type='text' class="form-control " name='firstName'></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td> <input type='text' class="form-control" name='lastName'></td>
            </tr>
            <tr>
                <td class="">Email:</td>
                <td> <input type='text' class="form-control " name='email'></td>
            </tr>
            <tr>
                <td class="">Direccion:</td>
                <td> <input type='text' class="form-control " name='address'></td>
            </tr>
        </table>
        <input type='submit' class="btn btn-primary btn-lg btn-block" name='insertar' value='insertar'>

    </form>
    <footer>
        <a href="index.php">Volver</a>
    </footer>
</body>

</html>