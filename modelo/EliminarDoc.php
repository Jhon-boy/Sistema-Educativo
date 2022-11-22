<?php
$usuario = $_SESSION['username'];
$conexion= mysqli_connect("localhost", "root", "", "its");
$codigo=$_REQUEST['codigo'];
$sql = "DELETE from documentos where id_doc= '$codigo'";
mysqli_query($conexion,$sql);
if($sql){
    header("location:http://localhost/Oficial/vista/Estudiante/estudiante.php");
}else
echo $codigo;
?>