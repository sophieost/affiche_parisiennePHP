<?php
// $title = "Accueil";
require_once "functions.inc.php";


// déconnexion ($_SESSION)
logOut();
?>


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Premier site ecommerce en php">
    <meta name="author" content="sophie & christelle">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- mon style -->
    <link rel="stylesheet" href="<?= RACINE_SITE ?>/assets/css/style.css">

    <title><?= $title ?></title>

</head>

<body>
    <header>
        <nav>
            <div class="nav-top">
                <p>Frais de ports offerts à partir de 49€ d'achat &bull; Livraison en 3-5 jours ouvrés</p>
            </div>
            <div class="nav-main">
                <div class="nav-categories">
                    <ul>
                        <li><a href="<?= RACINE_SITE ?>collections.php">COLLECTIONS</a></li>
                        <li><a href="<?= RACINE_SITE ?>cadres.php">CADRES</a></li>
                        <li><a href="<?= RACINE_SITE ?>outils.php">OUTILS</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="navbar-brand" href="<?= RACINE_SITE ?>index.php"><img src="assets/img/logo1.png" alt="" width="200"></a>
                </div>
                <div class="nav-icons">
                    <div>
                        <i class="bi bi-search"></i>
                        <input type="search" aria-label="Search">
                    </div>
                    <ul>

                        <?php if (empty($_SESSION['user'])) { ?>
                            <li><a href="<?= RACINE_SITE ?>identification.php"><i class="bi bi-person"></i></a></li>

                        <?php } else { ?>
                            <li><a href="<?= RACINE_SITE ?>profil.php"><i class="bi bi-person"></i></a></li>

                            <?php if ($_SESSION['user']['role'] == 'ROLE_ADMIN') { ?>
                                <li>
                                    <a href="<?= RACINE_SITE ?>admin/dashboard.php?dashboard_php">Backoffice</a>
                                </li>

                            <?php } ?>

                            <li>
                                <a class="text-decoration-none text-white" href="?action=deconnexion">Déconnexion</a>
                            </li>
                            <!--  -->
                        <?php } ?>


                        <li><a href="<?= RACINE_SITE ?>favoris.php"><i class="bi bi-heart"></i></a></li>

                        <li><a href="<?= RACINE_SITE ?>boutique/panier.php"><i class="bi bi-bag"></i></a></li>
                    </ul>
                </div>
            </div>
            <div id="side-bar">
                <div class="toggle-btn" id="btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div>
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/logo1.png" alt="" width="200">
                    </div>
                    <ul>
                        <li><a href="<?= RACINE_SITE ?>collections.php">COLLECTIONS</a></li>
                        <li><a href="<?= RACINE_SITE ?>cadres.php">CADRES</a></li>
                        <li><a href="<?= RACINE_SITE ?>outils.php">OUTILS</a></li>
                        <li><a href="<?= RACINE_SITE ?>authentification.php">Se connecter</a></li>
                        <li><a href="<?= RACINE_SITE ?>favoris.php">Favoris</a></li>
                        <li class="list"><a href="<?= RACINE_SITE ?>boutique/panier.php">Panier</a></li>
                    </ul>
                </div>

            </div>
        </nav>


        <section class="headBanner">
            <div>
                <h2><?= $bannerTitle ?></h2>

                <?php
                if (isset($bannerPara)) {
                    echo "<p>$bannerPara</p>";
                }

                if (isset($bannerPara2) && isset($bannerSpan)) {
                    echo "<p>$bannerPara2 <span>$bannerSpan</span></p>";
                }
                ?>

            </div>
        </section>

    </header>