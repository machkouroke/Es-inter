<?php ob_start();
$title = "Outils";

?>


<section class="container">
    <div class="btn-new">
        <a href="route.php?p=outils.form"><button class="btn-showForm" id="showForm">Nouvel Outil</button></a>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table " data-toggle="table" data-search="true" data-pagination="true">
                <thead>
                <tr>
                    <th data-sortable="true">ID</th>
                    <th>Nom</th>
                    <th>NumSérie</th>
                    <th>Nombre</th>
                    <th>Caractéristiques</th>
                    <th>Date d'Ajout</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($outils as $outil):?>
                    <tr>
                        <td><?=$outil['idoutil']?></td>
                        <td><?=$outil['NumSerie']?></td>
                        <td><?=$outil['Nom']?></td>
                        <td><?=$outil['Nombre']?></td>
                        <td><?=$outil['Caracteristiques']?></td>
                        <td><?=$outil['DateAj']?></td>
                        <td class="d-flex flex-row justify-content-between align-middle">
                            <a href="route.php?p=outils.show.<?=$outil['idoutil']?>"><i class="uil uil-eye text-info"></i></a>
                            <a href="#"><i class="uil uil-edit text-warning"></i></a>
                            <a href="route.php?p=outils.delete.<?=$outil['idoutil']?>"><i class="uil uil-trash-alt text-danger"></i></a>
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
