<?php ob_start();
$title = "Formulaire";
?>
<div class="container">
    <!--    <div class="btn-new">-->
    <!--        <a href="route.php?p=users.form"><button class="userslist" >Nouvel utilisateur</button></a>-->
    <!--    </div>-->
    <?php if(isset($success) ): ?>
        <div class="success"><?=$success?></div>
    <?php endif; ?>
    <form action="route.php?p=outils.add" method='post'
          enctype='multipart/form-data'>
        <h2>Ajouter un nouvel Outil</h2>
        <div class="form">
            <div class="popup">
                <div class="close-btn"><i class="uil uil-times"></i></div>
                <form  method="POST">
                    <h2>Ajouter un nouvel outil</h2>
                    <div class="element">
                        <div class="form-element">
                            <label for="Num">NumSerie</label>
                            <input type="text" placeholder="Numéro de Série">
                        </div>
                        <div class="form-element">
                            <label for="name">Nom</label>
                            <input type="text" placeholder="Nom">
                        </div>
                        <div class="form-element">
                            <label for="Carac">Caractéristiques</label>
                            <input type="text" placeholder="Caractéristique 1">
                        </div>
                        <div class="form-element">
                            <label for="Number">Nombre</label>
                            <input type="text" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="form-element">
                        <input type="submit"  value="+ Ajouter Outil !">
                    </div>

                </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT . 'views/base.php') ?>
