<?php ob_start();
$title = "Utilisateurs";
?>
<p><?=$user['Nom']?></p>
<p><?=$user['Prenom']?></p>
<p><?=$user['Contact']?></p>
<p><?=$user['Poste']?></p>
<p><?=$user['Photo']?></p>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT . 'views/base.php') ?>

