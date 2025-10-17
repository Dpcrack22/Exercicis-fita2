<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contrasenya1 = $_POST["contrasenya1"];
    $contrasenya2 = $_POST["contrasenya2"];

    if ($contrasenya1 !== $contrasenya2) {
        echo "ERROR: les contrasenyes han de coincidir";
    } elseif (!preg_match("/[0-9]/", $contrasenya1)) {
        echo "ERROR: la contrasenya ha de tenir al menys un número";
    } else {
        echo "Les contrasenyes són correctes.";
    }
}
?>

</body>
</html>