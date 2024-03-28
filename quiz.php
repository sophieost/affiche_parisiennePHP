<?php
require_once "inc/functions.inc.php";

$profile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialiser un tableau pour stocker les scores de chaque profil
    $scores = ['a' => 0, 'b' => 0, 'c' => 0, 'd' => 0];

    // Parcourir toutes les réponses du formulaire
    foreach ($_POST as $question => $answer) {
        // Augmenter le score du profil correspondant à la réponse
        $scores[$answer]++;
    }

    // Trouver le profil avec le score le plus élevé
    $profile = array_keys($scores, max($scores))[0];
}



$title = "Accueil";

$bannerTitle = "Quelle oeuvre est faite pour vous?";
$bannerPara = "Faites le test et decouvrez notre sélection correspondant à votre personnalité";

require_once "inc/header.inc.php";


$info = "";
?>
<main>





    <div class="results container">
        <?php

        if ($profile == "a") {
        ?>
            <h2 class="my-5">
                <?= "Le profil de l'utilisateur est : " . $profile; ?>
            </h2>

            <h2>L’Explorateur de la Nature 🌿</h2>
            <ul class="mb-5">
                <li>Activité créative préférée : Peindre des paysages</li>
                <li>Rapport au temps : Prend son temps pour explorer les détails</li>
                <li>Couleur favorite : Vert</li>
                <li>Œuvre d’art idéale : Une fresque murale inspirée de la nature</li>
                <li>Émotion exprimée : Sérénité</li>
                <li>Artiste admiré : Vincent van Gogh</li>
                <li>Matériau fascinant : Toile de lin</li>
                <li>Personnalité : Rêveur(euse)</li>
                <li>Lieu préféré : Un atelier en plein air entouré de nature</li>
            </ul>

            <h2 class='mb-5'>Voici les affiches qui sont faites pour vous : </h2>

            <div class="card-group mb-5">

                <?php

                $imagesa = showImgprofila();
                foreach ($imagesa as $imagea) {
                ?>

                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagea['image1'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagea['image2'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagea['image3'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagea['image4'] ?>" class="card-img" alt="affiche">
                    </div>
            </div>

    <?php
                }
            }
    ?>
    </div>

    <div class="results container">
        <?php

        if ($profile == "b") {
        ?>

            <h2 class="my-5">
                <?= "Le profil de l'utilisateur est : " . $profile; ?>
            </h2>

            <h2>L’Artisan Moderne 🔨</h2>
            <ul class="mb-5">
                <li>Activité créative préférée : Sculpter des formes abstraites</li>
                <li>Rapport au temps : Préfère des projets rapides</li>
                <li>Couleur favorite : Rouge</li>
                <li>Œuvre d’art idéale : Une petite sculpture en marbre</li>
                <li>Émotion exprimée : Passion</li>
                <li>Artiste admiré : Frida Kahlo</li>
                <li>Matériau fascinant : Marbre</li>
                <li>Personnalité : Passionné(e)</li>
                <li>Lieu préféré : Un loft industriel avec de grandes fenêtres</li>
            </ul>

            <h2>Voici les affiches qui sont faites pour vous : </h2>

            <div class="card-group mb-5">
                <?php

                $imagesb = showImgprofilb();
                foreach ($imagesb as $imageb) {
                ?>

                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imageb['image1'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imageb['image2'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imageb['image3'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imageb['image4'] ?>" class="card-img" alt="affiche">
                    </div>
            </div>

    <?php
                }
            }
    ?>
    </div>


    <div class="results container">
        <?php
        if ($profile == "c") {
        ?>

            <h2 class="my-5">
                <?= "Le profil de l'utilisateur est : " . $profile; ?>
            </h2>

            <h2>Le Poète Contemplatif 📜</h2>
            <ul class="mb-5">
                <li>Activité créative préférée : Écrire des poèmes ou des histoires</li>
                <li>Rapport au temps : Aime les défis et les projets à long terme</li>
                <li>Couleur favorite : Bleu</li>
                <li>Œuvre d’art idéale : Un recueil de poésie</li>
                <li>Émotion exprimée : Réflexion</li>
                <li>Artiste admiré : William Shakespeare</li>
                <li>Matériau fascinant : Papier</li>
                <li>Personnalité : Analytique</li>
                <li>Lieu préféré : Une bibliothèque silencieuse</li>
            </ul><br>

            <h2>Voici les affiches qui sont faites pour vous : </h2>

            <div class="card-group mb-5">
                <?php

                $imagesc = showImgprofilc();
                foreach ($imagesc as $imagec) {
                ?>

                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagec['image1'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagec['image2'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagec['image3'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imagec['image4'] ?>" class="card-img" alt="affiche">
                    </div>
            </div>


    <?php
                }
            }
    ?>
    </div>

    <div class="results container">
        <?php

        if ($profile == "d") {
        ?>

            <h2 class="my-5">
                <?= "Le profil de l'utilisateur est : " . $profile; ?>
            </h2>

            <h2>Le Mélodiste Enthousiaste 🎶</h2>
            <ul class="mb-5">
                <li>Activité créative préférée : Jouer d’un instrument de musique</li>
                <li>Rapport au temps : Vit au rythme de l’instant présent</li>
                <li>Couleur favorite : Jaune</li>
                <li>Œuvre d’art idéale : Une composition musicale</li>
                <li>Émotion exprimée : Joie</li>
                <li>Artiste admiré : Ludwig van Beethoven</li>
                <li>Matériau fascinant : Bois</li>
                <li>Personnalité : Énergique</li>
                <li>Lieu préféré : Une salle de concert vibrante</li>
            </ul><br>

            <h2>Voici les affiches qui sont faites pour vous : </h2>

            <div class="card-group mb-5">

                <?php

                $imagesd = showImgprofild();
                foreach ($imagesd as $imaged) {
                ?>

                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imaged['image1'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imaged['image2'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imaged['image3'] ?>" class="card-img" alt="affiche">
                    </div>
                    <div class="card mx-3 border-0">
                        <img src="<?= RACINE_SITE . "assets/img/" . $imaged['image4'] ?>" class="card-img" alt="affiche">
                    </div>
            </div>


    <?php
                }
            }

    ?>
    </div>

    <form action="" method="post" class="container w-50 mt-5 formQuiz" id="quiz">

        

        <label for="q1">
                <h4>Quelle activité créative vous inspire le plus ?</h4>
            </label>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q1" value="a" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Peindre des paysages">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q1" value="b" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Sculpter des formes abstraites">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q1" value="c" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Écrire des poèmes ou des histoires">
            </div>
            <div class="input-group mb-5">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q1" value="d" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Jouer d’un instrument de musique">
            </div>


            <label for="q2">
                <h4>Quelle couleur vous attire le plus ?</h4>
            </label>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q2" value="a" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Vert">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q2" value="b" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Rouge">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q2" value="c" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Bleu">
            </div>
            <div class="input-group mb-5">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q2" value="d" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Jaune">
            </div>

            <label for="q3">
                <h4>Quelle émotion souhaitez-vous exprimer à travers votre art ?</h4>
            </label>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q3" value="a" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Sérénité">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q3" value="b" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Passion">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q3" value="c" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Réflexion">
            </div>
            <div class="input-group mb-5">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q3" value="d" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Joie">
            </div>


            <label for="q4">
                <h4>Quelle matière ou texture vous fascine ?</h4>
            </label>

            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q4" value="a" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Lin">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q4" value="b" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Marbre">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q4" value="c" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Papier">
            </div>
            <div class="input-group mb-5">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q4" value="d" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Bois">
            </div>

            <label for="q5">
                <h4>Si vous deviez choisir un lieu, ce serait…</h4>
            </label>
            <div class="input-group mb-3">

                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q5" value="a" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Un atelier en plein air entouré de nature">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q5" value="b" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Un loft industriel avec de grandes fenêtres">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q5" value="c" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Une bibliothèque silencieuse">
            </div>
            <div class="input-group mb-5">
                <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" name="q5" value="d" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button" readonly value="Une salle de concert vibrante">
            </div>

        
            <button type="submit" id="submitQuiz" class="btn btn-secondary w-25 mb-5">Valider</button>
        
            
        
    </form>


</main>





<?php
require_once "inc/footer.inc.php";


?>