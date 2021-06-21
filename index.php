<?php

    include("inc/init.inc.php");
    include("inc/functions.inc.php");
    include("inc/head.inc.php");
    include("inc/header.inc.php");
    
    if (isset($_SESSION["is_connect"]) AND isset($_SESSION["is_connect"])==true){
        $pseudoLog = $_SESSION["pseudo"];
        echo "<h3> Bienvenu $pseudoLog </h3>";
    } 

?>

<main>Je suis la page d'accueil</main>


<?php

    include("inc/footer.inc.php");

?>