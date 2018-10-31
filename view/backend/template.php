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
					<a class="btn btn-info" href="index.php?action=listChapters">Accueil</a>

					<?php if ($_SESSION['group'] == 2) {
					?>

					<a class="btn btn-info" href="index.php?action=controlChapter"> Ajouter un chapitre</a>
					<a class="btn btn-info" href="index.php?action=editComments"> Gérer les commentaires 
					(<?php
					while ($data = $countReportComments->fetch()) {
						echo $data['count_coms'];
					}
					?>)
					</a>
					<a class="btn btn-info" href="index.php?action=editUsers"> Gérer les membres
					(<?php
					while ($data = $countUsers->fetch()) {
						echo $data['count_users'];
					}
					?>) 
					</a>

					<?php
					}
					else {	}
					?>

					<a class="btn btn-info" href="index.php?action=logOut"> Déconnexion </a>
				</div>

			</div>
		</nav>
	</header>
	<?= $content ?>

	<footer class="">
		<div class="text-center fixed-bottom bg-white">
		<?php
		setlocale(LC_TIME, 'fr_FR.utf8','fra');
		echo ucfirst(strftime('%A %#d %B %Y'));
		?>
		</div>
	</footer>

	
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="./js/tinyMCE.js"></script>
	<script type="text/javascript" src="./js/popper.js"></script>
	<script type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>