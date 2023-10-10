<?php
// Danilio Veldhoen

namespace Models;

class Gebruikers
{
    public $id;
    public $naam;
    public $email;
    public $wachtwoord;

    /**
     * @param $naam
     * @param $email
     * @param $wachtwoord
     */
    public function __construct($naam = NULL, $email = NULL, $wachtwoord = NULL)
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }


    public function create()
    {
        // Dit zorgt ervoor dat het in de database komt te staan
        require "../../Database/database.php";

        $id = NULL;
        $naam = $this->getNaam();
        $email = $this->getEmail();
        $wachtwoord = $this->getWachtwoord();

        $sql = $conn->prepare("insert into gebruikers values(:id, :naam, :email, :wachtwoord)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":wachtwoord", $wachtwoord);

        $sql->execute();
        ?>

        <html lang="en">
        <br>
        <p class="text-center text-2xl">De gebruiker is toegevoegd.</p>
        </html>

        <?php
    }
}