<?php
require_once ('scripts/conexion');
class Crud{
    // constructor de la clase
    public function __construct(){}

    // método para insertar, recibe como parámetro un objeto de tipo libro
    public function insertar($libro){
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO libros values(NULL,:nombre,:autor,:anio_edicion)');
        $insert->bindValue('nombre',$libro->getNombre());
        $insert->bindValue('autor',$libro->getAutor());
        $insert->bindValue('anio_edicion',$libro->getAnio_edicion());
        $insert->execute();

    }

?>