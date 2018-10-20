<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="w-100 p-3 d-flex justify-content-between">
					<a href="index.php">Jean Forteroche</a>
					<a href="index.php?action=connexionArea"> Connexion </a>
				</div>

			</div>
		</nav>
	</header>
	<?= $content ?>
</body>
</html>