<?php

// La fonction debug sert a renvoyer l'echo print_r d'une liste passée en argument
// @param array $listeADebugger
// @return null
function debug(array $listeADebugger){
    echo "<pre>";
    print_r($listeADebugger);
    echo "</pre>";
};


// La fonction testInput sert a verifier si le pseudo rempli certains criteres
// @param array $listeTest, $nbrCaractere
// @return null
function testInput($listeTest, $nbrCaractere) {
    if (strlen($listeTest)>=4 AND strlen($listeTest)<=$nbrCaractere) {
        return true;
    } else {
        return false;
    };
}

?>