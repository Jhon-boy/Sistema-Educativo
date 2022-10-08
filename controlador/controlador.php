<?php
$v1 = $_GET['aux'];
if($v1 ==1){
include("../index.html");
} else
if($v1 ==2){
include("../vista/login.html");
}  else
if($v1 ==3){
    include("../vista/Profesor/profesor.php");
    } 
    else
    if($v1 ==4){
        include("../modelo/busqueda.php");   
    } else
    if($v1 ==5){
        include("../Modelo/Reporte.php");  
    }
    if($v1 ==7){
        include("../Vista/Ingreso1.php"); 
    }

?>