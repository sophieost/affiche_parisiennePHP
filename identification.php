<?php

require_once "inc/functions.inc.php";




$info = '';

if (!empty($_POST)) {
    // debug($_POST);

    $verif = true;

    foreach ($_POST as $value) {


        if (empty($value)) {

            $verif = false;
        }
    }

    if (!$verif) {
        // debug($_POST);


        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else {

        // debug($_POST);
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : null;

        $user = checkUser($email, $pseudo);
        // debug($user);

        if ($user) {

            if (password_verify($mdp, $user['mdp'])) {

                $_SESSION['user'] = $user;

                header("location:" . RACINE_SITE . "profil.php");
            } else {
                $info = alert("Les identifiants sont incorrects", "danger");
            }
        }

    }
}




$title = "Identification";
$bannerTitle = "Identification";
require_once "inc/header.inc.php";
?>
<main>



    <?php

    echo $info;

    ?>

    <div class="container row mx-auto">

        <div class="col-md-6 col-sm-12">
            <h2 class="p-3 mb-5">Connexion au compte</h2>

            <form action="" method="post">

                <div class="mb-3 w-50">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" autocomplete="off" id="pseudo" name="pseudo">
                    <span></span>
                </div>

                <div class="mb-3 w-50">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control fs-5" id="email" name="email">
                </div>

                <div class="mb-3 w-50">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="password"  class="form-control" autocomplete="off" id="mdp" name="mdp">
                    <input type="checkbox" onclick="showPass()">
                    <span class="text-danger">Afficher/masquer le mot de passe</span>
                </div>


                <button class="w-25 m-auto btn btn-secondary btn-md my-3 " type="submit">Se connecter</button>

            </form>
        </div>



        <div class="col-md-6 col-sm-12">
            <h2 class="p-3 mb-5">Créer un compte</h2>
            <button class="w-25 m-auto btn btn-secondary btn-md my-5"><a href="<?= RACINE_SITE ?>inscription.php" class=" text-decoration-none text-white">Inscription</button>
            </section>

        </div>

</main>