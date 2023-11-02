<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donkey travel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white font-family-karla flex flex-col min-h-screen">

<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-white uppercase text-5xl bg-green-800 px-3 pb-1">
            Donkey travel
        </a>
        <p class="text-lg text-gray-600 mt-3">
            De nummer 1 in ezel huifkar-ritten
        </p>
    </div>
</header>

<div class="flex justify-center sticky top-0 text-white font-bold">
    <nav class="sticky top-0 w-full py-4 px-2 border-x-4 border-green-800 border-b-4 bg-gray-800 grid grid-cols-4">
        <div></div>
        <div class="flex justify-center sm:flex sm:items-center sm:w-auto col-span-2">
            <div class="sm:flex-row text-sm uppercase">
                <a href="home.php#informatie"
                   class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Informatie</a>
                <a href="home.php#overOns" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Over
                    Donkey Travel</a>
                <a href="../Views/Reserveer/createReservering.php" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Reserveer</a>
            </div>
        </div>
        <div class="flex justify-end uppercase text-sm">
            <a href="#" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Inloggen</a>
            <img class="flex m-0 p-0" src="../Images/person.png" alt="account icon" style="max-width: 40px;">
        </div>
    </nav>
</div>

<div id="overOns"  class="p-24">
    <div class="grid grid-cols-4 gap-4 h-36 text-center w-full">
        <div class="col-span-2 mx-auto ">
            <img class="rounded-3xl border-4 border-gray-800" src="../Images/foto_van_ezel.jpg" alt="foto van een ezel">
        </div>
        <div class="col-span-2 text-left p-12 rounded-3xl border-4 border-gray-800 bg-green-800 text-white">
            <div>
                <h1 class="font-bold uppercase text-3xl">Over Donkey Travel</h1>
                <p class="pt-4 text-1xl text-justify">Donkey Travel is 11 jaar geleden opgericht door eigenaar Loes de
                    Korte.
                    <br>
                    Na haar studie Culturele antropologie en ontwikkelingssociologie heeft Loes de Korte een aantal
                    jaren op het ministerie van Sociale Zaken en Werkgelegenheid gewerkt.
                    <br>
                    Al snel werd duidelijk dat ze
                    daar niet op haar plaats was. Ze besloot haar twee passies (ezels en reizen) te combineren.
                    <br><br>
                    De hoofdactivitieit van Donkey Travel is het
                    arrangeren en begeleiden van ezel-huifkartochten.
                    <br>
                    Donkey Travel heeft inmiddels een twintigtal ezels met huifkarren rondrijden. Dat aantal breidt zich
                    nog altijd uit.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="informatie" class="w-full py-4 border-t-4 border-green-900 border-t h-24 z-0 bg-gray-800 text-white mb-48">
    <div class="grid grid-cols-3 px-24 gap-24">
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Milieuvriendelijk</span>
            </h3>
            <p class="p-5">Het bedrijf een goede reputatie opgebouwd op het gebied van milieuvriendelijke en
                CO2-neutrale vakanties. Zeker door de toenemende vraag naar CO2-neutrale vakanties bleek de vraag naar
                dit soort reizen groot.
            </p>
        </div>
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Prachtige locaties</span>
            </h3>
            <p class="p-5">Donkey Travel heeft locaties in Nederland, België en Duitsland. <br> U kunt zelf kiezen wat
                uw start- en eindlocatie wordt. Hierbij worden eventuelen overnachtingen geregeld.
            </p>
        </div>
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Eenvoudig reserveren</span>
            </h3>
            <p class="p-5">Het reserveren van een ezel-huifkar rit bij Donkey Travel is eenvoudig en handig. Maak gewoon
                een account aan en selecteer de gewenste datum en locatie voor je rit.
                <br><br>
                <a href="../Views/Reserveer/createReservering.php" class="hover:text-gray-500">Reserveer nu</a>
            </p>
        </div>
    </div>
</div>

<?php include "../Components/footer.php" ?>

</body>
</html>
