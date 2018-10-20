<?php $title = 'Interface d\'administration' ; ?>

<?php ob_start(); ?>


<h1> Interface d'administration </h1>
<h2> Bonjour, Jean Forteroche </h2>
<p><a href="index.php?action=listChapters"> Retour au menu précédent </a></p>

<form action="index.php?action=addChapter" method="post" id="tinyPost">
	<div>
		<label for="title">Titre</label>
		<br />
		<input type="text" id="title" name="title">
	</div>
	<div>
		<label for="content"> Contenu du chapitre </label><br />
		<textarea id="content" name="content"></textarea>
	</div>
	<div>
		<input type="submit">
	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>