<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body class="bodyStyle">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="w-100 p-3 d-flex justify-content-between bg-secondary">
					<?= $listUlChapters ?>
					<a class="btn btn-outline-warning" href="index.php">Accueil</a>
					<a class="btn btn-outline-warning" href="index.php?action=connexionArea"> Connexion </a>
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
	<script type="text/javascript" src="./js/popper.js"></script>
	<script type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
