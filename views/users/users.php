<?php ob_start();
$title = "Utilisateurs";
?>


<section class="container">
    <div class="btn-new">
        <button class="btn-showForm" id="showForm">Nouvel utilisateur</button>
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
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?=$user['Iduser']?></td>
                        <td><img class="w-25 rounded-5" src="images/<?=$user['Photo']?>"></td>
                        <td><?=$user['Nom']?></td>
                        <td><?=$user['E-Mail']?></td>
                        <td><?=$user['Contact']?></td>
                        <td><?=$user['Poste']?></td>
                        <td class="d-flex flex-row justify-content-between align-middle">
                            <a href="#"><i class="uil uil-eye text-info"></i></a>
                            <a href="#"><i class="uil uil-edit text-warning"></i></a>
                            <a href="#"><i class="uil uil-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>

    </div>
</section>
<div class="form">
    <div class="popup">
        <div class="close-btn"><i class="uil uil-times"></i></div>
        <form>
            <h2>Ajouter un nouvel utilisateur</h2>
            <div class="element">
                <div class="form-element">
                    <label for="name">Nom</label>
                    <input type="text" placeholder="Nom">
                </div>
                <div class="form-element">
                    <label for="surname">Prenom</label>
                    <input type="text" placeholder="Preom">
                </div>
                <div class="form-element">
                    <label for="profil">Photo</label>
                    <input type="file">
                </div>
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email">
                </div>

                <div class="form-element">
                    <label for="telephone">Telephone</label>
                    <input type="number" placeholder="Telephone">
                </div>
                <div class="form-element">
                    <label for="name">Poste</label>
                    <input type="text" placeholder="Poste">
                </div>
            </div>

            <div class="form-element">
                <input type="submit" value="Ajouter">
            </div>

        </form>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT.'views/base.php') ?>
