<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveer</title>
</head>
<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="mx-auto">
<?php

require_once '../../Models/Tochten.php';
use Models\Tochten;

$tochtLocatie = $_POST["tochtLocatie"];

$tocht = new Tochten($tochtLocatie);
$tocht->create();
?>

</main>
<?php include '../../Components/footer.php'; ?>

</body>
</html>
