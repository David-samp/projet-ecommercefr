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
// @return true | false
function testInput($listeTest, $nbrCaractere) {
    if (strlen($listeTest)>=4 AND strlen($listeTest)<=$nbrCaractere) {
        return true;
    } else {
        return false;
    };
}


// La fonction testCookie sert a verifier si un cookie existe
// @param array $cookie
// @return true | false
function testCookie($cookie) {
    if (isset($_COOKIE["$cookie"])) {
        return true;
    } else {
        return false;
    };
};


function userIsConnect(){
    if (isset($_SESSION["pseudo"])){
        return true;
    } else {
        return false;
    };

}
?>