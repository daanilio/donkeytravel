<?php

namespace Models;

class Reserveer
{

    public $klantId;
    public $reserveerVoornaam;
    public $reserveerAchternaam;
    public $reserveerEmail;
    public $reserveerPersonen;
    public $reserveerTocht;
    public $reserveerDatum;
    public $reserveerStatus;

    /**
     * @param $klantId
     * @param $reserveerVoornaam
     * @param $reserveerAchternaam
     * @param $reserveerEmail
     * @param $reserveerPersonen
     * @param $reserveerTocht
     * @param $reserveerDatum
     * @param $reserveerStatus
     */
    public function __construct($klantId = NULL, $reserveerVoornaam = NULL, $reserveerAchternaam = NULL, $reserveerEmail = NULL, $reserveerPersonen = NULL, $reserveerTocht = NULL, $reserveerDatum = NULL, $reserveerStatus = NULL)
    {
        $this->klantId = $klantId;
        $this->reserveerVoornaam = $reserveerVoornaam;
        $this->reserveerAchternaam = $reserveerAchternaam;
        $this->reserveerEmail = $reserveerEmail;
        $this->reserveerPersonen = $reserveerPersonen;
        $this->reserveerTocht = $reserveerTocht;
        $this->reserveerDatum = $reserveerDatum;
        $this->reserveerStatus = $reserveerStatus;
    }

    public function getKlantId(): mixed
    {
        return $this->klantId;
    }

    public function getReserveerVoornaam(): mixed
    {
        return $this->reserveerVoornaam;
    }

    public function getReserveerAchternaam(): mixed
    {
        return $this->reserveerAchternaam;
    }


    public function getReserveerEmail(): mixed
    {
        return $this->reserveerEmail;
    }

    public function getReserveerPersonen(): mixed
    {
        return $this->reserveerPersonen;
    }

    public function getReserveerTocht(): mixed
    {
        return $this->reserveerTocht;
    }

    public function getReserveerDatum(): mixed
    {
        return $this->reserveerDatum;
    }

    public function getReserveerStatus(): mixed
    {
        return $this->reserveerStatus;
    }


    public function create()
    {
        require "../../Database/database.php";

        $klantId = $this->getKlantId();
        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerTocht = $this->getReserveerTocht();
        $reserveerDatum = $this->getReserveerDatum();

        if (empty($reserveerVoornaam) || empty($reserveerAchternaam) || empty($reserveerEmail) || empty($reserveerPersonen) || empty($reserveerTocht) || empty($reserveerDatum)) {
            echo "<p>Er zijn velden niet ingevuld, ga terug naar de pagina. <a href='../../Views/Reserveer/createReservering.php'>Ga terug</a></p>";
        } else {

            // SQL query: voor invoer in de tabel
            $sql = $conn->prepare("INSERT INTO reserveringen (klantId, reserveerVoornaam, reserveerAchternaam, reserveerEmail, reserveerPersonen, reserveerTocht, reserveerDatum) 
VALUES (:klantId, :reserveerVoornaam, :reserveerAchternaam, :reserveerEmail, :reserveerPersonen, :reserveerTocht, :reserveerDatum)");

            $sql->bindParam(":klantId", $klantId);
            $sql->bindParam(":reserveerVoornaam", $reserveerVoornaam);
            $sql->bindParam(":reserveerAchternaam", $reserveerAchternaam);
            $sql->bindParam(":reserveerEmail", $reserveerEmail);
            $sql->bindParam(":reserveerPersonen", $reserveerPersonen);
            $sql->bindParam(":reserveerTocht", $reserveerTocht);
            $sql->bindParam(":reserveerDatum", $reserveerDatum);

            // SQL query: voer de query uit
            $sql->execute();

            echo "<br> Uw reservering is verzonden en wordt verwerkt.";
            echo "<br><br> Uw informatie: <br>";
            echo "<br> <p class='font-bold'>Naam</p> " . $this->getReserveerVoornaam() . " " . $this->getReserveerAchternaam();
            echo "<br><br> <p class='font-bold'>Email</p> " . $this->getReserveerEmail();
            echo "<br><br> <p class='font-bold'>Aantal personen</p> " . $this->getreserveerPersonen();
            echo "<br><br> <p class='font-bold'>Naam van tocht</p> " . $this->getReserveerTocht();
            echo "<br><br> <p class='font-bold'>Datum huifkar-rit</p>" . $this->getReserveerDatum();

            echo "<br><br> <a href='../../Views/index.php'>Ga terug naar de hoofdpagina</a>";
        }
    }

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from reserveringen");

        $sql->execute();

        foreach ($sql as $reserveer) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["klantId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerVoornaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerAchternaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerEmail"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerPersonen"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerTocht"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerDatum"] . "</td>";

            echo "<td class='border border-black p-2'>" . $reserveer["reserveerStatus"];
            if ($reserveer["reserveerStatus"] == 1) {
                echo ": aangevraagd";
            } elseif ($reserveer["reserveerStatus"] == 2) {
                echo ": defenitief";
            } else {
                echo ": afgekeurd";
            }
            "</td>";

            echo "<td class='border border-black'>
                    <form action='editReservering.php' method='post'>
                        <input type='hidden' name='reserveerId' value=" . $reserveer["reserveerId"] . ">
                        <input type='hidden' name='klantId' value=" . $reserveer["klantId"] . ">
                        <input type='hidden' name='reserveerVoornaam' value=" . $reserveer["reserveerVoornaam"] . ">
                        <input type='hidden' name='reserveerAchternaam' value=" . $reserveer["reserveerAchternaam"] . ">
                        <input type='hidden' name='reserveerEmail' value=" . $reserveer["reserveerEmail"] . ">
                        <input type='hidden' name='reserveerPersonen' value=" . $reserveer["reserveerPersonen"] . ">
                        <input type='hidden' name='reserveerTocht' value=" . $reserveer["reserveerTocht"] . ">
                        <input type='hidden' name='reserveerDatum' value=" . $reserveer["reserveerDatum"] . ">
                        <input type='hidden' name='reserveerStatus' value=" . $reserveer["reserveerStatus"] . ">
                        <input class='p-2' type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function readReserveringGast($id)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from reserveringen WHERE klantId = $id");

        $sql->execute();

        foreach ($sql as $reserveer) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["klantId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerVoornaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerAchternaam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerEmail"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerPersonen"] . "</td>";
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerTocht"] . "</td>";

            $date = $reserveer["reserveerDatum"];

//            Deze statement veranderd de kleur van de text aan de hand van de status
            if ($date == date("Y-m-d")) {
                echo "<td class='border border-black p-2 text-green-500'>" . $reserveer["reserveerDatum"] . ": Actief</td>";
            } elseif ($date > date("Y-m-d")) {
                echo "<td class='border border-black p-2 text-black-500'>" . $reserveer["reserveerDatum"] . ": Gepland</td>";
            } elseif ($date < date("Y-m-d")) {
                echo "<td class='border border-black p-2 text-red-500'>" . $reserveer["reserveerDatum"] . ": Verlopen</td>";
            }

//            Deze statement zorgt ervoor dat de status wordt weergegeven
            echo "<td class='border border-black p-2'>" . $reserveer["reserveerStatus"];
            if ($reserveer["reserveerStatus"] == 1) {
                echo ": aangevraagd";
            } elseif ($reserveer["reserveerStatus"] == 2) {
                echo ": defenitief";
            } else {
                echo ": afgekeurd";
            }
            "</td>";


            echo "<td class='border border-black'>
                    <form action='gastEditReservering.php' method='post'>
                        <input type='hidden' name='reserveerId' value=" . $reserveer["reserveerId"] . ">
                        <input type='hidden' name='klantId' value=" . $reserveer["klantId"] . ">
                        <input type='hidden' name='reserveerVoornaam' value=" . $reserveer["reserveerVoornaam"] . ">
                        <input type='hidden' name='reserveerAchternaam' value=" . $reserveer["reserveerAchternaam"] . ">
                        <input type='hidden' name='reserveerEmail' value=" . $reserveer["reserveerEmail"] . ">
                        <input type='hidden' name='reserveerPersonen' value=" . $reserveer["reserveerPersonen"] . ">
                        <input type='hidden' name='reserveerTocht' value=" . $reserveer["reserveerTocht"] . ">
                        <input type='hidden' name='reserveerDatum' value=" . $reserveer["reserveerDatum"] . ">
                        <input type='hidden' name='reserveerStatus' value=" . $reserveer["reserveerStatus"] . ">";

//            Deze functie checked of de gast zijn reserverering kan wijzigen
            if ($reserveer["reserveerDatum"] > date("Y-m-d") && ($reserveer["reserveerStatus"] == 1)) {
                echo "<input class='p-2 w-full cursor-pointer' type='submit' value='Wijzigen'>";
            } else {
                echo "<p class='text-center'>Niet mogelijk</p>";
            }

            echo "</form>
                </td>";
            echo "</tr>";
        }
    }

    public function update($reserveerId)
    {
        require "../../Database/database.php";

        $klantId = $this->getKlantId();
        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerTocht = $this->getReserveerTocht();
        $reserveerDatum = $this->getReserveerDatum();
        $reserveerStatus = $this->getReserveerStatus();

        $sql = $conn->prepare
        ("
            update reserveringen set 
                               reserveerId = :reserveerId, klantId = :klantId,reserveerVoornaam = :reserveerVoornaam, reserveerAchternaam = :reserveerAchternaam, reserveerEmail = :reserveerEmail, reserveerPersonen = :reserveerPersonen, reserveerTocht = :reserveerTocht, reserveerDatum = :reserveerDatum, reserveerStatus = :reserveerStatus
            WHERE reserveerId = :reserveerId
            ");

        // SQL query: variabelen in de statement zetten
        $sql->bindParam(":reserveerId", $reserveerId);
        $sql->bindParam(":klantId", $klantId);
        $sql->bindParam(":reserveerVoornaam", $reserveerVoornaam);
        $sql->bindParam(":reserveerAchternaam", $reserveerAchternaam);
        $sql->bindParam(":reserveerEmail", $reserveerEmail);
        $sql->bindParam(":reserveerPersonen", $reserveerPersonen);
        $sql->bindParam(":reserveerTocht", $reserveerTocht);
        $sql->bindParam(":reserveerDatum", $reserveerDatum);
        $sql->bindParam(":reserveerStatus", $reserveerStatus);

        $sql->execute();

        echo "<p class='text-xl mb-5 text-center'>De reservering is gewijzigd.<br> 
            <a href='../Reserveer/readReservering.php'>Ga terug.</a></p>";

        echo "<tr>";
        echo "<td class='border border-black p-2'>" . $reserveerId . "</td>";
        echo "<td class='border border-black p-2'>" . $klantId . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerVoornaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerAchternaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerEmail . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerPersonen . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerTocht . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerDatum . "</td>";

        if ($reserveerStatus == 1) {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": aangevraagd";
            "</td>";
        } elseif ($reserveerStatus == 2) {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": defenitief";
            "</td>";
        } elseif ($reserveerStatus == 3) {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": afgekeurd";
            "</td>";
        }
        echo "</tr>";
    }

    public function updateReserveringGast($reserveerId)
    {
        require "../../Database/database.php";

        $klantId = $this->getKlantId();
        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerTocht = $this->getReserveerTocht();
        $reserveerDatum = $this->getReserveerDatum();
        $reserveerStatus = $this->getReserveerStatus();

        $sql = $conn->prepare
        ("
            update reserveringen set 
                               reserveerId = :reserveerId, klantId = :klantId,reserveerVoornaam = :reserveerVoornaam, reserveerAchternaam = :reserveerAchternaam, reserveerEmail = :reserveerEmail, reserveerPersonen = :reserveerPersonen, reserveerTocht = :reserveerTocht, reserveerDatum = :reserveerDatum, reserveerStatus = :reserveerStatus
            WHERE reserveerId = :reserveerId
            ");

        // SQL query: variabelen in de statement zetten
        $sql->bindParam(":reserveerId", $reserveerId);
        $sql->bindParam(":klantId", $klantId);
        $sql->bindParam(":reserveerVoornaam", $reserveerVoornaam);
        $sql->bindParam(":reserveerAchternaam", $reserveerAchternaam);
        $sql->bindParam(":reserveerEmail", $reserveerEmail);
        $sql->bindParam(":reserveerPersonen", $reserveerPersonen);
        $sql->bindParam(":reserveerTocht", $reserveerTocht);
        $sql->bindParam(":reserveerDatum", $reserveerDatum);
        $sql->bindParam(":reserveerStatus", $reserveerStatus);

        $sql->execute();

        echo "<p class='text-xl mb-5 text-center'>Uw reservering is gewijzigd.<br>";
        header("refresh:2;url=gastReserveringen.php");

        echo "<tr>";
        echo "<td class='border border-black p-2'>" . $reserveerId . "</td>";
        echo "<td class='border border-black p-2'>" . $klantId . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerVoornaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerAchternaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerEmail . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerPersonen . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerTocht . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerDatum . "</td>";
        if ($reserveerStatus == 1) {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": aangevraagd";
            "</td>";
        } elseif ($reserveerStatus == 2) {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": defenitief";
            "</td>";
        } else {
            echo "<td class='border border-black p-2'>" . $reserveerStatus;
            echo ": afgekeurd";
            "</td>";
        }
        echo "</tr>";
    }

    public function delete($reserveerId)
    {
        require "../../Database/database.php";

        $klantId = $this->getKlantId();
        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerTocht = $this->getReserveerTocht();
        $reserveerDatum = $this->getReserveerDatum();
        $reserveerStatus = $this->getReserveerStatus();

        $sql = $conn->prepare("DELETE FROM reserveringen WHERE reserveerId = :reserveerId");
        $sql->bindParam(":reserveerId", $reserveerId);
        $sql->execute();

        echo "<tr>";
        echo "<td class='border border-black p-2'>" . $reserveerId . "</td>";
        echo "<td class='border border-black p-2'>" . $klantId . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerVoornaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerAchternaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerEmail . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerPersonen . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerTocht . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerDatum . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerStatus . "</td>";
        echo "</tr>";

    }

    public function deleteReserveringGast($reserveerId)
    {
        require "../../Database/database.php";

        $reserveerVoornaam = $this->getReserveerVoornaam();
        $reserveerAchternaam = $this->getReserveerAchternaam();
        $reserveerEmail = $this->getReserveerEmail();
        $reserveerPersonen = $this->getreserveerPersonen();
        $reserveerTocht = $this->getReserveerTocht();
        $reserveerDatum = $this->getReserveerDatum();
        $reserveerStatus = $this->getReserveerStatus();

        $sql = $conn->prepare("DELETE FROM reserveringen WHERE reserveerId = :reserveerId");
        $sql->bindParam(":reserveerId", $reserveerId);
        $sql->execute();

        echo "<tr>";
        echo "<td class='border border-black p-2'>" . $reserveerId . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerVoornaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerAchternaam . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerEmail . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerPersonen . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerTocht . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerDatum . "</td>";
        echo "<td class='border border-black p-2'>" . $reserveerStatus . "</td>";
        echo "</tr>";
    }
}