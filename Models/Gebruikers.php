<?php
// Danilio Veldhoen

namespace Models;

class Gebruikers
{
    public $id;
    public $voornaam;
    public $achternaam;
    public $email;
    public $functie;
    public $wachtwoord;

    /**
     * @param $voornaam
     * @param $achternaam
     * @param $email
     * @param $wachtwoord
     */
    public function __construct($voornaam = NULL, $achternaam = NULL, $email = NULL, $functie = NULL, $wachtwoord = NULL)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->email = $email;
        $this->functie = $functie;
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
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
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
    public function getFunctie()
    {
        return $this->functie;
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
        $voornaam = $this->getVoornaam();
        $achternaam = $this->getAchternaam();
        $email = $this->getEmail();
        $functie = 0;
        $wachtwoord = $this->getWachtwoord();

        $sql = $conn->prepare("insert into gebruikers values(:id, :voornaam, :achternaam, :email, :functie, :wachtwoord)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":voornaam", $voornaam);
        $sql->bindParam(":achternaam", $achternaam);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":functie", $functie);
        $sql->bindParam(":wachtwoord", $wachtwoord);

        $sql->execute();
        ?>

        <html lang="en">
        <br>
        <p class="text-center text-2xl">Uw account is aangemaakt.</p>
        </html>

        <?php
    }

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from gebruikers");

        $sql->execute();

        foreach ($sql as $gebruiker) {
            echo "<tr>";
            echo "<td class='border border-black'>" . $gebruiker["voornaam"] . "</td>";
            echo "<td class='border border-black'>" . $gebruiker["achternaam"] . "</td>";
            echo "<td class='border border-black'>" . $gebruiker["email"] . "</td>";
            if ($gebruiker["functie"] === "medewerker") {
                echo "<td class='border border-black'>Medewerker</td>";
            } elseif ($gebruiker["functie"] === 0) {
                echo "<td class='border border-black'>Klant</td>";
            }
            echo "<td class='border border-black'>
                    <form action='../Gebruiker/editGebruiker.php' method='post'>
                        <input type='hidden' name='id' value=" .$gebruiker["id"].">
                        <input type='hidden' name='voornaam' value=" .$gebruiker["voornaam"]. ">
                        <input type='hidden' name='achternaam' value=" .$gebruiker["achternaam"]. ">
                        <input type='hidden' name='email' value=" .$gebruiker["email"]. ">
                        <input type='hidden' name='functie' value=" .$gebruiker["functie"]. ">
                        <input type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function Update($id)
    {
        require "../../Database/database.php";

        $voornaam = $this->getVoornaam();
        $achternaam = $this->getAchternaam();
        $email = $this->getEmail();
        $functie = $this->getFunctie();

        $sql = $conn->prepare("update gebruikers set voornaam = :voornaam, achternaam = :achternaam, email = :email, functie = :functie where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":voornaam", $voornaam);
        $sql->bindParam(":achternaam", $achternaam);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":functie", $functie);
        $sql->execute();

        echo "De gebruiker is gewijzigd";
    }

    public function UpdateProfile($id)
    {
        require "../../Database/database.php";

        $voornaam = $this->getVoornaam();
        $achternaam = $this->getAchternaam();
        $email = $this->getEmail();

        $sql = $conn->prepare("update gebruikers set voornaam = :voornaam, achternaam = :achternaam, email = :email where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":voornaam", $voornaam);
        $sql->bindParam(":achternaam", $achternaam);
        $sql->bindParam(":email", $email);
        $sql->execute();

        echo "De gebruiker is gewijzigd";
    }

    public function Delete($id)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("delete from gebruikers where id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        echo "De gebruiker is verwijderd.";
    }
}