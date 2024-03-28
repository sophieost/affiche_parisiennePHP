<?php
require_once "inc/functions.inc.php";





$title = "Page produit";

$bannerTitle = "En savoir plus sur cette affiche";


require_once "inc/header.inc.php";


$info = "";


if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['id_product'])) {
        $products = showProduct($_GET['id_product']);

        $idProduct = $_GET['id_product'];
        $product = showProduct($idProduct);
    }
}


?>



<main>

    <section class="row my-5">

        <div class="images-produit col-md-7">
            <h2 class="card-title m-5"><?= ucfirst($product['name']) ?></h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="d-flex flex-column">
                        <div class="card bg-light mx-5 my-2" style="width: 11rem;"><img src="<?= RACINE_SITE . "assets/img/logo2.png" ?>" alt="logo affiche parisienne"></div>


                        <div class="card bg-light mx-5 my-2" style="width: 11rem;"><img src="<?= RACINE_SITE . "assets/img/logo2.png" ?>" alt="logo affiche parisienne"></div>


                        <div class="card bg-light mx-5 my-2" style="width: 11rem;"><img src="<?= RACINE_SITE . "assets/img/logo2.png" ?>" alt="logo affiche parisienne"></div>
                    </div>
                </div>

                <div class="col-md-8">
                    <?php
                    echo $info;

                    ?>
                    <div class="col-md-3 g-3">


                        <div class="card bg-light m-2 mx-auto" style="width: 25rem;">
                            <img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="image de l'affiche">

                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div class="col-md-4 d-flex flex-column infos-produit">

            <h3 class="card-text fs-5 fw-bold my-5"><?= ucfirst($product['price']) ?>€</h3>
            <form action="" method="">
                <div class="mt-3">
                    <label for="size" class="fw-bold">Taille</label>
                    <select name="size" id="size" class="form-select mt-3">
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="frame" class="fw-bold">Cadre</label>
                    <select name="frame" id="frame" class="form-select mt-3">
                        <option value="oak">Chêne</option>
                        <option value="black">Noir</option>
                        <option value="white">Blanc</option>
                    </select>
                </div>

                <div class="d-flex flex-column my-3">

                    <label for="quantity" class="fw-bold">Quantité</label>
                    <div class="mt-3">
                        <button class="value-control" onclick="numberInput.stepDown()" title="Decrease value" aria-label="Decrease value">-</button>

                        <input class="value-input " type="number" value="1" name="numberInput" id="numberInput">

                        <button class="value-control" onclick="numberInput.stepUp()" title="Increase value" aria-label="Increase value">+</button>
                    </div>
                </div>

                <button type="submit" class="w-100 p-3 mt-3 productBtn">Ajouter au <i class="bi bi-bag"></i></button>
            </form>

            <div class="dropdown mt-3 w-100">
                <button class="btn btn-light dropdown-toggle w-100" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Détails du produit
                </button>

                <div class="dropdown-menu w-100">
                    <p class="dropdown-item">Action</p>

                </div>
            </div>

            <div class="dropdown mt-3 w-100">
                <button class="btn btn-light dropdown-toggle w-100" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Livraisons et retours
                </button>

                <div class="dropdown-menu w-100 overflow-auto p-3">
                    <p class="dropdown-item">Nous expédions toutes les commandes dans un <br>délai de 1 à 3 jours ouvrables.</p>

                    <p> Certains pays, villes éloignées ou îles peuvent avoir des délais de livraison plus longs. </p>


                    <p> Veuillez nous contacter si vous avez besoin d'un délai de livraison plus précis pour votre pays/ville.
                    </p>

                </div>
            </div>





        </div>

    </section>

</main>


<?php
require_once "inc/footer.inc.php";


?>