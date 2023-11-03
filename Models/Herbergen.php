<?php
//

namespace Models;

class Herbergen
{
    public $id;
    public $naam;
    public $locatie;
    public $sterren;

    /**
     * @param $naam
     * @param $locatie
     */
    public function __construct($naam  = NULL, $locatie = NULL, $sterren = NULL)
    {
        $this->naam = $naam;
        $this->locatie = $locatie;
        $this->sterren = $sterren;
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
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * @return string
     */
    public function getSterren()
    {
        return $this->sterren;
    }

    /**
     * @return string
     */
    public function create()
    {
        // Dit zorgt ervoor dat het in de database komt te staan
        require "../../Database/database.php";

        $id = NULL;
        $naam = $this->getNaam();
        $locatie = $this->getLocatie();
        $sterren = $this->getSterren();


        $sql = $conn->prepare("insert into herbergen values(:id, :naam, :locatie, :sterren)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":locatie", $locatie);
        $sql->bindParam(":sterren", $sterren);


        $sql->execute();
        ?>

        <html lang="en">
        <br>
        <p class="text-center text-2xl">Herberg is aangemaakt.</p>
        </html>

        <?php
    }

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from herbergen");

        $sql->execute();

        foreach ($sql as $herberg) {
            echo "<tr>";
            echo "<td class='border border-black'>" . $herberg["naam"] . "</td>";
            echo "<td class='border border-black'>" . $herberg["locatie"] . "</td>";
            echo "<td class='border border-black'>" . $herberg["sterren"] . "</td>";
            echo "<td class='border border-black'>
                    <form action='../Herberg/editHerberg.php' method='post'>
                        <input type='hidden' name='id' value=" .$herberg["id"].">
                        <input type='hidden' name='naam' value=" .$herberg["naam"]. ">
                        <input type='hidden' name='locatie' value=" .$herberg["locatie"]. ">
                        <input type='hidden' name='sterren' value=" .$herberg["sterren"]. ">
                        <input type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function update($id)
    {
        require "../../Database/database.php";

        $naam = $this->getNaam();
        $locatie = $this->getLocatie();
        $sterren = $this->getSterren();

        $sql = $conn->prepare("update herbergen set naam = :naam, locatie = :locatie, sterren = :sterren where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":locatie", $locatie);
        $sql->bindParam(":sterren", $sterren);
        $sql->execute();

        echo "Deze herberg is gewijzigd";
    }

    public function delete($id)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("delete from herbergen where id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        echo "Deze herberg is verwijderd.";
    }
}