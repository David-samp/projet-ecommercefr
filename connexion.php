<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (isset($_GET["message"]) AND $_GET["message"] == "inscr-success"){
        $msg = "<div class=\"alert alert-success w-50 mx-auto m-5 \" role=\"alert\">
        Vous avez bien été ajouté à la liste des utilisateurs !
        </div>";
    } else if (isset($_GET["message"]) AND $_GET["message"] == "erreur-connexion") {
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Votre pseudo ou votre mot de passe est inconnu 
        </div>";
    }else if (isset($_GET["message"]) AND $_GET["message"] == "erreur-requete") {
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        Veuillez vous reconnecter
        </div>";
    } 

    include("inc/head.inc.php");
    include("inc/header.inc.php");
    $pseudo = "";  
    $mdp = "";
    $url = "";

    if (!empty($_POST)) {
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];
        $enregistrement = $pdo->prepare("SELECT pseudo FROM user WHERE pseudo=? AND mdp=?");
        $resultat = $enregistrement ->execute(
            [$pseudo,$mdp]
        );
    }
?>

<main>
    <div class="container">
    <h2>Connexion :</h2>
        <form action="" method="post">
                <div class="conteneurPseudo d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="pseudo">Pseudo :</label>
                    <input class="form-control" type="text" name="pseudo" id="pseudo" required>
                </div>
                <div class="conteneurMdp d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="mdp">Mot de passe :</label>
                    <input class="form-control" type="password" name="mdp" id="mdp" required>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</main>

<?php
    if (isset($resultat)){
        if ($resultat AND $enregistrement->rowCount() != 0){
            $url = URL . "index.php";
            header('Location:' .$url );
            $_SESSION["is_connect"]=true;
            $_SESSION["pseudo"]= $pseudo;
        }else{
            header("Location:". URL . "Connexion.php?message=erreur-connexion");
        };
    };
    include("inc/footer.inc.php");

?>