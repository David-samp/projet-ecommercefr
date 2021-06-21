<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    include("inc/header.inc.php");

    if (isset($_SESSION["is_connect"]) AND isset($_SESSION["is_connect"])==true){
        $pseudoInfo = $_SESSION["pseudo"];
        $rechercheInfo = $pdo->prepare("SELECT pseudo, nom, prenom, email, mdp, photo, ville, code_postal ,adresse FROM user WHERE pseudo=? LIMIT 1");
        $retourInfo = $rechercheInfo->execute([$pseudoInfo]);
        if ($retourInfo) {
            while ($infosProfil = $rechercheInfo->fetch(PDO::FETCH_ASSOC)) {
                //debug($infosProfil);
                foreach ($infosProfil as $key => $value) {
                    echo "<p>$key: $value</p>";
                }
                

            
            };
        } else {
            header("Location:". URL . "connexion.php?message=erreur-requete");
        }
    } 
?>

<?php

    include("inc/footer.inc.php");

?>