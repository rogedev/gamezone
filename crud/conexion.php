<?php
//objeto para la conexion con la base de datos
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=gamezone','root','',$pdo_options);
			return self::$conexion;
		}
	}
?>