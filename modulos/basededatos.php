<?php
class DataBase{
    
    public function insertarProducto($nombre,$descripcion,$categoria,$precio){
        
        $modelo = new Conexion ();
        $conexion = $modelo-> get_conexion();
        $sql ="insert into producto(nombre,descripcion,categoria,precio) values (:nombre,:descripcion,:categoria,:precio)";
        $statement = $conexion-> prepare($sql);
        $statement -> bindParam(':nombre',$nombre);
        $statement -> bindParam(':descripcion',$descripcion);
        $statement -> bindParam(':categoria',$categoria);
        $statement -> bindParam(':precio',$precio);
        
        if(!$statement){
            return "error no se puede cargar";
        }else{
            $statement -> execute();
            return " la insercion se realizo con exito";
        }
        }


    }

?>
