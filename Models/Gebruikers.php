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

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from gebruikers");

        $sql->execute();

        foreach ($sql as $gebruiker) {
            echo "<tr>";
            echo "<td class='border border-black'>" . $gebruiker["naam"] . "</td>";
            echo "<td class='border border-black'>" . $gebruiker["email"] . "</td>";
            echo "<td class='border border-black'>
                    <form action='#' method='post'>
                        <input type='hidden' name='id' value=" .$gebruiker["id"].">
                        <input type='hidden' name='naam' value=" .$gebruiker["naam"]. ">
                        <input type='hidden' name='email' value=" .$gebruiker["email"]. ">
                        <input type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function Update($id)
    {
        require "../../Database/database.php";

        $naam = $this->getNaam();
        $email = $this->getEmail();

        $sql = $conn->prepare("update gebruikers set naam = :naam, email = :email where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
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