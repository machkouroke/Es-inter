<?php ob_start();
	$title = "Dashboard";
?>

	<div class="boxes">
		<a href="#" class="box box1">
			<i class="uil uil-users-alt"></i>
			<span class="text">Total Utilisateurs</span>
			<?php /** @var int $nbUsers */ ?>
			<span class="number"><?= $nbUsers ?></span>
		</a>
		<a href="#" class="box box2">
			<i class="uil uil-jackhammer"></i>
			<span class="text">Total Outils</span>
			<span class="number">150</span>
		</a>
		<a href="#" class="box box3">
			<i class="uil uil-globe"></i>
			<span class="text">Sites d'Interventions</span>
			<span class="number">10</span>
		</a>
	</div>

<?php $content = ob_get_clean(); ?>
<?php require_once(BASE_DIR . 'views/base.php') ?>