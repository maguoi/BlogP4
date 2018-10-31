<?php ob_start(); ?>

<div class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		Chapitres récents
		<span class="caret"></span>
	</button>
	<div class="dropdown-menu h-100 m-0 p-0" aria-labelledby="dropdownMenuButton">
	<?php
		while ($data = $ulChapters->fetch()) {
	?>
			<a type="button" class="text-white btn btn-info w-100" href="index.php?action=chapter&amp;id=<?= $data['id'] ?>"><?= $data['title'] ?></a>
		
	<?php
		}
		$ulChapters->closeCursor();
	?>	
	</div>
</div>
<?php $listUlChapters = ob_get_clean(); ?>
