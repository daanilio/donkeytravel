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

<?php include '../../Components/header.php'; ?>

<main class="py-18 px-64 flex justify-center">
    <form class="w-2/5 bg-gray-300 rounded-lg p-12 m-12  " action="createReserveringController.php" method="post">
        <div class="mb-5">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
        </div>
        <div class="mb-5">
            <label for="achternaam">Achteraam</label>
            <input type="text" name="achternaam" id="achternaam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
        </div>
        <div class="mb-5">
            <label for="telefoonnummer">Telefoonnummer</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
        </div>
        <div class="mb-5">
            <label for="email">Email</label>
            <input type="text" name="email" id="email"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
        </div>
        <div class="mb-5">
            <label for="personen">Aantal personen</label>
            <input type="number" name="personen" id="personen"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
        </div>
        <div class="mb-5">
            <label for="datum">Datum rit</label>
            <input type="date" name="datum" id="datum"
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


