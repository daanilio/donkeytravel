<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gebruiker verwijderd</title>
</head>
<?php

require_once '../../Models/Gebruikers.php';

use Models\Gebruikers;

$id = $_POST["id"];

$gebruiker = new Gebruikers();

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
    if ($_SESSION['functie'] === 1) {
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <?php $gebruiker->delete($id); ?>
        <br><br>
        <p class="text-center"><a  href='../index.php'>Ga terug naar de hoofdpagina</a></p>
    </div>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: ../Menu/menu.php");
}
} else {
    header("Location: ../../index.php");
    exit();
}
?>