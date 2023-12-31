<!doctype html>
<?php
include '../../Components/header.php';
require_once '../../Database/database.php';

require '../../Models/Ezels.php';

$ezelId = $_POST["ezelId"];
$naam = $_POST["naam"];
$leeftijd = $_POST["leeftijd"];

require_once '../../Models/Ezels.php';

use Models\Ezels;

$ezel = new Ezels();

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
if ($_SESSION['functie'] === "medewerker") {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">


<main class="py-18 px-64">
    <div class="flex justify-center align-center my-auto">
        <form class="w-1/2 bg-green-800 rounded-t-lg px-12 pt-12 mt-12 text-black flex flex-col"
              action="updateEzelcontroller.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="ezelId">Ezel id</label>
                <input type="text" name="ezelId" id="ezelId"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $ezelId ?>">

            </div>
            <div class="mb-5">
                <label class="text-white" for="naam">Naam</label>
                <input type="text" name="naam" id="naam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                       value="<?php echo $naam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="leeftijd">Leeftijd</label>
                <input type="text" name="leeftijd" id="leeftijd"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                       value="<?php echo $leeftijd ?>">
            </div>

            <input type="submit" name="verzenden" id="button" value="Updaten"
                   class="p-1 bg-green-200 hover:bg-green-400 border border-gray-700 w-full rounded-md">
        </form>
    </div>

    <div class="flex justify-center align-center my-auto mb-20 bg-green-800 rounded-b-lg w-1/2 mx-auto">
        <form action="deleteEzelBevestiging.php" method="post" class="w-full mx-12 pb-4">
            <input type="hidden" name="ezelId" id="id"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                   value="<?php echo $ezelId ?>">
            <input type="hidden" name="naam" id="naam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $naam ?>">
            <input type="hidden" name="leeftijd" id="leeftijd"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $leeftijd ?>">
            <input type="submit" value="Verwijder Ezel"
                   class="p-1 mt-2 bg-red-500 hover:bg-red-600 border border-gray-700 w-full rounded-md text-white">
        </form>
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

