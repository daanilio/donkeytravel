<?php
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
    <title>Mijn Donkey Travel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php include '../../Components/header.php'; ?>

<main class="px-64">
    <h2 class="text-center text-3xl mb-12">Welkom bij uw overzicht, <?php  ?></h2>
    <div class="grid gap-x-20 gap-y-10 grid-cols-2">
        <div class="bg-gray-200 border-4 border-gray-800 p-3 text-center rounded-xl"><h2 class="text-3xl font-bold"><span
                    class="border-b-4 border-green-800 pb-1">MDT Account</span></h2>
            <p class="mt-5"><a href="#">Beheer hier uw Donkey Travel account</a></p>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-gray-700"><span
                        class="border-b-4 border-green-800">Mijn boekingen</span></h2>
                <div class="mb-4"><br>
                    <a href="gastReserveringen.php">Beheer en bekijk hier uw boekingen</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>
<?php
} else {
    header("Location: ../index.php");
}
?>

