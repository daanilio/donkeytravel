<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<header class="w-full text-xl text-white font-bold">
    <nav class="sticky top-0 w-full py-4 px-2 border-x-4 border-green-800 border-b-4 bg-gray-800 grid grid-cols-4">
        <div class="flex">
            <p class="font-bold text-white uppercase text-xl bg-green-800 px-3 py-1">
                <a href="../../Views/index.php">Donkey travel</a>
            </p>
        </div>
        <div class="flex justify-center sm:flex sm:items-center sm:w-auto col-span-2">
            <div class="sm:flex-row text-sm uppercase">
                <a href="../index.php#informatie"
                   class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Informatie</a>
                <a href="../index.php#overOns" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Over
                    ons</a>
                <a href="../Reserveer/createReservering.php" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Reserveer</a>
            </div>
        </div>
        <div class="flex justify-end uppercase text-sm">
            <?php
            if (isset($_SESSION['id']) && $_SESSION['email']) {
                echo '<a href="../../Views/Login/uitloggen.php" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Uitloggen</a>';
            } else {
                echo '<a href="../../Views/Login/login.php" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Inloggen</a>';
            }
            ?>
            <?php
            if (isset($_SESSION['id']) && $_SESSION['email'] && ($_SESSION['functie'] != 'medewerker')) { ?>
                <a href="../Gasten/MDT.php"><img class="flex m-0 p-0" src="../../Images/person.png" alt="account icon" style="max-width: 40px;"></a>
            <?php }else { ?>
                <a href="../Medewerker/panel.php"><img class="flex m-0 p-0" src="../../Images/person.png" alt="account icon" style="max-width: 40px;"></a>
            <?php } ?>
        </div>
    </nav>
</header>
</html>