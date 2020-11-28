<?php
// incluye la clase Db
require_once('conexion.php');

	class Crud{
		// constructor de la clase
		public function __construct(){}

		// método para insertar
		public function insertar($order){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO orders values(NULL,:firstName,:lastName,:email,:address)');
			$insert->bindValue('firstName',$order->getFirstName());
			$insert->bindValue('lastName',$order->getLastName());
            $insert->bindValue('email',$order->getEmail());
            $insert->bindValue('address',$order->getAddress());
			$insert->execute();

		}

		// método para mostrar
		public function mostrar(){
			$db=Db::conectar();
			$ordenes=[];
			$select=$db->query('SELECT * FROM orders');

			foreach($select->fetchAll() as $order){
				$myOrder= new Order();
				$myOrder->setId($order['id']);
				$myOrder->setFirstName($order['firstName']);
				$myOrder->setLastName($order['lastName']);
                $myOrder->setEmail($order['email']);
                $myOrder->setAddress($order['adress']);
				$ordenes[]=$myOrder;
			}
			return $ordenes;
		}

		// método para eliminar
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM orders WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar
		public function buscar($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM orders WHERE id=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$order=$select->fetch();
			$myOrder= new Order();
			$myOrder->setId($order['id']);
			$myOrder->setFirstName($order['firstName']);
			$myOrder->setLastName($order['lastName']);
            $myOrder->setEmail($order['email']);
            $myOrder->setAddress($order['adress']);
			return $myOrder;
		}

		// método para actualizar
		public function actualizar($order){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE orders SET firstName=:firstName, lastName=:lastName,email=:email,adress=:adress  WHERE id=:id');
			$actualizar->bindValue('id',$order->getId());
			$actualizar->bindValue('firstName',$order->getFirstName());
			$actualizar->bindValue('lastName',$order->getLastName());
            $actualizar->bindValue('email',$order->getEmail());
            $actualizar->bindValue('adress',$order->getAddress());
			$actualizar->execute();
		}
	}
?>