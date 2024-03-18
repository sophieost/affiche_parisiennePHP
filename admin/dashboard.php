<?php

require_once "../inc/functions.inc.php";


if(isset($_GET['action']) && isset($_GET['id_user'])){
    if(!empty($_GET['action']) && $_GET ['action']=='delete' && !empty($_GET['id_user'])){
        $idUser = htmlentities($_GET['id_user']);

        deleteUser($idUser);
    }
}

if(!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id_user'])){
    $user = showUser($_GET['id_user']);
    if($user['role']=='ROLE_ADMIN'){
        updateRole('ROLE_USER',$user['id_user']);

    }

    if($user['role']=='ROLE_USER'){
        updateRole('ROLE_ADMIN',$user['id_user']);

    }
}


if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "identification.php");
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header("location:" . RACINE_SITE . "index.php");
    }
}







$title = "Backoffice";
$bannerTitle = "Bonjour, " . $_SESSION['user']['firstName'];
$bannerPara = "Bienvenue sur votre Back Office";
$bannerMenu = '<div class="p-2 sidebarre bg-transparent rounded">
<hr>

<ul class="nav nav-underline mb-auto navBack">
    <li class="nav-item bg-light border border-secondary mx-5 rounded py-2 px-5 fs-5">
        <a href="?dashboard_php" class="nav-link active text-dark">Backoffice</a>
    </li>
    <li class="nav-item bg-light border border-secondary mx-5 rounded py-2 px-5 fs-5">
        <a href="?products_php" class="nav-link text-dark">Produits</a>
    </li>
    <li class="nav-item bg-light border border-secondary mx-5 rounded py-2 px-5 fs-5">
        <a href="?users_php" class="nav-link text-dark">Utilisateurs</a>
    </li>

</ul>
<hr>
</div>';

require_once "../inc/header.inc.php";
?>


<main>
    <div class="row">
        <!-- <div class="col-sm-6 col-md-4 col-lg-2">

            <div class="d-flex flex-column p-3 sidebarre bg-light bg-gradient">
                <hr>

                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="?dashboard_php" class="nav-link text-dark">Backoffice</a>
                    </li>
                    <li>
                        <a href="?products_php" class="nav-link text-dark">Produits</a>
                    </li>

                    <li>
                        <a href="?users_php" class="nav-link text-dark">Utilisateurs</a>
                    </li>

                </ul>
                <hr>
            </div>
        </div> -->
<!-- 
        <?php
        //if (isset($_GET['dashboard_php'])) :
        ?>

            <div class="w-50 m-auto">
                <img src="<?//= RACINE_SITE ?>assets/img/logo2.png" alt="logo affiche parisienne" width="500" height="500">
                <img src="<?//= RACINE_SITE ?>assets/img/favicon2.png" alt="logo affiche parisienne" width="100" height="100" class="mx-3">
            </div>

        <?php

        //endif;

        ?> -->


        <div class="col-sm-12">
            <?php

            if (!empty($_GET)) {

                if (isset($_GET['products_php'])) {
                    require_once "products.php";

                } else if (isset($_GET['users_php'])) {
                    require_once "users.php";

                } else {
                    require_once "dashboard.php";
                }
            }
            ?>
        </div>
    </div>
</main>


<?php
require_once "../inc/footer.inc.php";



?>