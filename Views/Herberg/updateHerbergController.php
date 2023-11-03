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

require_once '../../Models/Herbergen.php';

use Models\Herbergen;

$id = $_POST["id"];
$naam = $_POST["naam"];
$locatie = $_POST["locatie"];
$sterren = $_POST["sterren"];

$herberg = new Herbergen($naam, $locatie, $sterren);

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
if ($_SESSION['functie'] === "medewerker") {
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <?php $herberg->update($id); ?>
    <br>
    <br>
    <p class="text-center"><a  href='../index.php'>Ga terug naar de hoofdpagina</a></p>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: ../index.php");
}
} else {
    header("Location: ../index.php");
    exit();
}
?>