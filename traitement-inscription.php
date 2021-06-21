<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    include("inc/header.inc.php");
    
    debug($_POST);
    if (!empty($_POST)) {
        if (testInput($_POST["pseudo"],20)) {
            $pseudo = $_POST["pseudo"];
            setcookie("pseudo", "$pseudo", time()+30);
            $recherchePseudo = $pdo->prepare("SELECT pseudo FROM user WHERE pseudo=?");
            $retour = $recherchePseudo->execute([$pseudo]);
            if ($resultat) {
                $pseudo = $_POST["pseudo"];
            } else {
                header("Location:". URL . "inscription.php?message=Ce pseudo n'est pas disponible");
            }
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère du pseudo ne correspond pas");
        };
        if (testInput($_POST["nom"],30)) {
            $nom = $_POST["nom"];
            setcookie("nom", "$nom", time()+30);
        }else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du nom ne correspond pas");
        };
        if (testInput($_POST["prenom"],30)) {
            $prenom = $_POST["prenom"];
            setcookie("prenom", "$prenom", time()+30);
        }else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du prenom ne correspond pas");
        };
        if (testInput($_POST["mail"],50)) {
            $mail = $_POST["mail"];
            setcookie("mail", "$mail", time()+30);
        } else {
            header("Location:" . URL . "inscription.php?message=Le nombre de caractère du mail ne correspond pas");
        };
        if (testInput($_POST["mdp"],150)) {
            $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
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
            setcookie("ville", "$ville", time()+30);
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère de la ville ne correspond pas");
        };
        if (testInput($_POST["cp"],5)) {
            $cp = $_POST["cp"];
            setcookie("cp", "$cp", time()+30);
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère du code postale ne correspond pas");
        };
        if (testInput($_POST["adresse"],50)) {
            $adresse = $_POST["adresse"];
            setcookie("adresse", "$adresse", time()+30);
        }else {
            header("Location:". URL . "inscription.php?message=Le nombre de caractère de l'adresse ne correspond pas");
        };
        $genre = $_POST["genre"];
        $role = 0;
        $confirmMdp = $_POST["confirmmdp"];
        if ($confirmMdp === $_POST["mdp"]) {
            // debug($_POST);
            $enregistrement = $pdo->prepare("INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $resultat = $enregistrement->execute(
            [$pseudo, $nom, $prenom, $mail, $mdp, $photo, $ville, $cp, $adresse, $genre, $role]);
            if ($resultat) {
                header("Location:". URL . "Connexion.php?message=inscr-success");
            } else {
                header("location:" . URL . "inscription.php?message=req-fail");
                exit();
            };
        } else {
            header("Location:". URL . "inscription.php?message=errormdp");
        };
    };
    

    
    
?>