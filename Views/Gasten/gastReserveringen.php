<?php

require "../../Database/db.php";
require_once '../../Models/Reserveer.php';

use Models\Reserveer;

$reserveer = new Reserveer();
$id = 9;

$sql = $conn->prepare("select * from reserveringen WHERE reserveerId = $id");
$sql->execute();

$rowCount = $sql->rowCount();

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveringen</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php include '../../Components/header.php'; ?>

<main class="py-18 px-64 flex justify-center">
    <?php
    if ($rowCount <= 0) {
        echo "U heeft momenteel geen reserveringen.<a href='../Reserveer/createReservering.php'>Reserveer hier</a>";
    } else {
        echo '
    <table class="table-fixed border border-black border-collape">
        <tr class="border border-black">
            <th class="border border-black p-2">Reservering id</th>
            <th class="border border-black p-2">Voornaam</th>
            <th class="border border-black p-2">Achternaam</th>
            <th class="border border-black p-2">Email</th>
            <th class="border border-black p-2">Personen</th>
            <th class="border border-black p-2">Tochtnaam</th>
            <th class="border border-black p-2">Datum</th>
            <th class="border border-black p-2">Status</th>
            <th class="border border-black p-2">Wijzig/Verwijder</th>
        </tr>';
        $reserveer->readReserveringGast($id);
        echo '</table>';
    }
    ?>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: ../index.php");
}
?>

