<?php
requiere_once('../modulos/classconexion.php');
requiere_once('../modulos/basededatos.php');

$mensaje = null;

$nombre =$_POST ['nombre' ];
$descripcion =$_POST[ 'descripcion'];
$categoria =$_POST[ 'categoria'];
$precio =$_POST['precio'];

    $consulta = new DataBase();
    $mensaje = $insertar -> insertarProducto($nombre,$descripcion,$categoria,$precio);
    if(strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0 ){
    echo "<a href='../index.html'>Regresar</a>";
    }
else
{
    echo " Por Favor ingrese la informacion";
}
echo $mensaje;

?>