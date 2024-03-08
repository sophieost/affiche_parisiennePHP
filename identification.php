<?php

require_once "inc/functions.inc.php";















$title = "Authentification";
require_once "inc/header.inc.php";
?>

<h2 class="text-center p-3 mb-5">Connexion</h2>

        <?php

        echo $info;

        ?>

<form action="" method="post">

        <div class="pseudo-container">
            <label for="pseudo">Pseudo</label>
            <input type="text" autocomplete="off" id="pseudo">
            <span></span>
        </div>

        <div class="email-container">
            <label for="email">Email</label>
            <input type="text" autocomplete="off" id="email">
            <span>Email incorrect</span>
        </div>

        <div class="password-container">
            <label for="password">Mot de passe</label>
            <input type="password" autocomplete="off" id="password">
            <p id="progress-bar"></p>
            <input type="checkbox" onclick="showPass()">
            <span></span>
        </div>

        <div class="confirm-container">
            <label for="confirm">Confirmez votre mot de passe</label>
            <input type="password" autocomplete="off" id="confirm">
            <input type="checkbox" onclick="showPass()">
            <span></span>

            <input type="submit" value="Valider">
            <p class="mt-5 text-center">Vous n'avez pas encore de compte ! <a href="register.php" class=" text-danger">créer un compte ici</a></p>
        </div>

    </form>