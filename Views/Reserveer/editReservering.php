<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MW Panel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php
include '../../Components/header.php';
require_once '../../Database/db.php';

require '../../Models/Reserveer.php';

$reserveerId = $_POST["reserveerId"];
$reserveerVoornaam = $_POST["reserveerVoornaam"];
$reserveerAchternaam = $_POST["reserveerAchternaam"];
$reserveerEmail = $_POST["reserveerEmail"];
$reserveerTocht = $_POST["reserveerTocht"];
$reserveerPersonen = $_POST["reserveerPersonen"];
$reserveerDatum = $_POST["reserveerDatum"];

require_once '../../Models/Tochten.php';

use Models\Tochten;

$tochten = new Tochten();
?>

<main class="py-18 px-64 flex justify-center">
    <form class="w-1/2 bg-green-800 rounded-lg p-12 m-12 text-black" action="UpdateReserveringController.php" method="post">
        <div class="mb-5">
            <label class="text-white" for="id">Reservering id</label>
            <input type="text" name="id" id="id"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                   value="<?php echo $reserveerId ?>">

        </div>
        <div class="mb-5">
            <label class="text-white" for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $reserveerVoornaam ?>">
        </div>
        <div class="mb-5">
            <label class="text-white" for="achternaam">Achteraam</label>
            <input type="text" name="achternaam" id="achternaam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $reserveerAchternaam ?>">
        </div>
        <div class="mb-5">
            <label class="text-white" for="email">Email</label>
            <input type="text" name="email" id="email"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $reserveerEmail ?>">
        </div>
        <div class="mb-5">
            <label class="text-white" for="personen">Aantal personen</label>
            <input type="number" name="personen" id="personen"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $reserveerPersonen ?>">
        </div>
        <div class="mb-5">
            <label class="text-white" for="tochtSelect">Selecteer een tocht</label><br>
            <select name="tochten" id="tochtSelect"
                    class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                <option value="<?php echo $reserveerTocht ?>"><?php echo $reserveerTocht ?></option>
                <?php $tochten->getAll() ?>
            </select>
        </div>
        <div class="mb-5">
            <label class="text-white" for="datum">Startdatum rit</label>
            <input type="date" name="datum" id="datum"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $reserveerDatum ?>">
        </div>

        <input type="submit" name="verzenden" id="button" value="Updaten"
               class="p-1 bg-green-100 hover:bg-green-300 border border-gray-700 w-full rounded-md">

        <form action="deleteReserveringController.php" method="post" class="w-1/4 mt-2">
            <input type="hidden" name="inkOrdId" id="inkOrdId" value="<?php echo $reserveerId ?>">
            <input type="submit" value="Verwijder reservering"
                   class="p-1 mt-2 bg-red-500 hover:bg-red-600 border border-gray-700 w-full rounded-md text-white">
        </form>
    </form>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


