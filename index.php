<?php
require_once "inc/functions.inc.php";


?>


<?php


$title = "Accueil";
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
                    <a href="">Voir toutes les colections</a>
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
          <h4>Sélectionnés pour vous</h4>


          <div id="carouselExampleDark" class="carousel carousel-dark slide w-75 mx-auto">
               <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
               </div>
               <div class="carousel-inner ">


                    <div class="carousel-item active" data-bs-interval="10000">
                         <div class="card-group">
                              <div class="card mx-3 border-0">
                                   <a href="#"><img src="./assets/img/catsPaint.jpg" class="card-img-top" alt="..."></a>
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/citron.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/Sandra_Blomen_Maschinsky_Motljus_Frame_Oak_Low_Res-800x1120.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/colorPaint.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </div>



                    <div class="carousel-item" data-bs-interval="2000">
                         <div class="card-group">
                              <div class="card mx-3 border-0">
                                   <a href=""><img src="./assets/img/Nord_Projects_11_PM_Frame_Oak_Low_Res-800x1120.jpg" class="card-img-top" alt="..."></a>
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/Nord_Projects_8_Am_Frame_Oak_Low_Res-1000x1400.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/pullOverMan.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                              <div class="card mx-3 border-0">
                                   <img src="./assets/img/pêcheEtVerre.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">à partir de 39,90€</p>
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
               </button>
          </div>

     </section>
     <!-- ************************************************** -->

     <section class="outils">
          <div>
               <h3>NOS OUTILS</h3>
               <p>Découvrez notre outil de création de mur de cadres.</p>
          </div>

     </section>













     <?php
     require_once "inc/footer.inc.php";


     ?>