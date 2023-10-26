<?php
require "../../vendor/autoload.php";

use Models\Gebruikers;

// Create the object.
$gebruikers = new Gebruikers();

?>

<table class="table-fixed border border-black border-collape w-full">
    <tr class="border border-black">
        <th class="border border-black p-2">Voornaam</th>
        <th class="border border-black p-2">Achternaam</th>
        <th class="border border-black p-2">Email</th>
        <th class="border border-black p-2">Functie</th>
        <th class="border border-black p-2"></th>
    </tr>
    <?php $gebruikers->read() ?>
</table>
