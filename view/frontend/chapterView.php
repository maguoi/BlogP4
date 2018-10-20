<?php $title = htmlspecialchars($chapter['title']); ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska </h1>
<p><a href="index.php"> Retour à la liste des chapitres </a></p>

<div class="chapter">
	<h3 class="chapterTitle">
		<?= htmlspecialchars($chapter['title']) ?>
		<em>le <?= $chapter['creation_date'] ?></em>
	</h3>
	<p>
		<?= nl2br($chapter['content']) ?>
	</p>
</div>

<h4>Commentaires</h4>

<form action="index.php?action=addComment&amp;id=<?= $chapter['id'] ?>" method="post">
	<div>
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
	<div>
		<label for="comment">Commentaire</label><br />
		<textarea id="comment" name="comment"></textarea>
	</div>
	<div>
		<input type="submit">
	</div>
</form>

<?php 
while ($comment = $comments->fetch()) 
{
?>
	<p><strong><?= htmlspecialchars($comment['author']) ?></strong><em> le <?= $comment['comment_date'] ?>  </em></p>
	<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php	
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
