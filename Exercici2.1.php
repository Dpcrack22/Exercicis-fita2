<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- Crea un formulari de login:

Fes un form que demani usuari i contrasenya. La contrasenya ha d'estar oculta (no s'ha de veure quan s'escriu).
Ha de tenir un diccionari hardcoded que contingui un conjunt de valors usuari/contrasenya vàlids.
Si el usuari/contrasenya que entri l'usuari al formulari coincideix amb algun dels continguts al diccionari, ens ha de contestar «Login correcte!». Si no coincideix amb cap, ha de dir «Login incorrecte».
Ha de ser segur: la contrasenya no s'ha de veure ni quan l'escrivim al formulari ni quan enviem les dades.
Quina creus que ha de ser la resposta si el login és incorrecte? Li informem si l'error està al nom d'usuari o a la password? -->

    <form method="POST" action="Exercici2.1.php">
        <label for="username">Usuari:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contrasenya:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
        $users = array(
            "user1" => "password1",
            "user2" => "password2",
            "admin" => "adminpass"
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (array_key_exists($username, $users) && $users[$username] === $password) {
                echo "Login correcte!";
            } else {
                echo "Login incorrecte!";
            }
        }
    ?>

</body>
</html>