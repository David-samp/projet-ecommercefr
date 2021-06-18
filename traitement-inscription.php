<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    include("inc/header.inc.php");
    
    debug($_POST);
    if (!empty($_POST)) {
        if (testInput($_POST["pseudo"],20)) {
            $pseudo = $_POST["pseudo"];
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère du pseudo ne correspond pas");
        };
        if (testInput($_POST["nom"],30)) {
            $nom = $_POST["nom"];
        }else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du nom ne correspond pas");
        };
        if (testInput($_POST["prenom"],30)) {
            $prenom = $_POST["prenom"];
         }else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du prenom ne correspond pas");
        };
        if (testInput($_POST["mail"],50)) {
            $mail = $_POST["mail"];
        } else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du mail ne correspond pas");
        };
        if (testInput($_POST["mdp"],150)) {
            $mdp = $_POST["mdp"];
        }else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du mdp ne correspond pas");
        };
        if (testInput($_POST["photo"],150)) {
            $photo = $_POST["photo"];
        }else if ($_POST["photo"] == "") {
            $photo = "";
        }else {
            header("Location:". URL . "inscription.php?message=Le nom du fichier est trop grand");
        };
        if (testInput($_POST["ville"],150)) {
            $ville = $_POST["ville"];
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère de la ville ne correspond pas");
        };
        if (testInput($_POST["cp"],5)) {
            $cp = $_POST["cp"];
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère du code postale ne correspond pas");
        };
        if (testInput($_POST["adresse"],50)) {
            $adresse = $_POST["adresse"];
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère de l'adresse ne correspond pas");
        };
        $genre = $_POST["genre"];
        $role = 0;
        $confirmMdp = $_POST["confirmmdp"];
    };
    

    if ($confirmMdp === $mdp) {
            // debug($_POST);
            $enregistrement = $pdo->prepare("INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $enregistrement->execute(
            [$pseudo, $nom, $prenom, $mail, $mdp, $photo, $ville, $cp, $adresse, $genre, $role]);
            header("Location:". URL . "Connexion.php?signal=successlog");
        
        } else {
            header("Location:". URL . "inscription.php?signal=errormdp");
        };
    
?>