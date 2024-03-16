<?php

require_once "../inc/functions.inc.php";

if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "identification.php");
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header("location:" . RACINE_SITE . "index.php");
    }
}


// **********************************************//
if (isset($_GET['action']) && isset($_GET['id_product'])) {

    if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id_product'])) {

        $idProduct = $_GET['id_product'];
        $product = showProduct($idProduct);
    }
}

if (isset($_GET['action']) && isset($_GET['id_product'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id_product'])) {

        $idCategory = $_GET['id_product'];
        $category = deleteProduct($idCategory);
    }
}

// ///////////////////////////////////////////////////

$info = '';

if (!empty($_POST)) {
    // debug($_POST);

    $verif = true;

    foreach ($_POST as $value) {

        if (empty(trim($value))) {
            $verif = false;
        }
    }

    // la superglobal $_FILES a un indice "image" qui correspond au "name" de l'input type="file" du formulaire, ainsi qu'un indice "name" qui contient le nom du fichier en cours de téléchargement.

    if (!empty($_FILES['image']['name'])) { // si le nom du fichier en cours de téléchargement n'est pas vide, alors c'est qu'on est entrain de télécharger une photo
        // debug($_FILES);

        $image = 'img/' . $_FILES['image']['name']; // $image contient le chemin relatif de la photo et sera enregistré en BDD. On utilise ce chemin pour les "src" des balises <img>.

        copy($_FILES['image']['tmp_name'], '../assets/' . $image);

        // On enregistre le fichier image qui se trouve à l'adresse contenue dans $_FILES['image']['tmp_name'] vers la destination qui est le dossier "img" à l'adresse "../assets/nom_du_fichier.jpg".

    }

    if (!$verif || empty($image)) {
        $info = alert("Tous les champs sont sont requis", "danger");
    } else {
        if ($_FILES['image']['error'] != 0 || $_FILES['image']['size'] == 0 || !isset($_FILES['image']['type'])) {
            $info = alert("L'image n'est pas valide", "danger");
        }
        if (!isset($_POST['name']) || (strlen($_POST['name']) < 3 && trim($_POST['name'])) || preg_match('/[0-9]+/', $_POST['name'])) {


            $info .= alert("Le nom n'est pas valide", "danger");
        }

        if (!isset($_POST['description']) || strlen($_POST['description']) < 20) {

            $info .= alert("La description n'est pas valide", "danger");
        }

        if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {

            $info .= alert("Le prix n'est pas valide", "danger");
        }

        if (!isset($_POST['category'])) {

            $info .= alert("La catégorie n'est pas valide", "danger");
        }

        if (!isset($_POST['color'])) {

            $info .= alert("La couleur n'est pas valide", "danger");
        }

        if (!isset($_POST['room'])) {

            $info .= alert("La pièce n'est pas valide", "danger");
        }

        if (!isset($_POST['size'])) {

            $info .= alert("La taille n'est pas valide", "danger");
        }

        if (!isset($_POST['stock'])) {

            $info .= alert("Le stock n'est pas valide", "danger");
        }


        //S'il n y a pas d'erreur sur le formulaire
        if (empty($info)) {

            $name = htmlentities(trim($_POST['name']));
            $description = htmlentities(trim($_POST['description']));
            $price = (float) htmlentities(trim($_POST['price']));
            $category = $_POST['category'];
            $color = $_POST['color'];
            $room = $_POST['room'];
            $room = $_POST['size'];
            $stock = (int) $_POST['stock'];
        }
    }
}



$title = 'Gestion des Produits';
$bannerTitle = isset($product) ? 'Modifier une affiche' : 'Ajouter une affiche';

require_once "../inc/header.inc.php";

?>



    <?php
    echo $info;
    ?>
    <form action="" method="post" enctype="multipart/form-data" class="container bg-light my-3">
        <!-- l'attribut enctype spécifie que le formulaire envoie des fichiers en plus des données texte => permet d'uploader un fichier (ex photo)-->

        <div class="row">
            <div class="col-md-6 my-3">
                <label for="title" class="my-3 fs-5 fw-bold text-decoration-underline">Nom</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= $product['name'] ?? '' ?>">
            </div>
            <div class="col-md-6 my-3">
                <label for="image" class="my-3 fs-5 fw-bold text-decoration-underline">Image</label>
                <input class="form-control" type="file" id="image" name="image" value="<?= $product['image'] ?? '' ?>">
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-sm-12 my-3">
                <label for="description" class="my-3 fs-5 fw-bold text-decoration-underline">Description</label>
                <textarea name="description" id="description" cols="20" rows="10" class="form-control"><?= $product['description'] ?? '' ?></textarea>
            </div>
            <div class="col-md-6 col-sm-12 my-3 d-flex justify-content-around">
                <div class="w-25">
                    <label for="category" class="my-3 fs-5 fw-bold text-decoration-underline">Catégorie</label>

                    <?php
                    $categories = allCategories();

                    foreach ($categories as $category) {

                    ?>
                        <div class="form-check">
                            <input type="radio" name="category" class="form-check-input" id="flexRadioDefault1" value="<?= $category['name'] ?>" <?php if (isset($product['category_id']) && $product['category_id'] == $category['id_category']) echo 'checked' ?>>

                            <label class="form-check-label" for="flexRadioDefault1"><?= $category['name'] ?></label>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="w-25">
                    <label for="category" class="my-3 fs-5 fw-bold text-decoration-underline">Couleur</label>
                    <?php
                    $colors = allColors();

                    foreach ($colors as $color) {

                    ?>
                        <div class="form-check">
                            <input type="radio" name="color" class="form-check-input" id="flexRadioDefault1" value="<?= $color['name'] ?>" <?php if (isset($product['color_id']) && $product['color_id'] == $color['id_color']) echo 'checked' ?>>

                            <label class="form-check-label" for="flexRadioDefault1"><?= $color['name'] ?></label>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="w-25">
                    <label for="room" class="my-3 fs-5 fw-bold text-decoration-underline">Pièces</label>

                    <?php
                    $rooms = allRooms();

                    foreach ($rooms as $room) {

                    ?>
                        <div class="form-check">
                            <input type="radio" name="room" class="form-check-input" id="flexRadioDefault1" value="<?= $room['name'] ?>" <?php if (isset($product['room_id']) && $product['room_id'] == $room['id_room']) echo 'checked' ?>>

                            <label class="form-check-label" for="flexRadioDefault1"><?= $room['name'] ?></label>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 my-3">
                <label for="size" class="form-label my-3 fs-5 fw-bold text-decoration-underline">Taille</label>
                <select name="size" id="size" class="form-select">
                    <option value="s" <?php if (isset($product['size']) && $product['size'] == 's') echo 'selected' ?>>Small</option>
                    <option value="m" <?php if (isset($product['size']) && $product['size'] == 'm') echo 'selected' ?>>Medium</option>
                    <option value="l" <?php if (isset($product['size']) && $product['size'] == 'l') echo 'selected' ?>>Large</option>

                </select>
            </div>
            <div class="col-md-4 my-3">
                <label for="price" class="my-3 fs-5 fw-bold text-decoration-underline">Prix</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="price" name="price" value="<?= $product['price'] ?? '' ?>" aria-label="Euros amount(with dot and two decimal places">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <label for="stock" class="my-3 fs-5 fw-bold text-decoration-underline">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" min="0" value="<?= $product['stock'] ?? '' ?>">
            </div>
        </div>

        <div class="row">
            <button type="submit" class="btn btn-secondary w-25 mt-5"><?= isset($product) ? 'Modifier' : 'Ajouter' ?></button>
        </div>


    </form>

















<?php

require_once "../inc/footer.inc.php";
?>