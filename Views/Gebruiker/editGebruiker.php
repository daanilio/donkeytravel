<?php
// Checks if you're logged in and if you have the right permissions.


        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Edit Gebruiker</title>
            <link rel="stylesheet" href="">
            <link rel="shortcut icon" type="image/jpg" href=""/>
        </head>

        <?php
        require '../../Models/Gebruikers.php';

        $id = $_POST['id'];
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $functie = $_POST['functie'];
        ?>
        <body>
        <h1 class="text-center mt-5 font-bold text-lg">Create gebruiker</h1>
        <div class="flex justify-center align-center my-auto">
            <form class="w-1/4" action="updateGebruikerController.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $id?>">
                <div class="mb-5">
                    <label for="voornaam">Voornaam</label>
                    <input type="text" name="voornaam" id="voornaam" value="<?php echo $voornaam?>" class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                </div>
                <div class="mb-5">
                    <label for="achternaam">Achternaam</label>
                    <input type="text" name="achternaam" id="achternaam" value="<?php echo $achternaam?>" class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                </div>
                <div class="mb-5">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $email?>" class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                </div>
                <div class="mb-5">
                    <label for="functie">Functie</label>
                    <select name="functie" id="functie" class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full">
                        <option value="1">Medewerker</option>
                        <option value="0">Klant</option>
                    </select>
                </div>
                <input type="submit" value="Update Gebruiker" class="p-1 bg-green-100 hover:bg-green-300 border border-gray-700 w-full rounded-md">

            </form>
        </div>
        <div class="flex justify-center align-center my-auto">
            <form action="deleteGebruikerBevestiging.php" method="post" class="w-1/4 mt-2">
                <input type="hidden" name="id" id="id" value="<?php echo $id?>">
                <input type="hidden" name="voornaam" id="voornaam" value="<?php echo $voornaam?>">
                <input type="hidden" name="achternaam" id="achternaam" value="<?php echo $achternaam?>">
                <input type="hidden" name="email" id="email" value="<?php echo $email?>">
                <input type="hidden" name="functie" id="functie" value="<?php echo $functie?>">
                <input type="submit" value="Verwijder Gebruiker" class="p-1 bg-red-500 hover:bg-red-800 border border-gray-700 w-full rounded-md text-white">
            </form>
        </div>
        </body>
        </html>
<?php

?>
