<?php

namespace Models;

class Tochten
{

    public $tochtLocatie;

    /**
     * @param $tochtLocatie
     */
    public function __construct($tochtLocatie = NULL)
    {
        $this->tochtLocatie = $tochtLocatie;
    }

    public function getTochtLocatie(): mixed
    {
        return $this->tochtLocatie;
    }

    public function getAll() {

        require "../../Database/db.php";

        $sql = $conn->prepare("SELECT `tochtLocatie` FROM `donkeytravel`.`tochten`");

        $sql->execute();

        foreach ($sql as $tochten) {
            echo "<option value='". $tochten["tochtLocatie"] ."'> " . $tochten["tochtLocatie"] . "</option>";

        }
    }

    public function create()
    {
        require "../../Database/db.php";

        $tochtLocatie = $this->getTochtLocatie();

        // SQL query: voor invoer in de tabel
        $sql = $conn->prepare("INSERT INTO tochten (tochtLocatie) 
    VALUES (:tochtLocatie");

        $sql->bindParam(":tochtLocatie", $tochtLocatie);

        // SQL query: voer de query uit
        $sql->execute();

        echo "<br> De tocht is verzonden en wordt verwerkt.";
        echo "<br><br>Tocht informatie: <br>";
        echo "<br> <p class='font-bold'>Locatie van tocht</p> " . $this->getTochtLocatie();

        echo "<br><br> <a href='../../Views/home.php'>Ga terug naar de hoofdpagina</a>";
    }


    public function read()
    {
        require "../../Database/db.php";

        $sql = $conn->prepare("select * from tochten");

        $sql->execute();

        foreach ($sql as $tochten) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $tochten["tochtId"] . "</td>";
            echo "<td class='border border-black p-2'>" . $tochten["tochtLocatie"] . "</td>";

            echo "<td class='border border-black'>
                    <form action='editReservering.php' method='post'>
                        <input type='hidden' name='tochtId' value=" . $tochten["tochtId"] . ">
                        <input type='hidden' name='tochtLocatie' value=" . $tochten["tochtLocatie"] . ">
                        <input class='p-2' type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }


}