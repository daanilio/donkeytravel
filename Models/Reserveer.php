<?php

namespace Models;

class Reserveer
{

    public $reserveerVoornaam;
    public $reserveerAchternaam;
    public $reserveerTelefoon;
    public $reserveerEmail;
    public $reserveerPersonen;
    public $reserveerDatum;

    /**
     * @param $reserveerVoornaam
     * @param $reserveerAchternaam
     * @param $reserveerTelefoon
     * @param $reserveerEmail
     * @param $reserveerPersonen
     * @param $reserveerDatum
     */
    public function __construct($reserveerVoornaam = NULL, $reserveerAchternaam = NULL, $reserveerTelefoon = NULL, $reserveerEmail = NULL, $reserveerPersonen = NULL, $reserveerDatum = NULL)
    {
        $this->reserveerVoornaam = $reserveerVoornaam;
        $this->reserveerAchternaam = $reserveerAchternaam;
        $this->reserveerTelefoon = $reserveerTelefoon;
        $this->reserveerEmail = $reserveerEmail;
        $this->reserveerPersonen = $reserveerPersonen;
        $this->reserveerDatum = $reserveerDatum;
    }

    public function getReserveerVoornaam(): mixed
    {
        return $this->reserveerVoornaam;
    }

    public function getReserveerAchternaam(): mixed
    {
        return $this->reserveerAchternaam;
    }

    public function getReserveerTelefoon(): mixed
    {
        return $this->reserveerTelefoon;
    }

    public function getReserveerEmail(): mixed
    {
        return $this->reserveerEmail;
    }

    public function getReserveerPersonen(): mixed
    {
        return $this->reserveerPersonen;
    }

    public function getReserveerDatum(): mixed
    {
        return $this->reserveerDatum;
    }


    public function create()
    {
        require "../../Database/db.php";

        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerTelefoon = $this->getReserveerTelefoon();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerDatum = $this->getReserveerDatum();

        if (empty($reserveerVoornaam) || empty($reserveerAchternaam) || empty($reserveerTelefoon) || empty($reserveerEmail) || empty($reserveerPersonen) || empty($reserveerDatum)) {
            echo "<p>Er zijn velden niet ingevuld, ga terug naar de pagina. <a href='../../Views/Reserveer/createReservering.php'>Ga terug</a></p>";
        } else {

            // SQL query: voor invoer in de tabel
            $sql = $conn->prepare("INSERT INTO reserveringen (reserveerVoornaam,reserveerAchternaam,reserveerTelefoon,reserveerEmail,reserveerPersonen,reserveerDatum) 
    VALUES (:reserveerVoornaam, :reserveerAchternaam, :reserveerTelefoon, :reserveerEmail, :reserveerPersonen, :reserveerDatum)");

            $sql->bindParam(":reserveerVoornaam", $reserveerVoornaam);
            $sql->bindParam(":reserveerAchternaam", $reserveerAchternaam);
            $sql->bindParam(":reserveerTelefoon", $reserveerTelefoon);
            $sql->bindParam(":reserveerEmail", $reserveerEmail);
            $sql->bindParam(":reserveerPersonen", $reserveerPersonen);
            $sql->bindParam(":reserveerDatum", $reserveerDatum);

            // SQL query: voer de query uit
            $sql->execute();

            echo "<br> Uw reservering is verzonden en wordt verwerkt.";
            echo "<br><br> Uw informatie: <br>";
            echo "<br> <p class='font-bold'>Naam</p> " . $this->getReserveerVoornaam() . " " . $this->getReserveerAchternaam();
            echo "<br><br> <p class='font-bold'>Telefoonnummer</p> " . $this->getReserveerTelefoon();
            echo "<br><br> <p class='font-bold'>Email</p> " . $this->getReserveerEmail();
            echo "<br><br> <p class='font-bold'>Aantal</p> personen " . $this->getreserveerPersonen();
            echo "<br><br> <p class='font-bold'>Datum huifkar-rit</p>" . $this->getReserveerDatum();

            echo "<br><br> <a href='../../Views/home.php'>Ga terug naar de hoofdpagina</a>";
        }
    }

    public function read()
    {
        require "../../Database/db.php";

        $sql = $conn->prepare("select * from reserveringen");

        $sql->execute();

        foreach ($sql as $reserveer) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerVoornaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerAchternaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerTelefoon"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerEmail"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerPersonen"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerDatum"] . "</td>";

            echo "<td class='border border-black'>
                    <form action='editReservering.php' method='post'>
                        <input type='hidden' name='reserveerId' value=" . $reserveer["reserveerId"] . ">
                        <input type='hidden' name='reserveerVoornaam' value=" . $reserveer["reserveerVoornaam"] . ">
                        <input type='hidden' name='reserveerAchternaam' value=" . $reserveer["reserveerAchternaam"] . ">
                        <input type='hidden' name='reserveerTelefoon' value=" . $reserveer["reserveerTelefoon"] . ">
                        <input type='hidden' name='reserveerEmail' value=" . $reserveer["reserveerEmail"] . ">
                        <input type='hidden' name='reserveerPersonen' value=" . $reserveer["reserveerPersonen"] . ">
                        <input type='hidden' name='reserveerDatum' value=" . $reserveer["reserveerDatum"] . ">
                        <input class='p-2' type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function update($inkOrdId)
    {
        require "../../Database/database.php";

        $levId = $this->getlevId();
        $artId = $this->getArtId();
        $inkOrdDatum = $this->getinkOrdDatum();
        $inkOrdBestAantal = $this->getinkOrdBestAantal();
        $inkOrdStatus = $this->getinkOrdStatus();

        $sql = $conn->prepare
        ("
            update inkooporders set 
                               levId = :levId, artId = :artId, inkOrdDatum = :inkOrdDatum, inkOrdBestAantal = :inkOrdBestAantal, inkOrdStatus = :inkOrdStatus
            WHERE inkOrdId = :inkOrdId
            ");

        // SQL query: variabelen in de statement zetten
        $sql->bindParam(":inkOrdId", $inkOrdId);
        $sql->bindParam(":levId", $levId);
        $sql->bindParam(":artId", $artId);
        $sql->bindParam(":inkOrdDatum", $inkOrdDatum);
        $sql->bindParam(":inkOrdBestAantal", $inkOrdBestAantal);
        $sql->bindParam(":inkOrdStatus", $inkOrdStatus);

        $sql->execute();

        echo "Deze inkooporder is gewijzigd";
    }

    public function delete($inkOrdId)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("DELETE FROM inkooporders WHERE inkOrdId = :inkOrdId");
        $sql->bindParam(":inkOrdId", $inkOrdId);
        $sql->execute();

        echo "Deze inkooporder is verwijderd.";
    }

}