<?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$codigo=$_REQUEST['codigo'];
$sql = "DELETE from estudiantes where id= '$codigo'";
mysqli_query($conexion,$sql);
if($sql){
    header("location:http://localhost/Oficial/modelo//VerEstudiante.php");
}else
echo"ERROR AL ELIMINAR";
?>