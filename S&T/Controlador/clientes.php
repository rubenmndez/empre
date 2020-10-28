<!DOCTYPE html>
<html lang="es">
<head>
<title>Modificar datos</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,user-scalable=no,initial- scale=1.0,maximumscale=1.0,minimum-scale=1.0" />
<link rel="stylesheet" href="../CSS/MENU.css">
<link rel="stylesheet" href="../CSS/incrip.css">
<link rel="stylesheet" href="../CSS/estilos.css">	

 
    </head>
    <body>
          
    <br><br><br>
        <br><br><br><br><br> <br><br><br>
        <br><br>
<?php
 require_once('../Modelo/class.conexion.php');
 require_once('../Modelo/class.consultas.php');



   
    $mensaje = null;
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono= $_POST['Telefono'];
$direccion = $_POST['direccion'];

    if(strlen($Nombre) > 0 && strlen($Correo)> 0 && strlen($Telefono) > 0 && strlen($direccion) > 0 ){
        $consultas = new Consultas();
        $mensaje = $consultas->insertarCliente($Nombre,$Correo, $Telefono, $direccion);
        echo "<br><a href='../Premium.html'>Volver</a><br>";
       
     }else{
         echo "  Por favor completa todos los campos";
         echo "<br><a href='../Premium.html'>Registrarte</a>";
     }
     echo $mensaje;
    
?>


</body>
</html>