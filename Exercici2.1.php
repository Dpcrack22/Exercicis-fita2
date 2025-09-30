<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            align-items: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        p {
            text-align: center;
            font-size: 1.2em;
            color: green;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            align-items: center;
        }
    </style>

</head>
<body>
    

    <form method="POST" action="Exercici2.1.php">
        <label for="username">Usuari:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contrasenya:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
        $users = array(
            "Dpcrack22" => "P@ssw0rd",
            "Pepe" => "ElPepe33.",
            "Administrador" => "@dm1nitr@t0r"
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (array_key_exists($username, $users) && $users[$username] === $password) {
                echo "<p class='success'>Login correcte!</p>";
            } else {
                echo "<p class='error'>Login incorrecte!</p>";
            }
        }
    ?>

</body>
</html>