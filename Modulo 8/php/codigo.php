<?php

//capturamos las variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

echo $nombre;
echo $email;
echo $consulta;

$mensaje="
Nombre: $nombre<br /><br />
Email: $email<br /><br />
Consulta: $consulta<br /><br />
";

echo $mensaje;
