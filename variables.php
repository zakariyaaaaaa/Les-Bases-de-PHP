<?php
$name = "Zakariya";
$age = 20;
$price = 20;
$isvalid = true;
$cours = ["PHP", "JS"];


echo "<h3>Informations personnelles</h3>";
echo "Name : " . $name . "<br>";
echo "Age : " . $age . "<br>";
echo "Price : " . $price . " €<br>";
echo "Valide : " . ($isvalid ? "Yes" : "No") . "<br><br>";

echo "<h3>Type de la variable \$name</h3>";
var_dump($name);
echo "<br><br>";


$nombre = "6";
$nombreInt = (int)$nombre;

echo "<h3>Conversion de type</h3>";
echo "Avant : \"6\" (string)<br>";
echo "Après conversion : " . $nombreInt . " (int)";
?>

