<?php $title =  'Bienvenue, ' . $_SESSION['login'] . '!' ; ?>

<?php ob_start(); ?>
<h1 class="text-white"> Esapce de gestion des commentaires </h1>
<p><a class="btn btn-info" href="index.php?action=listChapters"> Retour au menu précédent </a></p>
<h4 class="text-white"> Ces commentaires ont été jugés comme étant inappropriés </h4><br/>
<table class="table table-dark">
	<thead>
		<th class="text-center" scope="col"> Login </th>
		<th class="text-center" scope="col"> Contenu </th>
		<th class="text-center" scope="col"> Date du commentaire </th>
		<th class="text-center" scope="col"> Chapitre </th>
		<th class="text-center" scope="col"> Suppression </th>
		<th class="text-center" scope="col"> Réinsertion </th>
	</thead>
	<tbody class="p-2">
<?php

while ($data = $reportComments->fetch())
{
	
?>
	<tr>
		<td class="text-center">
			<?= htmlspecialchars($data['author'])?>
		</td>
		<td class="text-center">
			<?= htmlspecialchars($data['comment']) ?>
		</td>
		<td class="text-center">
			<?= $data['comment_date'] ?>
		</td>
		<td class="text-center">
			chapitre <?= $data['chapter_id'] ?>
		</td>
		<td class="text-center">
			<a class="btn btn-danger m-2" href="index.php?action=eraseComment&amp;id=<?= $data['id'] ?>">
				Supprimer
		</td>
		<td class="text-center">
			<a class="btn btn-success m-2" href="index.php?action=replaceComment&amp;id=<?= $data['id'] ?>">
				réinsérer
		</td>		
	</tr>
<?php

}
$reportComments->closeCursor();

?>
	</tbody>
</table>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
