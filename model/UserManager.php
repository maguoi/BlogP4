<?php

require_once('model/Manager.php');

//

class UserManager extends Manager
{
	public function getUser($login)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, password, id_groupe FROM user WHERE login = :login');
		$req->execute(array('login' => $login));

		$result = $req->fetch(); 

		return $result;
	}

	public function addUser($login, $password, $mail)
	{
		$db = $this->dbConnect();
		$users = $db->prepare('INSERT INTO user(login, password, mail, id_groupe) VALUES(?, ?, ?, 1)');
		$affectedLines = $users->execute(array($login, $password, $mail));

		return $affectedLines;
	}
	public function getUsers()
	{
		$db = $this->dbConnect();
		$users = $db->query('SELECT id, login, mail, id_groupe FROM user ORDER BY login');

		return $users;
	}
	public function moveUserToMembre($login)
	{
		$db = $this->dbConnect();
		$moveUser = $db->prepare('UPDATE user SET id_groupe = 1 WHERE login = :login');
		$moveUser->execute(array('login' => $login));

		return $moveUser;
	}
	public function moveUserToAdmin($login)
	{
		$db = $this->dbConnect();
		$moveUser = $db->prepare('UPDATE user SET id_groupe = 2 WHERE login = :login');
		$moveUser->execute(array('login' => $login));

		return $moveUser;
	}
	public function eraseUser($login)
	{
		$db = $this->dbConnect();
		$eraseUser = $db->prepare('DELETE FROM user WHERE login = :login');
		$eraseUser->execute(array('login' => $login));

		return $eraseUser;
	}
	public function countUsers()
	{
		$db = $this->dbConnect();
		$countUsers = $db->query('SELECT id, COUNT(id) AS count_users FROM user');

		return $countUsers;
	}

}