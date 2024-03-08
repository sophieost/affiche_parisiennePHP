<?php
require_once "inc/functions.inc.php";

$title = "inscription";
require_once "inc/header.inc.php"

?>

<main>
    <h2>Créer un compte</h2>
    <div class="container">
        <h3>Mon profil</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
                <div id="pseudo" class="form-text">Lettres et chiffres uniquement - 4 caractères minimum</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirmer votre mot de passe</label>
                <input type="password" class="form-control" id="confirmPassword">
            </div>
    </div>

    <div class="container">
        <h3>Vous</h3>

        <h4>Civilité</h4>

        <label for="monsieur">M.</label>
        <input type="radio" name="monsieur" id="monsieur">
        <label for="madame">Mme</label>
        <input type="radio" name="madame" id="madame">

        <div class="d-flex">
            <label for="firstName" class="form-label w-25">Prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            <label for="lastName" class="form-label w-25">Nom</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>
    </div>
    </form>


</main>