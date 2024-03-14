<?php
require_once "inc/functions.inc.php";



// Si l'utilisateur est déjà connecté, il pourras pas avoir accés à la page d'inscription

if (!empty($_SESSION['user'])) {

    header("location:" . RACINE_SITE . "profil.php");
}

$info = '';

if (!empty($_POST)) // l'envoi du Formulaire (button "S'inscrire" ) 
{
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
        $confirmMdp = isset($_POST['confirmMdp']) ? $_POST['confirmMdp'] : null;
        $civility = isset($_POST['civility']) ? $_POST['civility'] : null;
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;


        if (strlen($pseudo) < 4) {

            $info .= alert("Le pseudo n'est pas valide.", "danger");
        }

        if (strlen($email) > 50 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $info .= alert("L'email n'est pas valide.", "danger");
        }

        if (strlen($mdp) < 5 || strlen($mdp) > 15) {

            $info .= alert("Le mot de passe n'est pas valide.", "danger");
        }
        if ($mdp !== $confirmMdp) {

            $info .= alert("Le mot de passe et la confirmation doivent être identique.", "danger");
        }

        if (strlen($firstName) < 2 || preg_match('/[0-9]+/', $firstName)) {

            $info = alert("Le prénom n'est pas valide.", "danger");
        }

        if (strlen($lastName) < 2 || preg_match('/[0-9]+/', $lastName)) {

            $info .= alert("Le nom n'est pas valide.", "danger");
        }

        if ($civility != 'f' && $civility != 'h') {
            $info .= alert("La civilité n'est pas valide.", "danger");
        }

        if (empty($info)) {

            $emailExist = checkEmailUser($email);
            $pseudoExist = checkPseudoUser($pseudo);


            if ($emailExist || $pseudoExist) {

                $info = alert("Vous avez déjà un compte", "danger");
                // ***************** REDIRECTION "authentification.php"



            } else if ($mdp !== $confirmMdp) {

                $info .= alert("Le mot de passe et la confirmation doivent être identiques.", "danger");
            } else {

                $mdp = password_hash($mdp, PASSWORD_DEFAULT);

                inscriptionUsers($pseudo, $email, $mdp, $civility, $firstName, $lastName);

                $info = alert('Vous êtes bien inscrit, vous pouvez vous connectez !', 'success');
            }
        }
    }
}
// else {
//     debug($_POST);
//     echo 'Non SUBMIT';
// }







$title = "inscription";
$bannerTitle = "Créer votre compte";
require_once "inc/header.inc.php";


?>

<main class=" container mx-auto">

    <?php

    echo $info;

    ?>

    <form action="" method="post">

        <div class="d-flex justify-content-center">
            <div class="container p-5 col-md-6 col-sm-12 mx-auto">
                <h3>Mon profil</h3>

                <div class="mb-3 w-50">
                    <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo">
                    <div id="pseudo" class="form-text">Lettres et chiffres uniquement - 4 caractères min</div>
                </div>
                <div class="mb-3 w-50">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 w-50">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="mdp" class="form-control" id="mdp" name="mdp">
                </div>
                <div class="mb-3 w-50">
                    <label for="confirmMdp" class="form-label">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" id="confirmMdp" name="confirmMdp">
                    <input type="checkbox" onclick="showPass()"><span class="text-danger">Afficher/masquer le mot de passe</span>
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
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div>
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                    </div>
                </div>
                <div class="container my-5">
                    <button class="w-25 m-auto btn btn-secondary btn-lg fs-5 mb-5" type="submit">Inscription</button>
                </div>
            </div>

        </div>

    </form>


</main>

<?php
require_once "inc/footer.inc.php";
?>