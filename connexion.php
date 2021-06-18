<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
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
            $url = URL . "index.php?pseudo=$pseudo";
            header('Location:' .$url );
        }else{
            echo "<p>Votre pseudo ou votre mot de passe est inconnu</p>";
        };
    };
    include("inc/footer.inc.php");

?>