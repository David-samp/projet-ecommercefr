<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    include("inc/header.inc.php");

?>

    <main>
        <h2>Formulaire d'inscription</h2>
        <form action="" method="post" class="container m-auto">
            <div class="conteneurPseudo mb-3 row">
                <label class="form-label" for="pseudo">Pseudo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="pseudo" id="pseudo" required>
                </div>
            </div>
            <div class="conteneurNom mb-3 col-4">
                <label class="form-label" for="nom">Nom</label>
                <input class="form-control" type="text" name="nom" id="nom" required>
            </div>
            <div class="conteneurPrenom mb-3 col-4">
                <label class="form-label" for="prenom">Prenom</label>
                <input class="form-control" type="text" name="prenom" id="prenom" required>
            </div>
            <div class="conteneurEmail mb-3 col-4">
                <label class="form-label" for="mail">Email</label>
                <input class="form-control" type="email" name="mail" id="mail" required>
            </div>
        </form>
    </main>

<?php

    include("inc/footer.inc.php");

?>