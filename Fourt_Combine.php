<?php

$Datos1 = array("Nombre"=>"Juan", "Edad"=>20, "Correo"=>"NoSeComoES@gmial.com");
$Datos2 = array("Ciudad"=>"Barranquilla", "Profesion"=>"Chef", "Id"=>"10293912");

$Datos_Combinados = array_merge($Datos1,$Datos2);

print_r($Datos_Combinados);

?>