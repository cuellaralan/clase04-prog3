<?php
include './funciones.php';

var_dump($_FILES);
var_dump($_POST);
$fecha = date("Y-m-d");
$hora = date("H-i-s");
// echo (" la fecha es:".$fecha."\n");
// echo (" la hora es:".$hora."\n");
$origen = $_FILES["archivo"]["tmp_name"];
$nomarch = $_FILES["archivo"]["name"];
// echo($nomarch);
// $cantidad = strlen($nomarch);
// echo($cantidad);
// $start = $cantidad - 4 ;
// $ext = substr($nomarch, $start, 4);
// echo ($ext);

// $destino = './subida'.'_'.$fecha.';'.$hora.$ext;
// echo($destino);
// var_dump($nombre);
// echo($nombre);
// move_uploaded_file($origen,$destino);
$destino = './subida';
funciones::GuardaTemp($origen,$destino,$nomarch);
?>