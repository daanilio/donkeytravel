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

require '../../Models/Tochten.php';

$tochtId = $_POST["tochtId"];
$tochtLocatie = $_POST["tochtLocatie"];

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
if ($_SESSION['functie'] === "medewerker") {
?>

<main class="py-18 px-64">
    <div class="flex justify-center align-center my-auto">
        <form class="w-1/2 bg-green-800 rounded-lg px-12 py-12 mt-12 text-black flex flex-col mb-10"
              action="deleteTochtController.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="tochtId">Tocht id</label>
                <input type="text" name="tochtId" id="tochtId"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $tochtId ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="klantId">Klant id</label>
                <input type="text" name="klantId" id="klantId"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $tochtLocatie ?>">
            </div>
            <input type="submit" value="Verwijder reservering"
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