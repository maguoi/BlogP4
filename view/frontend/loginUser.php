<?php $title = 'Connexion' ; ?>

<?php ob_start(); ?>


<h1> Espace de connexion </h1>

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

	<form class="p-3 mb-2 bg-secondary text-white" action="index.php?action=addUser" method="post">
		<p><strong> Pas encore inscrit ? </strong></p>
		<div>
			<label for="login">Pseudo</label>
			<br />
			<input type="text" class="login" name="login">
		</div>
		<div>
			<label for="password"> Mot de passe </label><br />
			<input type="password" class="password" name="password"></input>
		</div>
		<div>
			<label for="mail"> Adresse Email </label>
			<br />
			<input type="email" id="mail" name="mail">
		</div>
		<div>
			<input class="m-5 btn btn-success" type="submit">
		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>