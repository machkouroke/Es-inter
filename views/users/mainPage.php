<?php ob_start();
$title = "Utilisateurs";

?>


<section class="container">
    <div class="btn-new">
        <a href="index.php?action=users.form"><button class="btn-showForm" id="showForm">Nouvel utilisateur</button></a>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table " data-toggle="table" data-search="true" data-pagination="true">
                <thead>
                <tr>
                    <th data-sortable="true">ID</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Poste</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user):?>
                    <tr>
                        <td><?=$user['Iduser']?></td>
                        <td><img class="w-25 rounded-5 user-p" src="images/<?=$user['Photo']?>"></td>
                        <td><?=$user['Nom']." ".$user['Prenom']?></td>
                        <td><?=$user['Email']?></td>
                        <td><?=$user['Contact']?></td>
                        <td><?=$user['Poste']?></td>
                        <td class="d-flex flex-row justify-content-between align-middle">
                            <a href="index.php?action=users.show.<?=$user['Iduser']?>"><i class="uil uil-eye text-info"></i></a>
                            <a href="#"><i class="uil uil-edit text-warning"></i></a>
                            <a href="index.php?action=users.delete.<?=$user['Iduser']?>"><i class="uil uil-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>

    </div>
</section>




<?php $content = ob_get_clean(); ?>
<?php require_once(BASE_DIR . 'views/base.php') ?>
