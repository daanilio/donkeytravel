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
    <div class="grid gap-x-20 gap-y-10 grid-cols-2 grid-rows-2 ">
        <div class="bg-gray-200 border-4 border-gray-800 p-3 text-center rounded-xl"><h2 class="text-3xl font-bold"><span
                        class="border-b-4 border-green-800 pb-1">Medewerker panel</span></h2>
            <p class="mt-5">Beheer hier de gebruikers, reserveringen en ezels.</p>
        </div>
        <div class="bg-gray-200 border-4 border-gray-800 rounded-xl p-3 text-center ">
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-gray-700"><span
                            class="border-b-4 border-green-800"><a href="#">Gebruikers</a></span></h2>
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
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-gray-700"><span
                            class="border-b-4 border-green-800"><a href="#">Reserveringen</a></span></h2>
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
            <div class="rounded-xl"><h2 class="text-3xl font-bold hover:text-gray-700"><span
                            class="border-b-4 border-green-800"><a href="#">Ezels</a></span></h2>
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
    </div>
</main>

<?php include '../../Components/footer.php'; ?>

</body>
</html>


