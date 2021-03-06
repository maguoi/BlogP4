<?php $title = 'Bienvenue, ' . $_SESSION['login'] . '!' ; ?>

<?php ob_start(); ?>


<h1> Vous êtes connecté ! </h1>
<?php
while ($data = $chapters->fetch())
{
?>
	<div class="p-2 w-50 m-auto table table-dark ">
		<h3>
			<?= htmlspecialchars($data['title']) ?>
			<em>posté le <?= $data['creation_date'] ?></em>			
		</h3>
		<?php
		if ($_SESSION['group'] == 2) {
			?>
			<p><a href="index.php?action=toEditChapter&amp;id=<?= $data['id'] ?>"> éditer le chapitre </a></p>
		<?php
		}
		else{}
		?>
		<p>
			<?= $data['content'] ?>
			
			<p>
				<br />
				<em><a href="index.php?action=chapter&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
			</p>		
		</p>
	</div>
<?php
}
$chapters->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>