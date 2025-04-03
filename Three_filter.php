<?php

$Numeros = array(10, 2, 3, 4, 5, 6, 7, 8, 9);
$Edades = array("Carlos"=>31, "Maria"=>40, "Luis"=>15, "Andrea"=> 13, "Julia"=>18, "Camilo"=>22);
echo "Numeros <br>";
print_r($Numeros);
echo "<br>";      //Salto de linea

$NumerosFi = array_filter($Numeros, function($V)  //array_filter filtra un array según una condición.
{
    return $V >=5;
});

echo "Numeros filtrados mayores que 5<br>";
print_r($NumerosFi); 

echo "<br><br>Lista de personas <br>";
asort($Edades); // Ordena el array de menor a mayor

print_r($Edades);

$EdadesFi = array_filter($Edades, function($V)
{
    return $V>=18;
});

echo "Lista de personas mayores de edad<br>";
print_r($EdadesFi); 
?>