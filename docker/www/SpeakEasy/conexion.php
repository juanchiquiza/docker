<?php
$server = "localhost";
$user ="user";
$contrasena ='test';
$db = "speakeasy";
$conexion= new mysqli($server,$user,$contrasena,$db) or die ("Error al intentar conectar al servidor");
?>