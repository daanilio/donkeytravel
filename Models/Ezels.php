<?php
//

namespace Models;

class Ezels
{
    public $id;
    public $naam;
    public $leeftijd;

    /**
     * @param $naam
     * @param $leeftijd
     */
    public function __construct($naam  = NULL, $leeftijd = NULL)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
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
    public function getLeeftijd()
    {
        return $this->leeftijd;
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
        $leeftijd = $this->getLeeftijd();


        $sql = $conn->prepare("insert into ezels values(:id, :naam, :leeftijd)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":leeftijd", $leeftijd);


        $sql->execute();
        ?>

        <html lang="en">
        <br>
        <p class="text-center text-2xl">Ezel is aangemaakt.</p>
        </html>

        <?php
    }

    public function read()
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("select * from ezels");

        $sql->execute();

        foreach ($sql as $ezel) {
            echo "<tr>";
            echo "<td class='border border-black p-2'>" . $ezel["naam"] . "</td>";
            echo "<td class='border border-black p-2'>" . $ezel["leeftijd"] . "</td>";
            echo "<td class='border border-black p-2'>
                    <form action='../Ezel/editEzel.php' method='post'>
                        <input type='hidden' name='ezelId' value=" .$ezel["id"].">
                        <input type='hidden' name='naam' value=" .$ezel["naam"]. ">
                        <input type='hidden' name='leeftijd' value=" .$ezel["leeftijd"]. ">
                        <input class='w-full' type='submit' value='Edit'>
                    </form>
                </td>";
            echo "</tr>";
        }
    }

    public function update($id)
    {
        require "../../Database/database.php";

        $naam = $this->getNaam();
        $leeftijd = $this->getLeeftijd();

        $sql = $conn->prepare("update ezels set naam = :naam, leeftijd = :leeftijd where id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":leeftijd", $leeftijd);
        $sql->execute();

        echo "Deze ezel is gewijzigd";
    }

    public function delete($id)
    {
        require "../../Database/database.php";

        $sql = $conn->prepare("delete from ezels where id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        echo "Deze ezel is verwijderd.";
    }
}