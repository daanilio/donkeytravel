<?php

require_once '../../Models/Restaurant.php';

use Models\Restaurant;

$restaurant = new Restaurant();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ezels</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php include '../../Components/header.php'; ?>

<main class="py-18 px-64 flex justify-center">
    <table class="table-fixed border border-black border-collaps">
        <tr class="border border-black">
            <th class="border border-black p-2">Restaurant id</th>
            <th class="border border-black p-2">Naam</th>
            <th class="border border-black p-2">Locatie</th>
        </tr>
        <?php $restaurant->read(); ?>
    </table>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


