<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herberg verwijderd</title>
</head>
<?php

require_once '../../Models/Herbergen.php';

use Models\Herbergen;

$id = $_POST["id"];

$herberg = new Herbergen();
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <?php $herberg->delete($id); ?>
        <br><br>
        <p class="text-center"><a  href='../index.php'>Ga terug naar de hoofdpagina</a></p>
    </div>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
