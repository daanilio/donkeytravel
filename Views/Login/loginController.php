<?php
// Danilio Veldhoen
session_start();
include "../../Database/loginDatabase.php";

if (isset($_POST['email']) && isset($_POST['wachtwoord'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $wachtwoord = md5($wachtwoord);

    if (empty($email)) {
        header("Location: login.php?error=Gebruikersnaam niet ingevuld");
        exit();
    } else if (empty($wachtwoord)) {
        header("Location: login.php?error=Wachtwoord niet ingevuld");
        exit();
    } else {
        $sql = "SELECT * FROM gebruikers WHERE email='$email' AND wachtwoord='$wachtwoord'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['wachtwoord'] === $wachtwoord) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['voornaam'] = $row['voornaam'];
                $_SESSION['achternaam'] = $row['achternaam'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: login.php?error=Ongeldige email of wachtwoord");
                exit();
            }
        } else {
            header("Location: login.php?error=Ongeldige email of wachtwoord");
            exit();
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}


