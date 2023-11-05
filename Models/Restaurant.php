<?php
//

namespace Models;

class Restaurant
{
    public $id;

    public $naam;
    public $locatie;

    /**
     * @param $naam
     * @param $locatie
     */
    public function __construct($naam  = NULL, $locatie = NULL)
    {
        $this->naam = $naam;
        $this->locatie = $locatie;
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
    public function create()
    {
        // Dit zorgt ervoor dat het in de database komt te staan
        require "../../Database/database.php";

        $id = NULL;
        $naam = $this->getNaam();
        $locatie = $this->getLocatie();


        $sql = $conn->prepare("insert into restaurants values(:id, :naam, :locatie)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":locatie", $locatie);


        $sql->execute();

        header("refresh:3;url=gastReserveringen.php");
        ?>

        <html lang="en">
        <br>
        <p class="text-center text-2xl">Locatie is aangemaakt.</p>
        </html>

        <?php
    }

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from restaurants");

        $sql->execute();

        foreach ($sql as $restaurants) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $restaurants["id"] . "</td>";
            echo "<td class='border border-black p-2'>" . $restaurants["naam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $restaurants["locatie"] . "</td>";
            echo "<td class='border border-black'>
                    <form action='../Restaurant/editRestaurant.php' method='post'>
                        <input type='hidden' name='restaurant' value=" .$restaurants["id"].">
                        <input type='hidden' name='naam' value=" .$restaurants["naam"]. ">
                        <input type='hidden' name='locatie' value=" .$restaurants["locatie"]. ">
                        <input class='p-2   ' type='submit' value='Edit'>
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

        $sql = $conn->prepare("update restaurants set naam = :naam, locatie = :locatie where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":locatie", $locatie);
        $sql->execute();

        echo "Deze locatie is gewijzigd";
    }

    public function updateProfile($id)
    {
        require "../../Database/database.php";

        $naam = $this->getNaam();
        $locatie = $this->getLocatie();


        $sql = $conn->prepare("update restaurant set naam = :naam, locatie = :locatie where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":locatie", $locatie);
        $sql->execute();

        echo "Deze locatie is gewijzigd";
    }

    public function delete($id)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("delete from restaurant where id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        echo "Dit Restaurant is verwijderd.";
    }
}