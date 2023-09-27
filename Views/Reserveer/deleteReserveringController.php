<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verwijder</title>
</head>
<?php

require_once '../../Models/Reserveer.php';

use Models\Reserveer;

$reserveerId = $_POST["reserveerId"];
$reservering = new Reserveer();

?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 m-auto flex justify-center">
    <?php $reservering->delete($reserveerId);?>
</main>
<?php include '../../Components/footer.php';

?>

</body>
</html>
