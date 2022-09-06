<?php ob_start();
$title = "Outils";
?>
<p><?=$outil['Nom']?></p>
<p><?=$outil['Nombre']?></p>
<p><?=$outil['NumSerie']?></p>
<p><?=$outil['Caractéristiques']?></p>
<p><?=$outil['DateAj']?></p>
<?php $content = ob_get_clean(); ?>
<?php require_once(ROOT . 'views/base.php') ?>

