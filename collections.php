<?php
require_once "inc/functions.inc.php";





$title = "Collections";

$bannerTitle = "Toutes les collections";
$bannerPara = "Bienvenue sur notre page de produits! Ici, vous découvrirez une collection unique d’affiches conçues avec passion. Chaque affiche est une œuvre d’art, prête à apporter une touche de créativité à n’importe quel espace. Parcourez notre sélection variée et trouvez l’affiche parfaite qui reflète votre style et votre personnalité. Bon shopping!";

require_once "inc/header.inc.php";


$info = "";

$categories =  allCategories();
$colors = allColors();
$rooms = allRooms();
$products = allProducts();
$plusCher = productByPriceDesc();
$moinsCher = productByPriceAsc();
$sizes = allSizes();

if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['id_color'])) {
        $products = productByColor($_GET['id_color']);
    } else if (isset($_GET['id_category'])) {
        $products = productByCategory($_GET['id_category']);
    } else if (isset($_GET['id_room'])) {
        $products = productByRoom($_GET['id_room']);
    } else {
        $products = allProducts();
    }

    if (isset($products) && count($products) == 0) {
        $info = alert("Aucun produit trouvé pour ces critères", "secondary");
    }
}
?>

<main>
    <nav class="collectionsNav container my-3">

        <ul class="row g-3">
            <li class="col">Trier par : </li>
            <li class="nav-item dropdown border rounded col mx-3">

                <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">couleur</a>


                <ul class="dropdown-menu dropdown-menu-light">

                    <?php
                    foreach ($colors as $valueColor) {


                    ?>
                        <li class="d-flex">
                            <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>/collections.php?id_color=<?= $valueColor['id_color'] ?>"> <?= $valueColor['name'] ?> </a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown border rounded col mx-3">

                <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Taille</a>


                <ul class="dropdown-menu dropdown-menu-light">

                    <?php
                    foreach ($sizes as $size) {


                    ?>
                        <li class="d-flex">
                            <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>/collections.php?id_product=<?= $product['size'] ?>"> <?= $size ?> </a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown border rounded col mx-3">

                <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Catégorie</a>


                <ul class="dropdown-menu dropdown-menu-light">

                    <?php
                    foreach ($categories as $valueCategory) {


                    ?>
                        <li class="d-flex">
                            <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>/collections.php?id_category=<?= $valueCategory['id_category'] ?>"> <?= $valueCategory['name'] ?> </a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown border rounded col mx-3">

                <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Prix</a>


                <ul class="dropdown-menu dropdown-menu-light">

                    <li class="d-flex">
                        <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>/collections.php?id_product=<?= $plusCher ?>"> <?= "Du + cher au - cher" ?> </a>
                    </li>
                    <li class="d-flex">
                        <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>?id_product=<?= $moinsCher ?>"> <?= "Du - cher au + cher" ?> </a>
                    </li>

                    <?php

                    ?>
                </ul>
            </li>
            <li class="nav-item dropdown border rounded col mx-3">

                <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pièce</a>


                <ul class="dropdown-menu dropdown-menu-light">

                    <?php
                    foreach ($rooms as $room) {


                    ?>
                        <li class="d-flex">
                            <a class="dropdown-item text-dark fs-5" href="<?= RACINE_SITE ?>/collections.php?id_room=<?= $room['name'] ?>"> <?= $room['name'] ?> </a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </li>
        </ul>

    </nav>

    <section class="container">

        <h4 class="fw-bolder fs-5 my-5 mx-5"><span class="nbreAffiche"><?= count($products) ?></span> <?= ($message) ?? "affiches" ?></h4>

        <div class="row my-5">



            <?php
            echo $info;

            foreach ($products as $product) {
            ?>
                <div class="col-md-3 g-3">


                    <div class="card bg-light m-2 mx-auto cardProduct" style="width: 18rem;">
                        <a href="<?=RACINE_SITE."oneProduct.php?id_product=".$product['id_product']?>" class="text-dark ">
                            <img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="image de l'affiche">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title"><?= ucfirst($product['name']) ?></h4>
                                <p class="card-text fs-5 "><?= ucfirst($product['price']) ?>€</p>

                            </div>
                        </a>
                    </div>

                </div>
            <?php
            }

            if (empty($_GET)) {


            ?>

                <div class="col-12 text-center">
                    <a href="<?= RACINE_SITE ?>collections.php?voirplus" class="btn btn-light text-dark my-5 px-4 py-2 fs-5">Voir plus</a>
                </div>


            <?php

            }
            ?>
        </div>
    </section>

</main>

<?php
require_once "inc/footer.inc.php";


?>