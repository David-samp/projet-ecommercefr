# Création d'une base de données que l'on appelle ecommerce_php, puis création d'une premiere table User

    -> id_user - int(4) -> Clé primaire (auto-indentation)
    -> pseudo - varchar(20) - unique
    -> nom - varchar(30)
    -> prenom - varchar(30)
    -> email - varchar(50)
    -> mdp - varchar(150)
    -> photo - varchar(150)
    -> ville - varchar(50)
    -> code_postal - int(5) - unsigned zerofill
    -> adresse - varchar(50)
    -> genre - enum("m","f","nb")
    -> role - int(1) - defaut 0


# Etablissement de l'architecture du projet

    -> On crée notre page index.php
    -> On crée notre inc, qui contiendra toutes les inclusions
        -> init.inc.php/functions.inc.php/head.inc.php/header.inc.php/footer.inc.php
    -> On crée notre dossier assets avec
        -> Un dossier css qui contient style.css
        -> Un dossier js qui contient script.js
        -> un dossier images qui contient toutes nos images


