<?php

include '../../Components/header.php';
require_once '../../Database/database.php';

require_once '../../Models/Ezels.php';

use Models\Ezels;

$ezels = new Ezels();

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
    if ($_SESSION['functie'] === "medewerker") {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ezel</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="flex min-h-screen justify-between flex-col">

    <main class="py-18 px-64 flex justify-center">
        <form class="w-1/2 bg-green-800 rounded-lg p-12 m-12 text-black" action="createEzelController.php" method="post">
            <div class="mb-5">
                <label class="text-white" for="naam">Naam</label>
                <input type="text" name="naam" id="naam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
            </div>
            <div class="mb-5">
                <label class="text-white" for="leeftijd">Leeftijd</label>
                <input type="text" name="leeftijd" id="leeftijd"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
            </div>

            <label for="button"></label>
            <input type="submit" name="verzenden" id="button"
                   class="p-1 bg-green-100 hover:bg-green-300 border border-gray-700 w-full rounded-md">
        </form>
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