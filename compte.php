<?php

require_once "inc/functions.inc.php";



if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_USER') {

    $user = showUser($_SESSION['user']['id_user']);
} else {

    header("location: " . RACINE_SITE . "identification.php");
}


if (isset($_GET['action']) && isset($_GET['id_user'])) {

    if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id_user'])) {

        $idUser = $_GET['id_user'];
        $user = showUser($idUser);
    }
}


$title = "Compte";
$bannerTitle = "Bonjour, " . $_SESSION['user']['firstName'];
$bannerPara = "Bienvenue sur votre Espace personnel";
$bannerMenu = '<div class="p-2 bg-transparent rounded">
<hr>

<ul class="nav nav-underline mb-auto navBack">
    
    <li class="nav-item bg-light border border-secondary mx-5 rounded py-2 px-5 fs-5">
        <a href="#adresse" class="nav-link text-dark">Mes Adresses</a>
    </li>
    <li class="nav-item bg-light border border-secondary mx-5 rounded py-2 px-5 fs-5">
        <a href="#commandes" class="nav-link text-dark">Mes Commandes</a>
    </li>

</ul>
<hr>
</div>';

require_once "inc/header.inc.php";

?>


<main>

    <section id="compte" class="mt-3">
        <h2 class="text-center fw-bolder mb-5 text-dark">Mes informations personnelles</h2>


        <form action="" method="post">

            <div class="d-flex justify-content-center">
                <div class="container p-5 col-md-6 col-sm-12 mx-auto">
                    <h3>Mon profil</h3>

                    <div class="mb-3 w-50">
                        <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= $user['pseudo'] ?? '' ?>">
                        <div id="pseudo" class="form-text">Lettres et chiffres uniquement - 4 caractères min</div>
                    </div>
                    <div class="mb-3 w-50">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $user['email'] ?? '' ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="mdp" class="form-label">Mot de passe</label>
                        <input type="mdp" class="form-control" id="mdp" name="mdp" value="<?= $user['mdp'] ?? '' ?>">
                    </div>
                </div>

                <div class="container p-5 col-md-6 col-sm-12 mx-auto">
                    <h3>Vous</h3>

                    <div>
                        <label class="form-label">Civilité</label>
                        <select class="form-select mb-3 w-25" name="civility" id="civility">
                            <option value="c">choix</option>
                            <option value="h">Homme</option>
                            <option value="f">Femme</option>
                        </select>


                        <div class="w-50 mt-3">
                            <div>
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $user['firstName'] ?? '' ?>">
                            </div>
                            <div>
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $user['lastName'] ?? '' ?>">
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <button class="w-25 m-auto btn btn-secondary btn-lg fs-5 mb-5" type="submit">Modifier</button>
                    </div>
                </div>

            </div>

        </form>
    </section>


    <section id="adresse" class="mt-3">

    <h2 class="text-center fw-bolder mb-5 text-dark">Mes adresses</h2>

    </section>



    <section id="commandes" class="mt-3">

    <h2 class="text-center fw-bolder mb-5 text-dark">Mes commandes</h2>

    </section>



</main>


<?php
require_once "inc/footer.inc.php";



?>