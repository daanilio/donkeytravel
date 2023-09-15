<?php

require_once '../../Models/Reserveer.php';
use Models\Reserveer;


$reserveerVoornaam = $_POST["voornaam"];
$reserveerAchternaam = $_POST["achternaam"];
$reserveerTelefoon = $_POST["telefoonnummer"];
$reserveerEmail = $_POST["email"];
$reserveerPersonen = $_POST["personen"];
$reserveerDatum = $_POST["datum"];

$reservering = new Reserveer($reserveerVoornaam, $reserveerAchternaam, $reserveerTelefoon, $reserveerEmail, $reserveerPersonen, $reserveerDatum);
$reservering->create();