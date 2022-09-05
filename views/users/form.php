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
    <form action="index.php?p=users.add" method='post'
          enctype='multipart/form-data'>
        <h2>Ajouter un nouvel utilisateur</h2>
        <div class="element">
            <div class="form-element suc">
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Nom">
            </div>
            <div class="form-element">
                <label for="surname">Prenom</label>
                <input type="text" name="surname" placeholder="Prenom">
            </div>
            <div class="form-element">
                <label for="profil">Photo</label>
                <input type="file" name="userprofil">
            </div>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="form-element">
                <label for="telephone">Telephone</label>
                <input type="text" name="tel" placeholder="Telephone">
            </div>
            <div class="form-element">
                <label for="name">Poste</label>
                <input type="text" name="post" placeholder="Poste">
            </div>
        </div>
        <div class="form-element">
            <input type="submit" value="+Ajouter">
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT.'views/base.php') ?>
