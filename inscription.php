<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    if (isset($_GET["message"]) AND $_GET["message"] == "req-fail"){
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        La requete a échoué, vous n'avez pas été ajouté à la base de donnée.
    </div>";
    } else if (isset($_GET["message"]) AND $_GET["message"] == "error-mdp"){
        $retourMsg = $_GET["message"];
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        $retourMsg
    </div>";
    } else if (isset($_GET["message"])){
        $retourMsg = $_GET["message"];
        $msg = "<div class=\"alert alert-danger w-50 mx-auto m-5 \" role=\"alert\">
        $retourMsg
    </div>";
        
    }

    
    include("inc/head.inc.php");
    include("inc/header.inc.php");

?>

    <main class="container">
        <h2 class="mb-3">Formulaire d'inscription</h2>
            <form enctype="multipart/form-data" action="<?= URL; ?>traitement-inscription.php" method="post">
                <div class="conteneurPseudo d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="pseudo">Pseudo :</label>
                    <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="20 caractères maximum" <?php 
                    if (testCookie("pseudo")) {
                        ?>value='<?= $_COOKIE['pseudo'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurNom d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="nom">Nom :</label>
                    <input class="form-control" type="text" name="nom" id="nom" placeholder="30 caractères maximum" <?php 
                    if (testCookie("nom")) {
                        ?>value='<?= $_COOKIE['nom'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurPrenom d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="prenom">Prenom :</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" placeholder="30 caractères maximum"<?php 
                    if (testCookie("prenom")) {
                        ?>value='<?= $_COOKIE['prenom'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurEmail d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="mail">Email :</label>
                    <input class="form-control" type="email" name="mail" id="mail" placeholder="50 caractères maximum"<?php 
                    if (testCookie("mail")) {
                        ?>value='<?= $_COOKIE['mail'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurMdp d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="mdp">Mot de passe :</label >
                    <input class="form-control" type="password" name="mdp" id="mdp" placeholder="150 caractères maximum">
                </div>
                <div class="conteneurConfirmMdp d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="confirmmdp">Confirmer mot de passe :</label>
                    <input class="form-control" type="password" name="confirmmdp" id="confirmmdp" placeholder="150 caractères maximum">
                </div>
                <div class="conteneurPhoto d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="photo">Photo de profil :</label>
                    <input class="form-control" type="file" name="photo" id="photo" value="" placeholder="150 caractères maximum">
                </div>
                <div class="conteneurAdresse d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="adresse">Adresse :</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" placeholder="50 caractères maximum"<?php 
                    if (testCookie("adresse")) {
                        ?>value='<?= $_COOKIE['adresse'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurCp d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="cp">Code postale :</label>
                    <input class="form-control" type="text" name="cp" id="cp" placeholder="5 caractères maximum"<?php 
                    if (testCookie("cp")) {
                        ?>value='<?= $_COOKIE['cp'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurVille d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="ville">Ville :</label>
                    <input class="form-control" type="text" name="ville" id="ville" placeholder="150 caractères maximum" <?php 
                    if (testCookie("ville")) {
                        ?>value='<?= $_COOKIE['ville'] ;?>'<?php 
                    }; ?>>
                </div>
                <div class="conteneurGenre d-flex align-items-center col-6 mb-3">
                    <label class="form-label col-4 me-3" for="genre">Genre :</label>
                    <select class="form-select" name="genre" id="genre">
                        <option value="nb">Choisissez :</option>
                        <option value="f">Feminin</option>
                        <option value="m">Masculin</option>
                        <option value="nspp">Ne se prononce pas</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
    </main>

<?php

    include("inc/footer.inc.php");
    
?>