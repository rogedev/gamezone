<?php

require_once('crud.php');
require_once('order.php');

$crud= new Crud();
$order= new Order();


	if (isset($_POST['insertar'])) {
		$order->setFirstName($_POST['firstName']);
        $order->setLastName($_POST['lastName']);
        $order->setEmail($_POST['email']);
        $order->setAddress($_POST['address']);
		$crud->insertar($order);
		header('Location: index.php');

	}elseif(isset($_POST['actualizar'])){
		$order->setId($_POST['id']);
		$order->setFirstName($_POST['firstName']);
        $order->setLastName($_POST['lastName']);
        $order->setEmail($_POST['email']);
		$order->setAddress($_POST['address']);
		$crud->actualizar($order);

		header('Location: index.php');

	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');

	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>