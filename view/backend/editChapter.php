<?php $title = 'Interface d\'administration' ; ?>

<?php ob_start(); ?>


<h1> Interface d'administration </h1>
<h2> édition d'un chapitre existant </h2>
<p><a href="index.php?action=listChapters"> Retour au menu précédent </a></p>
<?php
while ($data = $toEditChapter->fetch())
{
?>
	<form action="index.php?action=editChapter&amp;id=<?= $data['id'] ?>" method="post" id="tinyPost">
		<div>
			<label for="title">Titre</label>
			<br />
			<input type="text" id="title" name="title" value="<?= $data['title'] ?>">
		</div>
		<div>
			<label for="content"> Contenu du chapitre </label><br />
			<textarea id="content" name="content"><?= $data['content'] ?></textarea>
		</div>
		<div>
			<input type="submit">
		</div>
	</form>
	<p><a href="index.php?action=eraseChapter&amp;id=<?= $data['id'] ?>"> Effacer ce chapitre et ses commentaires</a></p>
<?php
}
$toEditChapter->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>