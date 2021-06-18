<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");

    // Si get message qui existe et qu'il est egal a erreur
    // $msg= "mon message d'erreur

    include("inc/head.inc.php");
    include("inc/header.inc.php");

?>

    <main class="container">
        <h2 class="mb-3">Formulaire d'inscription</h2>
            <form action="<?= URL; ?>traitement-inscription.php" method="post">
                <div class="conteneurPseudo d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="pseudo">Pseudo :</label>
                    <input class="form-control" type="text" name="pseudo" id="pseudo" required>
                </div>
                <div class="conteneurNom d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="nom">Nom :</label>
                    <input class="form-control" type="text" name="nom" id="nom" required>
                </div>
                <div class="conteneurPrenom d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="prenom">Prenom :</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" required>
                </div>
                <div class="conteneurEmail d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="mail">Email :</label>
                    <input class="form-control" type="email" name="mail" id="mail" required>
                </div>
                <div class="conteneurMdp d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="mdp">Mot de passe :</label>
                    <input class="form-control" type="password" name="mdp" id="mdp" required>
                </div>
                <div class="conteneurConfirmMdp d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="confirmmdp">Confirmer mot de passe :</label>
                    <input class="form-control" type="password" name="confirmmdp" id="confirmmdp" required>
                </div>
                <div class="conteneurPhoto d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="photo">Photo de profil :</label>
                    <input class="form-control" type="file" name="photo" id="photo" value="">
                </div>
                <div class="conteneurAdresse d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="adresse">Adresse :</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" required>
                </div>
                <div class="conteneurCp d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="cp">Code postale :</label>
                    <input class="form-control" type="text" name="cp" id="cp" required>
                </div>
                <div class="conteneurVille d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="ville">Ville :</label>
                    <input class="form-control" type="text" name="ville" id="ville" required>
                </div>
                <div class="conteneurGenre d-flex align-items-center col-4 mb-3">
                    <label class="form-label col-3 me-3" for="genre">Genre :</label>
                    <select name="genre" id="genre">
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