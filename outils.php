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
    <div class="d-flex flex-wrap">

        <?php
        $products = allProducts();
        foreach ($products as $product) {
        ?>
            <div class="col-md-3"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">

                <img id="data" ondragstart="drag(event);" draggable="true" class="imagesTool" src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" alt="">
            </div>
        <?php
        }
        ?>
    </div>
    <div class="wallTool col-md-6 drop drop1" id="target1"  ondrop="drop(event)" ondragover="allowDrop(event)">
        <div id="target1"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop1">
        </div>

        <!-- <div>
            <div id="target2"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop2">
            </div>
            <div id="target3"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop3">
            </div>
            <div id="target4"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop4">
            </div>
        </div> -->
        <!-- <div>
            <div id="target5"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop5">
            </div>
            <div id="target6"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop6">
            </div>
            <div id="target7"  ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop7">
            </div>
            <div id="target8" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop drop8">
            </div>
        </div> -->

    </div>


</main>




<?php
require_once "inc/footer.inc.php";


?>