<?php $title = 'Billet simple pour l\'Alaska' ; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska </h1>
<h2> Vous êtes déconnecté </h2>
<p> Liste des chapitres </p>

<?php
while ($data = $chapters->fetch())
{
?>
	<div class="p-2 w-50 m-auto table table-active ">
		<h3>
			<?= htmlspecialchars($data['title']) ?>
			<em>le <?= $data['creation_date'] ?></em>			
		</h3>
		<p>
			<?= $data['content'] ?>
			
			<p>
				<br />
				<em><a href="index.php?action=chapter&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
			</p>		
		</p>
	</div>
<?php
}
$chapters->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>