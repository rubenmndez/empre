<?php
class Consultas{
    public function insertarCliente($arg_Nombre, $arg_Correo, $arg_Telefono, $arg_direccion){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into clientes (Nombre, Correo, Telefono, direccion) values(:Nombre, :Correo, :Telefono, :direccion)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':Nombre', $arg_Nombre);
        $statement->bindParam(':Correo', $arg_Correo);
        $statement->bindParam(':Telefono', $arg_Telefono);
        $statement->bindParam(':direccion', $arg_direccion);
        if(!$statement){
            return "Error al registrarse";
        }else{
            $statement->execute();
            return "Registro creado correctamente";
        }

    }
}

?>
