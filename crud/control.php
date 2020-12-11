<?php

require_once('crud.php');
require_once('order.php');
require_once('product.php');
require_once('cart.php');

$crud =  new Crud();
$order = new Order();
$product = new Product();


	if (isset($_POST['insertar'])) {
		$order->setFirstName($_POST['firstName']);
        $order->setLastName($_POST['lastName']);
        $order->setEmail($_POST['email']);
        $order->setAddress($_POST['address']);
		$crud->insertar($order);
		header('Location: index.php');

	}elseif(isset($_POST['pagar'])){
		$order->setFirstName($_POST['firstName']);
        $order->setLastName($_POST['lastName']);
        $order->setEmail($_POST['email']);
        $order->setAddress($_POST['address']);
		$crud->insertar($order);
		header('Location: /gamezone/thank-you.html');

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

	}elseif(isset($_POST['agregar'])){

		$product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setQuantity($_POST['quantity']);
		//funcion aqui falta
		header('Location: /gamezone/order.php');
	}
?>