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
                    ons</a>
                <a href="#" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Reserveer</a>
            </div>
        </div>
        <div class="flex justify-end uppercase text-sm">
            <a href="#" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Inloggen</a>
            <img class="flex m-0 p-0" src="images/person.png" alt="account icon" style="max-width: 40px;">
        </div>
    </nav>
</div>

<div class="p-24">
    <div class="grid grid-cols-4 gap-4 h-36 text-center w-full">
        <div class="col-span-2 mx-auto ">
            <img class="rounded-3xl border-4 border-gray-800" src="images/foto_van_ezel.jpg" alt="">
        </div>
        <div class="col-span-2 text-left p-12 rounded-3xl border-4 border-gray-800 bg-green-800 text-white">
            <div>
                <h1 id="overOns" class="font-bold uppercase text-3xl">Over ons</h1>
                <p class="pt-4 text-1xl text-justify">Donkey Travel is een uniek en avontuurlijk bedrijf
                    dat
                    gespecialiseerd is in ezel-huifkar ritjes voor avontuurlijke reizigers zoals jij!
                    <br> <br>
                    Onze onderneming is opgericht door drie gepassioneerde eigenaren: Lisa, Danilio, en Dylan. Samen
                    delen we een diepe liefde voor de natuur, dieren, en het creëren van onvergetelijke herinneringen
                    voor onze klanten.
                    <br> <br>
                    Wij leveren huifkar ritjes (met ezel) door de mooie gebieden in Nederland. <br>
                    Een keertje proberen? Reserveren kan makkelijk via deze site. Navigeer naar <a href="#"><i>Reserveren</i></a>
                    en
                    beleef onze unieke ervaring!
                </p>
            </div>
        </div>
    </div>
</div>

<div id="informatie" class="w-full py-4 border-t-4 border-green-900 border-t h-24 z-0 bg-gray-800 text-white mb-48">
    <div class="grid grid-cols-3 px-24 gap-24">
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Passie voor dieren</span>
            </h3>
            <p class="p-5">Bij Donkey Travel hechten we de grootste waarde aan het welzijn van onze ezels. Ze
                worden met liefde en zorg behandeld, en we zorgen ervoor dat ze in topconditie zijn om jou een
                fantastische
                ervaring te bieden.
            </p>
        </div>
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Prachtige locaties</span>
            </h3>
            <p class="p-5">Onze ezel-huifkar ritjes zijn beschikbaar op enkele van de meest adembenemende locaties in de
                regio. Of je nu wilt genieten van schilderachtige uitzichten in de bergen of rustige tochten langs de
                kust, we hebben voor elk wat wils.
            </p>
        </div>
        <div class="z-10 w-full h-56 bg-white text-black border-4 bg-white border-black text-l text-center rounded-xl"
             style="background-color: white">
            <h3 class="text-2xl pt-2"><span style="padding-bottom: 1px;border-bottom: darkgreen 3px solid">Eenvoudig reserveren</span>
            </h3>
            <p class="p-5">Het reserveren van een ezel-huifkar rit bij Donkey Travel is eenvoudig en handig. Maak gewoon
                een account aan en selecteer de gewenste datum en locatie voor je rit.
                <br><br>
                <a href="#" class="hover:text-gray-500">Reserveer nu</a>
            </p>
        </div>
    </div>
</div>

<?php include "footer.html" ?>

</body>
</html>
