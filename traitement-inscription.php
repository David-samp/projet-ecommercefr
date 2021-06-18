<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    
    $pseudo = "";
    $nom = "";
    $prenom = "";
    $mail = "";
    $mdp = "";
    $confirmMdp = "";
    $photo = "";
    $adresse = "";
    $cp = "";
    $ville = "";
    $genre = "";
    $role = 0;

    if (!empty($_POST)) {
        $pseudo = $_POST["pseudo"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $confirmMdp = $_POST["confirmmdp"];
        $photo = $_POST["photo"];
        $adresse = $_POST["adresse"];
        $cp = $_POST["cp"];
        $ville = $_POST["ville"];
        $genre = $_POST["genre"];
    } else {

        header("location:incrisptiion.php?message=erreur")
        ?>
        <div class="container">
            <p>Une erreur est survenue</p>
            <form action="<?= URL; ?>inscription.php" method="post">
                <button type="submit" class="btn btn-primary">Retour</button>
            </form>
        </div>

        <?php
    };
    

    if ($confirmMdp == $mdp) {
            debug($_POST);
            $enregistrement = $pdo->prepare("INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $enregistrement->execute(
            [$pseudo, $nom, $prenom, $mail, $mdp, $photo, $ville, $cp, $adresse, $genre, $role]
            );
            ?>
            <div class="container">
                <p>Inscription reussie!</p>
                <form action="<?= URL; ?>connexion.php" method="">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
            <?php
        } else {
            ?>
            <div class="container">
                <p>Les mots de passe ne correspondent pas</p>
                <form action="<?= URL; ?>inscription.php" method="post">
                    <button type="submit" class="btn btn-primary">Retour</button>
                </form>
            </div>
            <?php
        };
    
?>