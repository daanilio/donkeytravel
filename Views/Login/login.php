<?php
session_start();

if (isset($_SESSION['id']) && $_SESSION['email']) {
    header("Location: ../index.php");
} else {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" type="image/jpg" href=""/>
</head>
<body>
    <form action="loginController.php" method="post">
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='text-red-500'>" . $_GET['error'] . "</p>";
        }
        ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" id="wachtwoord">

        <a href="registreer.php">Nog geen account? Maak er 1 aan.</a>
        <input type="submit">
    </form>
</body>
</html>
<?php
}