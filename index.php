<?php
session_start();
require('controller/frontend.php');
require('controller/backend.php');

try {
	if (isset($_GET['action'])) {
		if (isset($_SESSION['group'])){
			// espace membre
			if ($_GET['action'] == 'chapter') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					if (isset($_GET['page'])) {
						$pageActuelle = intval($_GET['page']);
						chapterBack($pageActuelle);
					}
					else{
						chapterBack(1);	
					}
				}
				else {
					throw new Exception("Ce chapitre n'existe pas");				
				}
			}
			elseif($_GET['action'] == 'listChapters') {				
				if (isset($_GET['page'])) {
					$pageActuelle = intval($_GET['page']);
					listChaptersBack($pageActuelle);
				}
				else{
					listChaptersBack(1);	
				}
			}
			elseif ($_GET['action'] == 'logOut') {
				logOut(1);
			}
			elseif ($_GET['action'] == 'reportComment') {
				reportComment();
				echo "<p class='fixed-top position-relative text-success'> Commentaire signalé ! </p>";
				listChaptersBack(1);
			}
			elseif ($_GET['action'] == 'loginQuestion') {
				listChaptersBack(1);
			}
			elseif ($_GET['action'] == 'connexionArea') {
				listChaptersBack(1);
			}
			elseif ($_GET['action'] == 'addComment') {
				if(isset($_GET['id']) && $_GET['id'] > 0) {
					if (!empty($_POST['author']) && !empty($_POST['comment'])) {
						addComment($_GET['id'], $_POST['author'], $_POST['comment']);
					}
					else {
						throw new Exception("Des informations sont manquantes ! ");
					}
				}
				else {
					throw new Exception("Ce chapitre n'existe pas ! ");
				}
			}
			if ($_SESSION['group'] == 2) {
			// espace admin
				if ($_GET['action'] == 'controlChapter') { // this action is a backend action
					controlChapter();
				}
				elseif ($_GET['action'] == 'addChapter') {
					if (!empty($_POST['title']) && !empty($_POST['content'])) {
						addChapter($_POST['title'], $_POST['content']);
					}
					else {
						throw new Exception("Des informations sont manquantes");
					}
				}
				elseif ($_GET['action'] == 'toEditChapter') {
					toEditChapter();
				}
				elseif($_GET['action'] == 'editChapter') {
					editChapter();
					listChaptersBack(1);
				}
				elseif ($_GET['action'] == 'eraseChapter') {
					eraseChapter();
					listChaptersBack(1);
				}
				elseif ($_GET['action'] == 'editComments') {
					listReportComments();
				}
				elseif ($_GET['action'] == 'eraseComment') {
					eraseComment();
					echo "<p class='fixed-top position-relative text-success'> Commentaire effacé ! </p>";
					listReportComments();
					
				}
				elseif ($_GET['action'] == 'replaceComment') {
					replaceComment();
					echo "<p class='fixed-top position-relative text-success'> Commentaire réinséré ! </p>";
					listReportComments();
					
				}
				elseif ($_GET['action'] == 'editUsers') {
					editUsers();
				}
				elseif ($_GET['action'] == 'moveUser') {
					if ($_POST['user_select'] == 'membre') {
						moveUser1();
						editUsers();
					}
					elseif ($_POST['user_select'] == 'admin') {
						moveUser2();
						editUsers();
					}
					else {
						listChaptersBack(1);
					}
				}
				elseif ($_GET['action'] == 'eraseUser') {
					eraseUser();
					editUsers();
				}
			}	
		}
		else { // espace non-membre	
			if ($_GET['action'] == 'listChapters') {
				if (isset($_GET['page'])) {
					$pageActuelle = intval($_GET['page']);
					listChapters($pageActuelle);
				}
				else{
					listChapters(1);	
				}	
			}
			elseif ($_GET['action'] == 'connexionArea') {
				connexionArea();
			}
			elseif ($_GET['action'] == 'chapter') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					if (isset($_GET['page'])) {
						$pageActuelle = intval($_GET['page']);
						chapter($pageActuelle);
					}
					else{
						chapter(1);	
					}
				}
				else {
					throw new Exception("Ce chapitre n'existe pas");				
				}
			}
			elseif ($_GET['action'] == 'successRegistration' ){
				successRegistration();
			}				
			elseif ($_GET['action'] == 'addComment') {
				if(isset($_GET['id']) && $_GET['id'] > 0) {
					if (!empty($_POST['author']) && !empty($_POST['comment'])) {
						addComment($_GET['id'], $_POST['author'], $_POST['comment']);
					}
					else {
						throw new Exception("Des informations sont manquantes ! ");
					}
				}
				else {
					throw new Exception("Ce chapitre n'existe pas ! ");
				}
			}
			elseif ($_GET['action'] == 'addUser') {
				if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['mail'])) {
					addUser($_POST['login'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['mail']);
				}
				else {
					throw new Exception("Des informations sont manquantes !");
				}
			}
			elseif ($_GET['action'] == 'loginQuestion') { // a enlever de cette partie 
				getUser($_POST['login']);
			}
			elseif ($_GET['action'] == 'controlChapter') { // this action is a backend action
				controlChapter();
			}
			elseif ($_GET['action'] == 'logOut') {
				logOut(1);
			}
		}
	}	
	else {
		if (isset($_GET['page'])) {
			$pageActuelle = intval($_GET['page']);
			listChapters($pageActuelle);
		}
		else{
			listChapters(1);	
		}
	}
}
catch (Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}

// 	if (isset($_GET['action'])) {  avant
// if (isset($_SESSION['id_groupe']) && $_SESSION['id_groupe'] = 2) {partie admin actions} else { reste des utilisations}

