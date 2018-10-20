<?php $title =  'Bienvenue, ' . $_SESSION['login'] . '!' ; ?>

<?php ob_start(); ?>
<h1> Esapce de gestion des commentaires </h1>
<p><a href="index.php?action=listChapters"> Retour au menu précédent </a></p>
<h4> Ces commentaires ont été jugés comme étant inappropriés </h4><br/>
<div class="table table-dark">
<?php

while ($data = $reportComments->fetch())
{
	
?>
	<div>
		<p>
			<p>
				<strong>Commentaire posté par </strong><?= htmlspecialchars($data['author'])?>
				<strong>contenu du commentaire </strong><?= htmlspecialchars($data['comment']) ?>
			</p>
			<p>
				<strong>date du commentaire </strong><em><?= $data['comment_date'] ?></em>
				<strong>Ce commentaire à été posté sur l espace commentaire du chapitre <?= $data['chapter_id'] ?></strong>
			</p>
		</p>
		<p>
			<a href="index.php?action=eraseComment&amp;id=<?= $data['id'] ?>"> Supprimer ce commentaire </a>
			<br/>
			<a href="index.php?action=replaceComment&amp;id=<?= $data['id'] ?>"> Réinsérer ce commentaire </a>
		</p>
	</div>

<?php

}
$reportComments->closeCursor();

?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
