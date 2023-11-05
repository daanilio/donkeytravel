<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
</head>
<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="mx-auto">
    <?php

    require_once '../../Models/Restaurant.php';
    use Models\Restaurant;

    $naam = $_POST["naam"];
    $locatie = $_POST["locatie"];

    $restaurant = new Restaurant($naam, $locatie);
    $restaurant->create();
    ?>

</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
