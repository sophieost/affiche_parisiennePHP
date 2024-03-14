<?php

require_once "inc/functions.inc.php";

if (empty($_SESSION['user'])) {

    header("location:".RACINE_SITE."identification.php");

} else if ( $_SESSION['user']['role'] == 'ROLE_ADMIN') {

    header("location:".RACINE_SITE."admin/dashboard.php?dashboard_php");


    } 



$title = "Profil";
$bannerTitle = "Bonjour, " . $_SESSION['user']['firstName'];
$bannerPara = "Bienvenue sur votre espace client";

require_once "inc/header.inc.php";
?>

<main>
    <?php
    require_once "index.php";
    
    ?>

</main>




<?php
require_once "inc/footer.inc.php";

?>