<?php $title = htmlspecialchars($chapter['title']); ?>
 
<?php ob_start(); ?>
<h1 class="text-white">Billet simple pour l'Alaska </h1>
<p><a class="btn btn-info" href="index.php?action=listChapters"> Retour à la liste des chapitres </a></p>

<div class="w-75 p-2 m-auto table table-dark">
	<h3 class="w-50 m-auto p-1 bg-secondary">
		<?= htmlspecialchars($chapter['title']) ?>
		<em>le <?= $chapter['creation_date'] ?></em>
	</h3>
	<br/>
	<p>
		<?= nl2br($chapter['content']) ?>
	</p>
</div>
<br/>
<h4 class="text-white">Commentaires</h4>
<br/>
<div class="d-flex">
	<div class="w-50 p-2">
		<p class="table table-dark w-50 p-1 m-auto border border-secondary"> Ajoutez votre commentaire</p>
		<form class="table table-dark w-50 p-1 m-auto" action="index.php?action=addComment&amp;id=<?= $chapter['id'] ?>" method="post">
			<div class="w-50 m-auto p-2">
				<label for="author">Auteur</label>
				<br />
				<?php if(isset($_SESSION['login'])) {
					echo "<div>" . $_SESSION['login'] . "</div>";
					echo '<input type="hidden" id="author" name="author" value="' . $_SESSION["login"] . '">';
				} 
				else {
					echo '<input type="text" id="author" name="author">';
				}
				?>
			</div>
			<div class="w-50 m-auto p-2">
				<label for="comment">Commentaire</label><br />
				<textarea id="comment" name="comment"></textarea>
			</div>
			<div class="w-25 p-2 m-auto">
				<input class="btn-success" type="submit">
			</div>
		</form>
	</div>
	<div class="w-50 p-2 m-auto table table-dark">
		<h4 class="w-50 p-2 m-auto border border-secondary" id="comments"> Espace commentaires </h4>
		<br/>
		<?php 
		while ($comment = $comments->fetch()) 
		{
		?>
			<div class="w-75 m-auto border border-secondary">
				<p>
					<strong class="float-left mx-2 p-2"><?= htmlspecialchars($comment['author']) ?></strong>
					<em> le <?= $comment['comment_date'] ?>  </em>
					<a class="float-right m-2 btn btn-danger" href="index.php?action=reportComment&amp;id=<?= $comment['id'] ?>">Signaler</a>
				</p>
				<p class="text-left mx-2 p-2"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
			</div>
		<?php	
		}
		$comments->closeCursor();
		echo '<p align="center">Page : ';
		for($i=1; $i<=$nombreDePages; $i++)
		{
			if($i ==$pageActuelle)
			{
				echo ' [ '.$i.' ] ';
			}
			else
			{
				echo ' <a href="index.php?action=chapter&id='.$chapter['id'].'&page='.$i.'#comments">'.$i.'</a> ';
			}
		}
		echo '</p>';

		?>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>