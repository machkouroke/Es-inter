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
    <form action="route.php?p=site.add" method='post'
          enctype='multipart/form-data'>
        <h2>Ajouter une nouvelle commande</h2>
        <div class="form">
            <div class="popup">
                <div class="close-btn"><i class="uil uil-times"></i></div>
                <form  method="POST">
                    <h2>Ajouter une nouvelle commande</h2>
                    <div class="element">
                        <div class="form-element">
                            <label for="Name">NomCli</label>
                            <input type="text" placeholder="Nom du client">
                        </div>
                        <div class="form-element">
                            <label for="name">Adresse</label>
                            <input type="text" placeholder="Adresse">
                        </div>
                        <div class="form-element">
                            <label for="Carac">Infos</label>
                            <input type="text" placeholder="Infos supplementaires">
                        </div>
                    </div>

                    <div class="form-element">
                        <input type="submit"  value="+ Ajouter Commande !">
                    </div>

                </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT . 'views/base.php') ?>
