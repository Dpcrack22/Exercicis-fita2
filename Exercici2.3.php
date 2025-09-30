<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2.3</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    label {
        font-size: 1.2em;
    }
    select {
        padding: 5px;
        font-size: 1em;
    }
    input[type="submit"] {
        margin-top: 10px;
        padding: 8px 16px;
        font-size: 1em;
        cursor: pointer;
    }
</style>
<body>

<form method="POST" action="Exercici2.3.php">
    <label for="color">Tria un color de fons:</label><br>
    <select id="color" name="color">
        <option value="white">Blanc</option>
        <option value="lightblue">Blau clar</option>
        <option value="lightgreen">Verd clar</option>
        <option value="lightgrey">Gris clar</option>
        <option value="lightyellow">Groc clar</option>
        <option value="lightpink">Rosa clar</option>
        <option value="lavender">Lavanda</option>
        <option value="beige">Beix</option>
        <option value="black">Negre</option>
        <option value="darkblue">Blau fosc</option>
        <option value="darkgreen">Verd fosc</option>
        <option value="darkgrey">Gris fosc</option>
        <option value="darkred">Vermell fosc</option>
    </select><br><br>
    <input type="submit" value="Canvia color">

</form>
<?php
    $color = $_POST['color'];
    echo "<style> body { background-color: $color; } </style>";
    
?>
</body>
</html>