<?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$codigo=$_REQUEST['codigo'];
$sql = "DELETE from carrera where codigo= '$codigo'";
mysqli_query($conexion,$sql);
if($sql){
    header("location:http://localhost/Oficial/vista/admin/admin.php");
}else
echo"ERROR AL ELIMINAR";
?>