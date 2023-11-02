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

require '../../Models/Reserveer.php';

$id = $_POST["id"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];

require_once '../../Models/Gebruikers.php';

use Models\Gebruikers;

$gebruiker = new Gebruikers();
?>

<main class="py-18 px-64">
    <div class="flex justify-center align-center my-auto">
        <form class="w-1/2 bg-green-800 rounded-lg px-12 py-12 mt-12 text-black flex flex-col mb-10"
              action="deleteGebruikerController.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="id">Gebruiker id</label>
                <input type="text" name="id" id="id"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $id ?>">

            </div>
            <div class="mb-5">
                <label class="text-white" for="voornaam">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $voornaam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="achternaam">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $achternaam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="email">Email</label>
                <input type="text" name="email" id="email"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $email ?>">
            </div>
            <input type="submit" value="Verwijder gebruiker"
                   class="p-1 mt-2 bg-red-500 hover:bg-red-600 border border-gray-700 w-full rounded-md text-white">
        </form>
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


