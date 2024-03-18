<?php
$title = "Users";
require_once "../inc/header.inc.php";







?>

<main class="mainUsers bg-white pt-3">

    <h2 class="text-center fw-bolder mb-5 text-dark">Liste des utilisateurs</h2>
    <div class="d-flex flex-column m-5  table-responsive">
    <table class="table table-light table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Civility</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Role</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $users = allUsers();

        foreach($users as $user){

        
        ?>
            <tr>
                <td><?=$user['id_user']?></td>
                <td><?=$user['pseudo']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['civility']?></td>
                <td><?=ucfirst($user['firstName'])?></td>
                <td><?=ucfirst($user['lastName'])?></td>
                <td><?=$user['role']?></td>
                <td class="text-center">
                    <a href="dashboard.php?users_php&action=delete&id_user=<?= $user['id_user']?>"><i class="bi bi-trash3-fill text-danger"></i></a>
                </td>
                <td class="text-center">
                    <a href="dashboard.php?users_php&action=update&id_user=<?= $user['id_user']?>" class="btn btn-secondary"><?=($user['role']) == 'ROLE_ADMIN' ? 'Rôle user' : 'Rôle admin'?>
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>

    </table>
</div>
</main>






<?php
require_once "../inc/footer.inc.php"
?>