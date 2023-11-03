<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ezel</title>
</head>
<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="mx-auto">
    <?php

    require_once '../../Models/Herbergen.php';
    use Models\Herbergen;

    $naam = $_POST["naam"];
    $locatie = $_POST["locatie"];
    $sterren = $_POST["sterren"];

    $herberg = new Herbergen($naam, $locatie, $sterren);

    // Checks if you're logged in and if you have the right permissions.
    session_start();

    if (isset($_SESSION['id']) && $_SESSION['email']) {
    if ($_SESSION['functie'] === "medewerker") {

    $herberg->create();
    ?>

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