<?php
//? Arrays
//! Númericos

echo "<b><h3>Arrays con Números</h3></b>";

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 11);

foreach ($numeros as $array) {
    echo $array. "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";


//! Arrays con nombres
echo "<b><h3>Arrays con Nombres</h3></b>";

$nombres = array(
    "Juan",
    "Pedro",
    "Marcos",
    "Cesar",
    "Jeoban",
    "Rafa",
    "Berni",
    "Diego",
);


foreach ($nombres as $array) {
    echo $array."<br>";
}

echo "Array número 1: ".$nombres[1];


//! Arrays Asociativos
echo "<b><h3>Arrays Asociativos</h3></b>";

$arraysAsociativo = array(
    "Nombre" => ["Juan", "Diego", "Pedro"],
    "Apellidos" => ["Cortes Vasquez", "Guzman Hernandez", "Perez Rodriguez"],
    "Ciudad" => "Piedras Negras",
    //? Si son varios Nombres etc..
    "Mes" => ["Enero", "Febrero", "Marzo", "Abril"]
);

echo "Nombre: ". $arraysAsociativo['Nombre'][1]. "<br>";
echo "Apellidos: ". $arraysAsociativo['Apellidos'][0]. "<br>";
echo "Ciudad: ". $arraysAsociativo['Ciudad']. "<br>";
echo "Mes: ". $arraysAsociativo['Mes'][2]. "<br>";

echo "<br>";
echo "<br>";
echo "<br>";

//! Arrays Multidimensionales
echo "<b><h3>Arrays Multidimensionales</h3></b>";

$multiArray = array(
    array("Nombre" => "Juan", "Edad" => 30),
    array("Nombre" => "María", "Edad" => 25),
    array("Nombre" => "Pedro", "Edad" => 35)
);

// Recorremos el array multidimensional con un bucle foreach
foreach ($multiArray as $persona) {
    // Para cada elemento del array, imprimimos el nombre y la edad
    echo "Nombre: " . $persona['Nombre'] . ", Edad: " . $persona['Edad'] . "<br>";
}
?>
