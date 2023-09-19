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

<main class="py-24 px-64">
    <div class="grid gap-x-20 gap-y-10 grid-cols-2 grid-rows-2">
        <div class="border-4 border-gray-800 p-3 text-center rounded-xl"><h2 class="text-3xl font-bold"><span
                        class="border-b-4 border-green-800 pb-1">Medewerker panel</span>
            </h2>
            <p class="text-medium"><br>Navigeer hier naar uw gewenste locatie. <br>
                De pagina verwijst naar een CRUD.</p>
        </div>
        <div class="border-4 border-gray-800 rounded-xl p-3 text-center bg-gray-200">
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-green-600"><span
                            class="border-b-4 border-green-800"><a href="#">Gebruikers</a></span></h2>
                <p class="text-medium"><br>Manage de gebruikers/accounts.
            </div>
        </div>
        <div class="border-4 border-gray-800 rounded-xl p-3 text-center bg-gray-200">
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-green-600"><span
                            class="border-b-4 border-green-800"><a href="#">Reserveringen</a></span></h2>
                <p class="text-medium"><br>Manage de reserveringen.
            </div>
        </div>
        <div class="border-4 border-gray-800 rounded-xl p-3 text-center bg-gray-200">
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-green-600"><span
                            class="border-b-4 border-green-800"><a href="#">Ezels</a></span></h2>
                <p class="text-medium"><br>Manage onze ezels.
            </div>
        </div>
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


