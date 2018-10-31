<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');


function homeAdmin()
{
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters();
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/successLogin.php');
}

function listChaptersBack()
{
	$chapterManager = new ChapterManager();
	$chapters = $chapterManager->getChapters();
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();


	require('view/backend/liChaptersTemplate.php');
	require('view/backend/listChaptersView.php');


	
}

function chapterBack()
{
	$chapterManager = new ChapterManager();
	$commentManager = new CommentManager();

	$chapter = $chapterManager->getChapter($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/chapterView.php');
}

/* ---------------- */
// model commentaire fonction 
// description de la fonction 
// $title, $content : parametre attendu + type attendu 
/* ---------------- */
function addChapter($title, $content) 
{
	$chapterManager = new ChapterManager();
	$affectedLines = $chapterManager->postChapter($title, $content);

	if ($affectedLines === false) {
		throw new Exception("Impossible d'ajouter le Chapitre ! ");
	}
	else {
		header('Location: index.php?action=listChapters');
	}
}

/* ---------------- */
//pppp
/* ---------------- */

function controlChapter()
{
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/addChapter.php');
}

function getUser($login)
{
	$userManager = new UserManager();
	$result = $userManager->getUser($login);
	//var_dump($result);
	//die();

	$isPasswordCorrect = password_verify($_POST['password'], $result['password']);
	if (!$result) {
		$chapterManager = new ChapterManager();
		$ulChapters = $chapterManager->getHeaderChapters();
		echo "Erreur d'authentification ";
		require('view/frontend/liChaptersTemplate.php');
		require('view/frontend/loginUser.php');
	}
	else {
		if ($isPasswordCorrect) {

			$_SESSION['id'] = $result['id'];
			$_SESSION['login'] = $login;
			$_SESSION['group'] = $result['id_groupe'];
			echo "<p class='fixed-top position-relative text-success'> Connexion réussie ! </p>";
			homeAdmin();
			
		}
		else {
			
		$chapterManager = new ChapterManager();
		$ulChapters = $chapterManager->getHeaderChapters();
		echo "Erreur d'authentification ";
		require('view/frontend/liChaptersTemplate.php');
		require('view/frontend/loginUser.php');

		}
	}
}

function successLogin()
{
	require('view/backend/successLogin.php');
}

function listReportComments()
{
	$commentManager = new CommentManager();
	$reportComments = $commentManager->getReportComments();
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/editComments.php');
}

function reportComment()
{
	$commentManager = new CommentManager();
	$addReportComment = $commentManager->changeCommentState($_GET['id']);
	
}

function eraseComment()
{
	$commentManager = new CommentManager();
	$eraseThisComment = $commentManager->eraseComment($_GET['id']);
}

function replaceComment()
{
	$commentManager = new CommentManager();
	$addReplaceComment = $commentManager->replaceComment($_GET['id']);
}
function toEditChapter()
{
	$chapterManager = new ChapterManager();
	$toEditChapter = $chapterManager->toEditChapter($_GET['id']);
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/editChapter.php');
}

function editChapter()
{
	$chapterManager = new ChapterManager();
	$editChapter = $chapterManager->editChapter($_POST['title'], $_POST['content'], $_GET['id']);

}

function eraseChapter()
{
	$chapterManager = new ChapterManager();
	$eraseChapter = $chapterManager->eraseChapter($_GET['id']);
}
function editUsers() 
{
	$userManager = new UserManager();
	$usersList = $userManager->getUsers();
	$chapterManager = new ChapterManager();
	$ulChapters = $chapterManager->getHeaderChapters();
	$commentManager = new CommentManager();
	$countReportComments = $commentManager->countReportComments();
	$userManager = new UserManager();
	$countUsers = $userManager->countUsers();

	require('view/backend/liChaptersTemplate.php');
	require('view/backend/editUsers.php');
}

function moveUser1()
{
	$userManager = new UserManager();
	$moveUser = $userManager->moveUserToMembre($_POST['login']);

	echo "<p class='fixed-top position-relative text-success'> changement effectué ! </p>";

}
function moveUser2()
{
	$userManager = new UserManager();
	$moveUser = $userManager->moveUserToAdmin($_POST['login']);

	echo "<p class='fixed-top position-relative text-success'> changement effectué ! </p>";

}
function eraseUser()
{
	$userManager = new UserManager();
	$eraseUser = $userManager->eraseUser($_POST['login']);

	echo "<p class='fixed-top position-relative text-success'> membre supprimé ! </p>";
}
