<?php
//page d'accueil 
session_start();

// affichage de l'utilisateur qui se connect
echo 'welcome ' . $_SESSION["username"];

// partie de deconnexion  d'un utilisateur
if (isset($_POST['logout'])) {
    session_destroy();
    header("location:login.php");
    exit;
}
?>
<br>
<br>
<form action="" method="post">
    <input type="submit" name="logout" value="Déconnexion">
</form>