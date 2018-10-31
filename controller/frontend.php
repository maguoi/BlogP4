<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

// functions about chapters

function listChapters($pageActuelle)
{
	$chapterManager = new ChapterManager();
	$nombreDePages = $chapterManager->paginationChapters();
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters($pageActuelle);
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();

	if ($pageActuelle>$nombreDePages || $pageActuelle<= 0) {
		listChapters(1);
	}
	else 
	{
		require('view/frontend/liChaptersTemplate.php');
		require('view/frontend/listChaptersView.php');
	}
	
}
function logOut($pageActuelle)
{
	$chapterManager = new ChapterManager();
	$nombreDePages = $chapterManager->paginationChapters();
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters($pageActuelle);
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	session_destroy();

	if ($pageActuelle>$nombreDePages || $pageActuelle<= 0) {
		listChapters(1);
	}
	else 
	{
		require('view/frontend/liChaptersTemplate.php');
		require('view/frontend/logOut.php');
	}
	
}


function chapter()
{
	$chapterManager = new ChapterManager();
	$commentManager = new CommentManager();
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();

	$chapter = $chapterManager->getChapter($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require('view/frontend/liChaptersTemplate.php');
	require('view/frontend/chapterView.php');
}

// functions about users

function addUser($login, $password, $mail)
{
	$userManager = new UserManager();
	$affectedLines = $userManager->addUser($login, $password, $mail);

	if($affectedLines === false) {
		throw new Exception(" Une erreur s'est produite vous ne pouvez pas vous inscrire !");
	}
	else {
		header('Location: index.php?action=successRegistration');
	}
}

function connexionArea()
{
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();

	require('view/frontend/liChaptersTemplate.php');
	require('view/frontend/loginUser.php');
}

function successRegistration()
{
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();

	require('view/frontend/liChaptersTemplate.php');
	require('view/frontend/successRegistration.php');
}


// functions about comments


function addComment($chapterId, $author, $comment)
{
	$commentManager = new CommentManager();
	$affectedLines = $commentManager->postComment($chapterId, $author, $comment);

	if ($affectedLines === false) {
		throw new Exception("Impossible d'ajouter le commentaire ! ");
	}
	else {
		header('Location: index.php?action=chapter&id=' . $chapterId);
	}
}


