<?php
require_once "inc/functions.inc.php";


?>


<?php


$title = "Accueil";

$bannerTitle = "Outil de création de mur";
$bannerPara = "Créez et visualisez vos combinaisons de cadres";

require_once "inc/header.inc.php";


$info = "";
?>





<main class="mainOutils">
    <div class="row">


        <?php
        $products = allProducts();
        foreach ($products as $product) {
        ?>
            <div class="col-md-3">

                <img id="source" ondragstart="dragStartHandler(event);" draggable="true" class="imagesTool" src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" alt="">
            </div>
        <?php
        }
        ?>
    </div>
    <div class="wallTool">
        <div>
            <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop1">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop2">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop3">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop4">
        </div>
        </div>
        <div>
            <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop5">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop6">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop7">
        </div>
        <div id="target" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" class="drop drop8">
        </div>
        </div>
        
    </div>



</main>






<?php
require_once "inc/footer.inc.php";


?>