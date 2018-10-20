<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
	<header>
		<nav class="navbar navbar-default w-100">
			<div class="container-fluid">
				<div class="w-100 p-3 d-flex justify-content-between table table-dark">
					<?= $listUlChapters ?>
					<a class="text-info" href="index.php?action=listChapters">Jean Forteroche</a>

					<?php if ($_SESSION['group'] == 2) {
					?>

					<a class="text-info" href="index.php?action=controlChapter"> Ajouter un chapitre</a>
					<a class="text-info" href="index.php?action=editComments"> Gérer les commentaires </a>
					<a class="text-info" href="index.php?action=editUsers"> Gérer les membres</a>

					<?php
					}
					else {	}
					?>

					<a class="text-info" href="index.php?action=logOut"> Déconnexion </a>
				</div>

			</div>
		</nav>
	</header>
	<?= $content ?>

	
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="./js/tinyMCE.js"></script>
	<script type="text/javascript" src="./js/popper.js"></script>
	<script type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>