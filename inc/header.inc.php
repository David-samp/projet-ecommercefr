<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URL; ?>">E-commerce en PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php 
                        if (isset($_SESSION["is_connect"]) AND $_SESSION["is_connect"]==true){
                            $pseudoLog = $_SESSION["pseudo"];
                            echo "
                                <li class=\"nav-item\">
                                <a class=\"nav-link\" href="?><?= URL . "profil.php";?><?php echo ">Profil</a>
                                </li>
                                <li class=\"nav-item\">
                                <a class=\"nav-link\" href="?><?= URL . "produit.php";?><?php echo ">Produit</a>
                                </li>"
                            ?>
                            <?php 
                                $rechercheRole = $pdo->prepare("SELECT pseudo FROM user WHERE pseudo=? AND role=1");
                                $roleAdmin = $rechercheRole->execute([$pseudoLog]);
                                if ($roleAdmin AND $rechercheRole->rowCount() != 0) {
                                    echo "<li class=\"nav-item\">
                                    <a class=\"nav-link\" href="?><?= URL . "admin";?><?php echo ">Administration</a>
                                    </li>";
                                };
                            ?>
                                <li class="nav-item">
                                <a class="nav-link" href='?action=deconnexion'>Se déconnecter</a>
                                </li>
                            </ul>
                            <a class="navbar-text"><?=$pseudoLog . " "?>
                            <?php 
                                $recherchePhoto = $pdo->prepare("SELECT photo FROM user WHERE pseudo=?");
                                $photo = $recherchePhoto->execute([$pseudoLog]);
                                $infoPhoto=$recherchePhoto->fetch(PDO::FETCH_ASSOC);
                                if (!empty($infoPhoto["photo"])) {
                                
                                
                                    ?>
                                    <img src="<?=URL;?>assets/imgs/<?=$infoPhoto["photo"]?>" alt="" width="30" height="30" class="m-1" >
                                    <?php
                                }
                            ?>
                            </a>
                            
                            <?php
                        } else {
                            echo "
                                <li class=\"nav-item\">
                                <a class=\"nav-link\" href="?><?= URL . "inscription.php"; ?><?php echo ">Inscription</a>
                                </li>
                                <li class='nav-item'>
                                <a class='nav-link' href="?><?= URL . "connexion.php"; ?><?php echo ">Connexion</a>
                                </li>
                            </ul>";
                        };
                    ?>          
            </div>
        </div>
    </nav>
</header>
<div class="message"><?= $msg ?></div>