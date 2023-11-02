<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<?php

require_once '../../Models/Gebruikers.php';

use Models\Gebruikers;

$id = $_POST["id"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$functie = $_POST["functie"];

$gebruiker = new Gebruikers($voornaam, $achternaam, $email, $functie);
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <?php $gebruiker->update($id); ?>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>