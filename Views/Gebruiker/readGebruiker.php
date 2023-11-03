<?php
require "../../vendor/autoload.php";

use Models\Gebruikers;

// Create the object.
$gebruikers = new Gebruikers();

// Checks if you're logged in and if you have the right permissions.
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
if ($_SESSION['functie'] ==== "medewerker") {

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

<?php
} else {
    header("Location: ../index.php");
}
} else {
    header("Location: ../index.php");
    exit();
}
?>