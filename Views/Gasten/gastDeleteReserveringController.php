<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservering verwijderd</title>
</head>

<?php

require_once '../../Models/Reserveer.php';

use Models\Reserveer;

$reserveerId = $_POST["id"];
$klantId = $_POST["klantId"];
$reserveerVoornaam = $_POST["voornaam"];
$reserveerAchternaam = $_POST["achternaam"];
$reserveerEmail = $_POST["email"];
$reserveerPersonen = $_POST["personen"];
$reserveerTocht = $_POST["tochten"];
$reserveerDatum = $_POST["datum"];
$reserveerStatus = $_POST["status"];

$reservering = new Reserveer($klantId, $reserveerVoornaam, $reserveerAchternaam, $reserveerEmail, $reserveerPersonen, $reserveerTocht, $reserveerDatum, $reserveerStatus);

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <h2 class="text-center mb-8">Deze reservering is verwijderd:<br></h2>
        <table class="table-fixed border border-black border-collape">
            <tr class="border border-black">
                <th class="border border-black p-2">Reservering id</th>
                <th class="border border-black p-2">Klant id</th>
                <th class="border border-black p-2">Voornaam</th>
                <th class="border border-black p-2">Achternaam</th>
                <th class="border border-black p-2">Email</th>
                <th class="border border-black p-2">Personen</th>
                <th class="border border-black p-2">Tochtnaam</th>
                <th class="border border-black p-2">Datum</th>
                <th class="border border-black p-2">Status</th>
            </tr>
            <?php $reservering->deleteReserveringGast($reserveerId); ?>
        </table>
        <br><br>
        <p class="text-center">U wordt automatisch teruggestuurd.</p>
        <?php header("refresh:4;url=gastReserveringen.php"); ?>
    </div>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: ../index.php");
}
?>