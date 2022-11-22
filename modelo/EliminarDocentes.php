<?php
$conexion= mysqli_connect("localhost", "root", "", "its");
$codigo=$_REQUEST['id'];
$sql = "DELETE from profesores where id= '$codigo'";
mysqli_query($conexion,$sql);
if($sql){
    header("location:http://localhost/Oficial/modelo/AdminDocentes.php");
}else
echo"ERROR AL ELIMINAR";
?>