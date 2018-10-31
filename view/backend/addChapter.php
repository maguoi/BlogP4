<?php $title = 'Interface d\'administration' ; ?>

<?php ob_start(); ?>


<h1 class="text-white"> Interface d'administration </h1>
<h2 class="text-white"> Bonjour, Jean Forteroche </h2>
<p><a class="btn btn-info" href="index.php?action=listChapters"> Retour au menu précédent </a></p>

<form action="index.php?action=addChapter" method="post" id="tinyPost">
	<div>
		<label class="text-white" for="title">Titre</label>
		<br />
		<input type="text" id="title" name="title">
	</div>
	<div>
		<label class="text-white" for="content"> Contenu du chapitre </label><br />
		<textarea id="content" name="content"></textarea>
	</div>
	<div>
		<input class="btn btn-success m-2" type="submit">
	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>