<?php $title = 'Bienvenue, ' . $_SESSION['login'] . '!' ; ?>
 
<?php ob_start(); ?>


<h1 class="text-white"> Vous êtes connecté ! </h1>
<?php
while ($data = $chapters->fetch())
{
?>
	<div class="p-2 w-50 m-auto table table-dark ">
		<h3>
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
				<a class="btn btn-info mx-2" href="index.php?action=chapter&amp;id=<?= $data['id'] ?>">Lire le chapitre</a>
				<a class="btn btn-info mx-2" href="index.php?action=chapter&amp;id=<?= $data['id'] ?>#comments">Commentaires (<?= $data['nb_coms'] ?>)</a>
				<?php
				if ($_SESSION['group'] == 2) {
				?>
					<a class="btn btn-info mx-2" href="index.php?action=toEditChapter&amp;id=<?= $data['id'] ?>"> éditer le chapitre </a>
				<?php
				}
				else{}
				?>
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