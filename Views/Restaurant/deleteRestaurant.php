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
require_once '../../Database/database.php';

require '../../Models/Restaurant.php';

$id = $_POST["id"];
$naam = $_POST["naam"];
$locatie = $_POST["locatie"];

require_once '../../Models/Ezels.php';

use Models\Restaurant;

$restaurant = new Restaurant();
?>

<main class="py-18 px-64">
    <div class="flex justify-center align-center my-auto">
        <form class="w-1/2 bg-green-800 rounded-lg px-12 py-12 mt-12 text-black flex flex-col mb-10"
              action="deleteRestaurantController.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="id">Restaurant id</label>
                <input type="text" name="id" id="id"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $id ?>">

            </div>
            <div class="mb-5">
                <label class="text-white" for="naam">Naam</label>
                <input type="text" name="naam" id="naam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $naam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="locatie">Locatie</label>
                <input type="text" name="locatie" id="locatie"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $locatie ?>">
            </div>
            <div class="flex flex-col">
                <label class="text-white text-center" for="bevestiging">
                    Weet u zeker dat u dit restaurant wilt verwijderen?</label>
            </div>
            <input type="submit" value="Verwijder Restaurant"
                   class="p-1 mt-2 bg-red-500 hover:bg-red-600 border border-gray-700 w-full rounded-md text-white">
        </form>
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


