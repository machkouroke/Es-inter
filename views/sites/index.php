<?php ob_start();
$title = "Sites d'Interventions";

?>


<section class="container">
    <div class="btn-new">
        <a href="index.php?p=sites.form"><button class="btn-showForm" id="showForm">Nouvelle Commande</button></a>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table " data-toggle="table" data-search="true" data-pagination="true">
                <thead>
                <tr>
                    <th data-sortable="true">ID</th>
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Date de commande</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($sites as $site):?>
                    <tr>
                        <td><?=$site['NumCom']?></td>
                        <td><?=$site['NomClient']?></td>
                        <td><?=$site['Adresse']?></td>
                        <td><?=$site['DateCom']?></td>
                        <td><?=$site['Infosup']?></td>
                        <td class="d-flex flex-row justify-content-between align-middle">
                            <a href="index.php?p=sites.show.<?=$site['NumCom']?>"><i class="uil uil-eye text-info"></i></a>
                            <a href="#"><i class="uil uil-edit text-warning"></i></a>
                            <a href="index.php?p=sites.delete.<?=$site['NumCom']?>"><i class="uil uil-trash-alt text-danger"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>

    </div>
</section>




<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT . 'views/base.php') ?>
