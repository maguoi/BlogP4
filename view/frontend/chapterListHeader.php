<?php ob_start(); ?>
<ul class="nav navbar navbar-right">
<?php
while ($data = $chaptersBis->fetch()) 
{
?>
<li>
	<a href="index.php?action=chapter&amp;id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a>
</li>
<?php
}
$chaptersBis->closeCursor();
?>
</ul>
<?php $chapterListHeader = ob_get_clean(); ?>

<?php require('template.php'); ?>