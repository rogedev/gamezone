<?php

	require_once('crud.php');
	require_once('order.php');
	$crud= new Crud();
	$order=new Order();
	$order=$crud->buscar($_GET['id']);
?>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<title>Actualizar Orden</title>
</head>

<body>
	<div class="jumbotron">
		<h1 class="display-3">Dashboard de manejo de datos</h1>
	</div>
	<form action='control.php' method='post'>
		<table class="table">
			<tr>
				<input type='hidden' name='id' value='<?php echo $order->getId()?>'>
				<td>Nombre libro:</td>
				<td> <input type='text' class="form-control" name='firstName'
						value='<?php echo $order->getFirstName()?>'></td>
			</tr>
			<tr>
				<td>Apellido:</td>
				<td><input type='text' class="form-control" name='lastName' value='<?php echo $order->getLastName()?>'>
				</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type='text' class="form-control" name='email' value='<?php echo $order->getEmail()?>'></td>
			</tr>
			<tr>
				<td>Direccion:</td>
				<td><input type='text' class="form-control" name='address' value='<?php echo $order->getAddress()?>'>
				</td>
			</tr>
			<input type='hidden' name='actualizar' value'actualizar'>
		</table>
		<input type='submit' class="btn btn-primary btn-lg btn-block" value='Guardar'>
		<a href="index.php">Volver</a>
	</form>
</body>

</html>