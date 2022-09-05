<?php ob_start();
$title = "Sites d'Intervention";
?>
<p><?=$site['NumCom']?></p>
<p><?=$site['NomClient']?></p>
<p><?=$site['Adresse']?></p>
<p><?=$site['Infos Sup']?></p>
<p><?=$site['DateCom']?></p>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT.'views/base.php') ?>

