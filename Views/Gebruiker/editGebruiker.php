<?php
// Checks if you're logged in and if you have the right permissions.
session_start();

include '../../Components/header.php';

if (isset($_SESSION['id']) && $_SESSION['email']) {
    if ($_SESSION['functie'] === "medewerker") {

        ?>


        <?php
        require '../../Models/Gebruikers.php';

        $id = $_POST['id'];
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $functie = $_POST['functie'];
        ?>
        <!doctype html>
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
                      action="updateGebruikerController.php" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                    <div class="mb-5">
                        <label class="text-white" for="voornaam">Voornaam</label>
                        <input type="text" name="voornaam" id="voornaam" value="<?php echo $voornaam ?>"
                               class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                    </div>
                    <div class="mb-5">
                        <label class="text-white" for="achternaam">Achternaam</label>
                        <input type="text" name="achternaam" id="achternaam" value="<?php echo $achternaam ?>"
                               class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                    </div>
                    <div class="mb-5">
                        <label class="text-white" for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $email ?>"
                               class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                    </div>
                    <div class="mb-5">
                        <label class="text-white" for="functie">Functie</label>
                        <select name="functie" id="functie"
                                class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                            <option value="medewerker">Medewerker</option>
                            <option value="klant">Klant</option>
                        </select>
                    </div>
                    <input type="submit" value="Update Gebruiker"
                           class="p-1 bg-green-100 hover:bg-green-300 border border-gray-700 w-full rounded-md">
                </form>
            </div>
            <div class="flex justify-center align-center my-auto mb-20 bg-green-800 rounded-b-lg w-1/2 mx-auto">
                <form action="deleteGebruikerBevestiging.php" method="post" class="w-full mx-12 pb-4 mt-2">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                    <input type="hidden" name="voornaam" id="voornaam" value="<?php echo $voornaam ?>">
                    <input type="hidden" name="achternaam" id="achternaam" value="<?php echo $achternaam ?>">
                    <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                    <input type="hidden" name="functie" id="functie" value="<?php echo $functie ?>">
                    <input type="submit" value="Verwijder Gebruiker"
                           class="p-1 bg-red-500 hover:bg-red-800 border border-gray-700 w-full rounded-md text-white">
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