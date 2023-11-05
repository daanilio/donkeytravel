<!doctype html>
<?php
include '../../Components/header.php';
require_once '../../Database/database.php';

$id = $_POST["id"];
$naam = $_POST["naam"];
$locatie = $_POST["locatie"];
$sterren = $_POST["sterren"];

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
              action="updateHerbergController.php"
              method="post">
            <div class="mb-5">
                <label class="text-white" for="id">Id</label>
                <input type="text" name="id" id="id"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                       value="<?php echo $id ?>">

            </div>
            <div class="mb-5">
                <label class="text-white" for="naam">Naam</label>
                <input type="text" name="naam" id="naam"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                       value="<?php echo $naam ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="locatie">Locatie</label>
                <input type="text" name="locatie" id="locatie"
                       class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                       value="<?php echo $locatie ?>">
            </div>
            <div class="mb-5">
                <label class="text-white" for="sterren">Sterren</label>
                <select name="sterren" id="sterren">
                    <option value="<?php echo $sterren ?>"><?php echo $sterren ?></option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>


            <input type="submit" name="verzenden" id="button" value="Updaten"
                   class="p-1 bg-green-200 hover:bg-green-400 border border-gray-700 w-full rounded-md">
        </form>
    </div>

    <div class="flex justify-center align-center my-auto mb-20 bg-green-800 rounded-b-lg w-1/2 mx-auto">
        <form action="deleteHerbergBevestiging.php" method="post" class="w-full mx-12 pb-4">
            <input type="hidden" name="id" id="id"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" readonly
                   value="<?php echo $id ?>">
            <input type="hidden" name="naam" id="naam"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $naam ?>">
            <input type="hidden" name="locatie" id="locatie"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $locatie ?>">
            <input type="hidden" name="sterren" id="locatie"
                   class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full"
                   value="<?php echo $sterren ?>">
            <input type="submit" value="Verwijder Herberg"
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

