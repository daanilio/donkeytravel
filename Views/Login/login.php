<?php
session_start();
include '../../Components/header.php';


if (isset($_SESSION['id']) && $_SESSION['email']) {
    header("Location: ../index.php");
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="shortcut icon" type="image/jpg" href=""/>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="flex min-h-screen justify-between flex-col">
    <main class="py-18 px-64 flex justify-center">
        <form class="w-1/2 bg-green-800 rounded-lg p-8 m-12 text-black" action="loginController.php" method="post">
            <?php
            if (isset($_GET['error'])) {
                echo "<p class='text-red-500'>" . $_GET['error'] . "</p>";
            }
            ?>

            <label class="text-white" for="email">Email</label>
            <input class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" type="email" name="email" id="email">

            <label class="text-white" for="wachtwoord">Wachtwoord</label>
            <input class="p-1 hover:bg-gray-200 border border-gray-700 rounded-md min-w-full" type="password" name="wachtwoord" id="wachtwoord">

            <input class="mt-4 p-1 bg-green-100 hover:bg-green-300 border border-gray-700 w-full rounded-md" type="submit" value="Inloggen">
            <a class="flex justify-center mt-3 text-white" href="registreer.php">Nog geen account? Maak er 1 aan.</a>
        </form>
    </main>
    <?php include '../../Components/footer.php'; ?>
    </body>
    </html>
    <?php
}