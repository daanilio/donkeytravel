<?php
// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
    if ($_SESSION['functie'] === "medewerker") {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MW Panel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex min-h-screen justify-between flex-col">

<?php include '../../Components/header.php'; ?>

<main class="pb-16 pt-8 px-64">
    <div class="text-center text-3xl mb-6 font-bold">Medewerker panel</div>
    <div class="grid gap-x-20 gap-y-10 grid-cols-2 grid-rows-2 ">
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Gebruikers</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Gebruiker/readGebruiker.php">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Gebruiker/readGebruiker.php">Update/Delete</a></span>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Reserveringen</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Reserveer/createReservering.php">Create</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Reserveer/readReservering.php">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Reserveer/readReservering.php">Update/Delete</a></span>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Ezels</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Create</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Update/Delete</a></span>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Herbergen</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Create</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Update/Delete</a></span>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Restaurants</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Create</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="">Update/Delete</a></span>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold"><span
                            class="border-b-4 border-green-800">Tochten</span></h2>
                <div class="mb-4"><br>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Tochten/createTocht.php">Create</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Tochten/readTocht.php">Read</a></span>
                    <span class="hover:bg-gray-800 hover:text-white p-3 border-2 rounded-lg text-center border-green-800 bg-white"><a
                                href="../Tochten/readTocht.php">Update/Delete</a></span>
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
} else {
    header("Location: ../index.php");
    exit();
}
?>

