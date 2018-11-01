<?php $title = 'Billet simple pour l\'Alaska' ; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska </h1>
<h2> Un roman de Jean Forteroche </h2>
<p> Liste des chapitres </p>

<?php
while ($data = $chapters->fetch())
{
?>
	<div class="p-2 w-50 m-auto table table-active ">
		<h3 class="chapterTitle">
			<?= htmlspecialchars($data['title']) ?>
			<br/>
			<em class="font-weight-light h5">posté le <?= $data['creation_date'] ?></em>			
		</h3>
		<p>
			<?php
			$content = $data['content'];
			$nbMax = 400;
			if (strlen($content)>= $nbMax) {
				$content = substr($content, 0, $nbMax). '...';
				echo $content;
			}
			else{
				echo $data['content'];
			} 
			?>
			
			<p class="d-flex justify-content-center">
				<br />
				<a class="btn btn-warning text-dark mx-4" href="index.php?action=chapter&amp;id=<?= $data['id'] ?>">Lire le chapitre</a>
				<a class="btn btn-warning text-dark mx-4" href="index.php?action=chapter&amp;id=<?= $data['id'] ?>#comments">Commentaires (<?= $data['nb_coms'] ?>)</a>
			</p>		
		</p>
	</div>
<?php
}
$chapters->closeCursor();
echo '<p align="center">Page : ';
for($i=1; $i<=$nombreDePages; $i++)
{
	if($i ==$pageActuelle)
	{
		echo ' [ '.$i.' ] ';
	}
	else
	{
		echo ' <a href="index.php?action=listChapters&page='.$i.'">'.$i.'</a> ';
	}
}
echo '</p>';
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
 