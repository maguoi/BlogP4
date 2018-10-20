<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

// functions about chapters

function listChapters()
{
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters();

	require('view/frontend/listChaptersView.php');
	
}
function logOut()
{
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters();
	session_destroy();
	require('view/frontend/logOut.php');
	
}
function  chaptersHeader()
{
	$chapterManagerHeader = new ChapterManager();
	$chaptersBis = $chapterManagerHeader->getHeaderChapters();

	require('view/frontend/chapterListHeader.php');
}

function chapter()
{
	$chapterManager = new ChapterManager();
	$commentManager = new CommentManager();

	$chapter = $chapterManager->getChapter($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

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
	require('view/frontend/loginUser.php');
}

function successRegistration()
{
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


