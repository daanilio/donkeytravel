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

require_once '../../Models/Reserveer.php';

use Models\Reserveer;

$reserveerId = $_POST["id"];
$reserveerVoornaam = $_POST["voornaam"];
$reserveerAchternaam = $_POST["achternaam"];
$reserveerEmail = $_POST["email"];
$reserveerPersonen = $_POST["personen"];
$reserveerTocht = $_POST["tochten"];
$reserveerDatum = $_POST["datum"];

$reservering = new Reserveer($reserveerVoornaam, $reserveerAchternaam, $reserveerEmail, $reserveerPersonen, $reserveerTocht, $reserveerDatum);
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <table class="table-fixed border border-black border-collape">
            <tr class="border border-black">
                <th class="border border-black p-2">Reservering id</th>
                <th class="border border-black p-2">Voornaam</th>
                <th class="border border-black p-2">Achternaam</th>
                <th class="border border-black p-2">Email</th>
                <th class="border border-black p-2">Personen</th>
                <th class="border border-black p-2">Tochtnaam</th>
                <th class="border border-black p-2">Datum</th>
            </tr>
            <?php $reservering->update($reserveerId); ?>
        </table>
    </div>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
