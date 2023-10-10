<?php
require_once '../../Models/Gebruikers.php';
use Models\Gebruikers;

// Zet de informatie uit de formulieren om in een variabel
$voornaam = $_POST ["voornaam"];
$achternaam = $_POST ["achternaam"];
$email = $_POST ["email"];
$wachtwoord = $_POST ["wachtwoord"];

// Maakt van het wachtwoord allemaal verschillende tekens voor beveiliging.
$wachtwoord = md5($wachtwoord);

// Maakt een object van de ingevoerde informatie.
$gebruiker = new Gebruikers($voornaam, $achternaam, $email, $wachtwoord,);
$gebruiker->create();

header("refresh:2;url=loginController.php");
?>
