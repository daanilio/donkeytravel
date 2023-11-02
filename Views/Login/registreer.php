<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreer</title>
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" type="image/jpg" href=""/>
</head>
<body>
    <form action="registreerController.php" method="post">
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" id="voornaam">

        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" id="achternaam">

        <label for="voornaam">Email</label>
        <input type="email" name="email" id="email">

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" id="wachtwoord">

        <input type="submit" name="registreren">
    </form>
</body>
</html>