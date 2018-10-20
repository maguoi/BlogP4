<?php $title = 'Interface d\'administration' ; ?>

<?php ob_start(); ?>

<h1> Espace de gestion de membres</h1>
<p><a href="index.php?action=listChapters"> Retour au menu précédent </a></p>


<table class="table table-dark w-50 m-auto">
	<thead>
		<th class="text-center" scope="col"> Login </th>
		<th class="text-center" scope="col"> membre 1 / admin 2 </th>
		<th class="text-center" scope="col"> adresse E-mail </th>
		<th class="text-center" scope="col"> administrer </th>
	</thead>
	<tbody class="p-2">
	<?php

	while($data = $usersList->fetch())
	{
	?>
		<tr>
			<td class="text-center"><?= htmlspecialchars($data['login']) ?></td>
			<td class="text-center"><?= htmlspecialchars($data['id_groupe']) ?></td>
			<td class="text-center"><?= htmlspecialchars($data['mail']) ?></td>
			<td><form class="d-flex justify-content-center" method="post" action="index.php?action=moveUser">
				<?php echo '<input type="hidden" class="login" id="login" name="login" value="' . $data["login"] . '">'; ?>
				<select class="user_select" name="user_select" id="user_select">
					<option value="membre"> membre </option>
					<option value="admin"> admin </option>
				</select>
				<input class="" type="submit" name="submit">
			</form></td>
		</tr>
	<?php
	}
	$usersList->closeCursor();
	?>
	</tbody>
</table>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>