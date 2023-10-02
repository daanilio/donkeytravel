<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verwijderen</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php
include '../../Components/header.php';
require_once '../../Database/db.php';

require '../../Models/Reserveer.php';

$reserveerId = $_POST["reserveerId"];
$reserveerVoornaam = $_POST["voornaam"];
$reserveerAchternaam = $_POST["achternaam"];
$reserveerEmail = $_POST["email"];
$reserveerTocht = $_POST["tochten"];
$reserveerPersonen = $_POST["personen"];
$reserveerDatum = $_POST["datum"];

require_once '../../Models/Tochten.php';

use Models\Tochten;

$tochten = new Tochten();
?>

<main class="py-18 px-64">
    <div class="flex justify-center align-center my-auto">
        <form class="w-1/2 bg-green-800 rounded-lg px-12 py-12 mt-12 text-black flex flex-col mb-10"
              action="deleteReserveringController.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="id">Reservering id</label>
                <input type="text" name="id" id="id"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerId ?>">

            </div>
            <div class="mb-5">
                <label class="text-white" for="voornaam">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerVoornaam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="achternaam">Achteraam</label>
                <input type="text" name="achternaam" id="achternaam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerAchternaam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="email">Email</label>
                <input type="text" name="email" id="email"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerEmail ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="personen">Aantal personen</label>
                <input type="number" name="personen" id="personen"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerPersonen ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="tochtSelect">Tocht</label><br>
                <select name="tochten" id="tochtSelect"
                        class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                    <option selected value="<?php echo $reserveerTocht ?>"><?php echo $reserveerTocht ?></option>
                </select>
            </div>
            <div class="mb-5">
                <label class="text-white" for="datum">Startdatum rit</label>
                <input type="date" name="datum" id="datum"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $reserveerDatum ?>">
            </div>
            <div class="flex flex-col">
                <label class="text-white text-center" for="bevestiging">Weet u zeker dat u deze reservering wilt
                    verwijderen?</label>
            </div>
            <input type="submit" value="Verwijder reservering"
                   class="p-1 mt-2 bg-red-500 hover:bg-red-600 border border-gray-700 w-full rounded-md text-white">
        </form>
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


