<?php

    include("../inc/init.inc.php");
    include("../inc/functions.inc.php");
    include("../inc/head.inc.php");
    include("../inc/header.inc.php");
    if (isset($_SESSION["is_connect"]) AND isset($_SESSION["is_connect"])==true){
        $pseudoInfo = $_SESSION["pseudo"];
        $rechercheInfo = $pdo->prepare("SELECT pseudo, nom, prenom, email, photo, ville, code_postal ,adresse, role FROM user");
        $retourInfo = $rechercheInfo->execute([]);
        
    };
?>
<main>
    <h2 class="text-center">LISTE USER</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Ville</th>
                <th>Code Postale</th>
                <th>Adresse</th>
                <th>Role</th>
                <th>Delete?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($retourInfo){
                while ($infosProfil = $rechercheInfo->fetch(PDO::FETCH_ASSOC)) {
                    
                    ?>
                    <tr>
                        <?php
                        foreach ($infosProfil as $key => $value) {
                            ?>
                            
                            <td><?=$value?></td>
                            
                            
                    <?php   
                        
                    };
                    ?>  
                        <td class="text-center"><button href><a href="<?= URL ?>admin/delete.php?action=<?=$infosProfil["pseudo"]?>">X</a></button></td>
                    </tr> <?php
                };
            }
            ?>
</main>

<?php

    include("../inc/footer.inc.php");

?>