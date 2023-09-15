<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="mx-auto">
<?php

require_once '../../Models/Reserveer.php';
use Models\Reserveer;

$reserveerVoornaam = $_POST["voornaam"];
$reserveerAchternaam = $_POST["achternaam"];
$reserveerTelefoon = $_POST["telefoonnummer"];
$reserveerEmail = $_POST["email"];
$reserveerPersonen = $_POST["personen"];
$reserveerDatum = $_POST["datum"];

$reservering = new Reserveer($reserveerVoornaam, $reserveerAchternaam, $reserveerTelefoon, $reserveerEmail, $reserveerPersonen, $reserveerDatum);
$reservering->create();
?>

</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
