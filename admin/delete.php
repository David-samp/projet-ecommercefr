<?php

    include("../inc/init.inc.php");
    include("../inc/functions.inc.php");

    if(isset($_GET["action"])){
        $pseudoADelete = $_GET["action"];
        echo $pseudoADelete; 
        
        $enregistrement = $pdo->prepare("DELETE FROM `user` WHERE pseudo=?");
            $resultat = $enregistrement->execute(
            [$pseudoADelete]);
            if ($resultat) {
                header("Location:". URL . "admin/index.php?message=inscr-success");
            } else {
                header("location:" . URL . "admin/index.php?message=req-fail");
                exit();
            };
    }

?>