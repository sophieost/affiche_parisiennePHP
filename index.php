<?php
require_once "inc/functions.inc.php";


?>


<?php


$title = "Accueil";

$bannerTitle = "Affichez votre personnalité";
$bannerPara = "Transformez votre maison avec des impressions d'art contemporain.";
$bannerPara2 = "Chacune soigneusement choisie par";
$bannerSpan = "AFFICHE PARISIENNE.";

require_once "inc/header.inc.php";


$info = "";
?>

<main>

     <section class="sectionCategories">
          <div class="categorie1">
               <div class="nouveautes"><a href="">nouveautés</a></div>
               <div class="colores"><a href="">colorés</a></div>
               <div class="noirBlanc"><a href="">noir et blanc</a></div>
          </div>
          <div class="categorie2">
               <div class="cuisine">
                    <div class="cuisineImg"></div>
                    <h3>POUR LA CUISINE</h3>
                    <p>La pièce la plus importante de tout foyer? Sans hésiter, la cuisine.</p>
                    <button><a href="">découvrir</a></button>
               </div>
               <div class="rose">
                    <div class="roseImg"></div>
                    <h3>ROSE BONBON</h3>
                    <p>Voyez la vie en rose avec cette collection pleine de joie.</p>
                    <button><a href="">découvrir</a></button>
               </div>
          </div>
          <div class="voirPlus">
               <div>
                    <a href="collections.php">Voir toutes les collections</a>
               </div>
          </div>
     </section>

     <section class="combinaisons">
          <div>
               <h3>NOS COMBINAISONS DE CADRES</h3>
          </div>
          <i class="bi bi-record-circle indicator1"></i>
          <div class="infos1">
               <p>Dogue</p>
               <p>à partir de 29,90€</p>
          </div>

          <i class="bi bi-record-circle indicator2"></i>
          <div class="infos2">
               <p>Côte d'Azur</p>
               <p>à partir de 29,90€</p>
          </div>

          <i class="bi bi-record-circle indicator3"></i>
          <div class="infos3">
               <p>Flying cranes</p>
               <p>à partir de 29,90€</p>
          </div>

     </section>


     <!-- ***************** Carousel Products *************-->
     <section class="selection">
          <h4>Nouveautés</h4>


          <div id="myCarousel" class="carousel slide carousel-dark w-75 mx-auto">
               <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active mx-2" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active mx-2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active mx-2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class="active mx-2"></button>
               </div>

               <div class="carousel-inner ">

                    <div class="carousel-item active" data-bs-interval="10000">

                         <div class="card-group">

                              <?php
                              $products1 = productByDateDesc1();
                              foreach ($products1 as $product) {
                              ?>
                                   <div class="col-md-3">

                                        <div class="card mx-3 border-0">
                                             <a href="#"><img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="affiche"></a>
                                             <div class="card-body">
                                                  <h5 class="card-title"><?= $product['name'] ?></h5>
                                                  <p class="card-text"><a href="<? RACINE_SITE . "showProduct.php?id_product=" . $product['id_product'] ?>" class="text-decoration-none text-secondary "><?= $product['price'] ?></a> €</p>
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>
                         </div>
                    </div>

                    <div class="carousel-item">
                         <div class="card-group">

                              <?php
                              $products2 = productByDateDesc2();
                              foreach ($products2 as $product) {
                              ?>
                                   <div class="col-md-3">

                                        <div class="card mx-3 border-0">
                                             <a href="#"><img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="affiche"></a>
                                             <div class="card-body">
                                                  <h5 class="card-title"><?= $product['name'] ?></h5>
                                                  <p class="card-text"><a href="<? RACINE_SITE . "showProduct.php?id_product=" . $product['id_product'] ?>" class="text-decoration-none text-secondary "><?= $product['price'] ?></a> €</p>
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>
                         </div>
                    </div>

                    <div class="carousel-item">
                         <div class="card-group">
                              <?php
                              $products3 = productByDateDesc3();
                              foreach ($products3 as $product) {
                              ?>
                                   <div class="col-md-3">

                                        <div class="card mx-3 border-0">
                                             <a href="#"><img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="affiche"></a>
                                             <div class="card-body">
                                                  <h5 class="card-title"><?= $product['name'] ?></h5>
                                                  <p class="card-text"><a href="<? RACINE_SITE . "showProduct.php?id_product=" . $product['id_product'] ?>" class="text-decoration-none text-secondary "><?= $product['price'] ?></a> €</p>
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>
                         </div>
                    </div>

                    <div class="carousel-item">
                         <div class="card-group">
                              <?php
                              $products4 = productByDateDesc4();
                              foreach ($products4 as $product) {
                              ?>
                                   <div class="col-md-3">

                                        <div class="card mx-3 border-0">
                                             <a href="#"><img src="<?= RACINE_SITE . "assets/img/" . $product['image'] ?>" class="card-img-top" alt="affiche"></a>
                                             <div class="card-body">
                                                  <h5 class="card-title"><?= $product['name'] ?></h5>
                                                  <p class="card-text"><a href="<? RACINE_SITE . "showProduct.php?id_product=" . $product['id_product'] ?>" class="text-decoration-none text-secondary "><?= $product['price'] ?></a> €</p>
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              <?php
                              }
                              ?>
                         </div>
                    </div>


               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
               </button>
          </div>

     </section>
     <!-- ************************************************** -->

     <section class="outils mt-5">
          <div>
               <h3>NOS OUTILS</h3>
               <p>Découvrez notre outil de création de mur de cadres.</p>
          </div>

     </section>















     <?php
     require_once "inc/footer.inc.php";


     ?>