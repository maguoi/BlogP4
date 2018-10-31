<?php $title = 'Utilisateur enregistré' ; ?>

<?php ob_start(); ?>


<h1> Espace de connexion </h1>

<h2> Votre inscription est un franc succès ! <br/> Vous pouvez à présent vous connecter ! </h2>

<div class="d-flex flex-row p-3 mb-2 bg-secondary text-white">
	<form class="p-3 mb-2 bg-secondary text-white" action="index.php?action=loginQuestion" method="post">
		<div>
			<p><strong> Connexion </strong></p>
			<label for="login">Pseudo</label>
			<br />
			<input type="text" class="login" name="login">
		</div>
		<div>
			<label for="password"> Mot de passe </label><br />
			<input type="password" class="password" name="password"></input>
		</div>
		<div>
			<input class="m-5 btn btn-success" type="submit">
		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>