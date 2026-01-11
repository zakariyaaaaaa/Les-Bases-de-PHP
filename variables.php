<?php
$Nom = " = zakariya";
$Age = 20;
$Prix = 19.99;
$Connecte = true;
echo "Nom". $Nom;
echo "<br>";
echo "Nom". $Age;
echo "<br>";
echo "Nom". $Prix;
echo "<br>";
echo "Nom". $Connecte .($Connecte ? "vrai" : "faux");
echo "<br>";
echo "<br>";
var_dump ($Nom);
echo "<br>";
echo "<br>";
$hi = "66";
$ho = (int)$hi;
echo "Conversion". $ho;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php
$nom = "Alice";
$age = 25;
$prix = 19.99;
$estConnecte = true;

echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecté : " . ($estConnecte ? "Oui" : "Non") . "<br>";

var_dump($nom);
$hi = "10";
$nombreInt= (int)$hi;
echo "Conversion : " . $nombreInt;
?>