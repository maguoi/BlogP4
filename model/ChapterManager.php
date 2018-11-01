<?php

require_once("model/Manager.php");

// 

class ChapterManager extends Manager
{
	public function getChapters($pageActuelle)
	{
		$chapitresParPage=5;
		$premiereEntree=($pageActuelle-1)*$chapitresParPage;

		$db = $this->dbConnect();
		$req = $db->query('SELECT b.id, b.title, b.content, DATE_FORMAT(b.creation_date, GET_FORMAT(DATE, "EUR")) AS creation_date, COUNT(c.id) AS nb_coms FROM chapters AS b LEFT JOIN comments AS c ON c.chapter_id = b.id GROUP BY id ORDER BY b.id LIMIT '.$premiereEntree.', '.$chapitresParPage.'');

		return $req;


	}

	public function getHeaderChapters()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title FROM chapters ORDER BY id DESC LIMIT 5');

		return $req;

		
	}

	public function getChapter($chapterId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, GET_FORMAT(DATE, "EUR")) AS creation_date FROM chapters WHERE id = ?');
		$req->execute(array($chapterId));
		$chapter = $req->fetch();

		return $chapter;

		
	}

	public function postChapter($title, $content)
	{
		$db = $this->dbConnect();
		$chapters = $db->prepare('INSERT INTO chapters(title, content, creation_date) VALUES(?, ?, NOW())');
		$affectedLines = $chapters->execute(array($title, $content));

		return $affectedLines;
	}

	public function toEditChapter($chapterId)
	{
		$db = $this->dbConnect();
		$toEditChapter = $db->prepare('SELECT id, title, content, creation_date FROM chapters WHERE id = ?');
		$toEditChapter->execute(array($chapterId));

		return $toEditChapter;
	}

	public function editChapter($title, $content, $chapterId)
	{
		$db = $this->dbConnect();
		$editChapter = $db->prepare('UPDATE chapters SET title = ?, content = ? WHERE id = ?');
		$editChapter->execute(array($title, $content, $chapterId));

		return $editChapter;
	}

	public function eraseChapter($chapterId)
	{
		$db = $this->dbConnect();
		$eraseChapter = $db->prepare('DELETE chapters, comments FROM chapters INNER JOIN comments WHERE chapters.id = comments.chapter_id AND chapters.id = ?');
		$eraseChapter->execute(array($chapterId));

		return $eraseChapter;
	}
	 
	public function paginationChapters()
	{
		$chapitresParPage = 5;


		$db = $this->dbConnect();
		$retour_total = $db->query('SELECT id AS total FROM chapters');
		$total = $retour_total->rowCount();


		$nombreDePages = ceil($total/$chapitresParPage);

		return $nombreDePages;


	} 
}