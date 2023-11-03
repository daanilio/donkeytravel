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

require_once '../../Models/Ezels.php';

use Models\Ezels;

$ezelid = $_POST["id"];
$naam = $_POST["naam"];
$leeftijd = $_POST["leeftijd"];

$ezels = new Ezels($ezelid, $naam, $leeftijd);
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <table class="table-fixed border border-black border-collape">
            <tr class="border border-black">
                <th class="border border-black p-2">Ezel id</th>
                <th class="border border-black p-2">Naam</th>
                <th class="border border-black p-2">Leeftijd</th>
            </tr>
            <?php $ezels->update($ezelid); ?>
        </table>
    </div>
</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
