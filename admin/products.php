<?php

require_once "../inc/functions.inc.php";

if( !isset($_SESSION['user'])){
    header("location:".RACINE_SITE."identification.php");
}else{
    if($_SESSION['user']['role'] == 'ROLE_USER'){
        header("location:".RACINE_SITE."index.php");
    }
}



// ************************************************




$title = "Produits";

?>

<main>

    <div class="container d-flex flex-column m-auto mt-5">

        <h2 class="text-center mb-5 text-secondary">Liste des affiches</h2>
        <a href="gestionProducts.php" class="btn btn-secondary p-2 fs-5 align-self-end "> Ajouter une affiche</a>
        <table class="table table-bordered mt-5 ">
            <thead>
                <tr>
                    <!-- th*7 -->
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Couleur</th>
                    <th>Pièce</th>
                    <th>Taille</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Supprimer</th>
                    <th> Modifier</th>
                </tr>
            </thead>
            <tbody>
            <?php

$products = allProducts();

foreach($products as $product){


?>
                <tr>

                    <!-- Je récupére les valeus de mon tabelau $film dans des td -->
                    <td><?=$product['id_product']?></td>
                    <td><?=ucfirst($product['name'])?></td>
                    <td><?=substr(ucfirst($product['description']),0,100)."..."?></td>
                    <td><?=ucfirst($product['price'])?>€</td>
                    <td><?=isset($product['category'])?ucfirst($product['category']): "Ajouter une catégorie"?></td>
                    <td> <?=ucfirst($product['color'])?></td>
                    <td><?=ucfirst($product['room'])?></td>
                    <td><?=ucfirst($product['size'])?></td>
                    <td> <img src="<?= RACINE_SITE."assets/img/".$product['image']?>" alt="image du produit" class="img-fluid w-50"> </td>
                    <td><?=ucfirst($product['stock'])?></td>
                    <td class="text-center"><a href="gestionProducts.php?action=delete&id_product=<?= $product['id_product']?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>

                    <td class="text-center"><a href="gestionProducts.php?action=update&id_product=<?= $product['id_product']?>"><i class="bi bi-pen-fill"></i></a></td>

                </tr>
<?php
}
?>

            </tbody>


        </table>


    </div>

</main>

<?php
require_once "../inc/footer.inc.php";
?>


