<?php
//incluye la clase Libro y CrudLibro
require_once('crud.php');
require_once('order.php');
$crud=new Crud();
$order= new Order();

$ordenes=$crud->mostrar();
?>
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
    <table class="table">


        <th class="thead-light">Nombre</th>
        <th class="thead-dark">Apellido</th>
        <th class="thead-dark">Correo</th>
        <th class="thead-dark">Direccion</th>
        <th class="thead-dark">Actualizar</th>
        <th class="thead-dark">Eliminar</th>



            <?php foreach ($ordenes as $order) {?>
            <tr>
                <td><?php echo $order->getFirstName() ?></td>
                <td><?php echo $order->getLastName() ?></td>
                <td><?php echo $order->getEmail() ?> </td>
                <td><?php echo $order->getAddress() ?> </td>
                <td><a href="actualizar.php?id=<?php echo $order->getId()?>&accion=a">Actualizar</a></td>
                <td><a href="control.php?id=<?php echo $order->getId()?>&accion=e">Eliminar</a> </td>
            </tr>
            <?php }?>

    </table>
    <a href="index.php">Volver</a>
</body>

</html>