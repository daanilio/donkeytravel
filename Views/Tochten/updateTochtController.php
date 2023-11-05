<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<?php

require_once '../../Models/Tochten.php';

use Models\Tochten;

$tochtId = $_POST["tochtId"];
$tochtLocatie = $_POST["tochtLocatie"];

$tocht = new Tochten($tochtLocatie);

session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
if ($_SESSION['functie'] === "medewerker") {
?>

<body class="flex min-h-screen justify-between flex-col">
<?php include '../../Components/header.php'; ?>
<main class="py-18 px-64 flex justify-center">
    <div class="">
        <table class="table-fixed border border-black border-collape">
            <tr class="border border-black">
                <th class="border border-black p-2">Tocht id</th>
                <th class="border border-black p-2">Locatie van tocht</th>
            </tr>
            <?php $tocht->update($tochtId); ?>
        </table>
    </div>
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