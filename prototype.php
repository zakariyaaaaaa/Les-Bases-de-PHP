<?php
$resultat = "";
$erreur = "";

function calculer($a, $b, $operation) {
    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opération invalide";
    }
}
if (isset($_POST["calculer"])) {
    if ($_POST["nombre1"] === "" || $_POST["nombre2"] === "") {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif (!is_numeric($_POST["nombre1"]) || !is_numeric($_POST["nombre2"])) {
        $erreur = "Veuillez saisir des nombres valides.";
    } else {
        $n1 = $_POST["nombre1"];
        $n2 = $_POST["nombre2"];
        $op = $_POST["operation"];

        $resultat = calculer($n1, $n2, $op);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculateur PHP</title>
</head>
<body>

<h2>Calculateur en PHP</h2>

<form method="post">
    <input type="text" name="nombre1" placeholder="Nombre 1"><br><br>

    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Soustraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="text" name="nombre2" placeholder="Nombre 2"><br><br>

    <input type="submit" name="calculer" value="Calculer">
</form>

<br>

<?php
if ($erreur != "") {
    echo "<p style='color:red;'>$erreur</p>";
}

if ($resultat != "") {
    echo "<p><strong>Résultat :</strong> $resultat</p>";
}
?>

</body>
</html>