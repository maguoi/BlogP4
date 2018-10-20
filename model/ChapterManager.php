<?php

require_once("model/Manager.php");

// 

class ChapterManager extends Manager
{
	public function getChapters()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, creation_date FROM chapters ORDER BY id');

		return $req;
	}

	public function getHeaderChapters()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title FROM chapters ORDER BY id');

		return $req;
	}

	public function getChapter($chapterId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, creation_date FROM chapters WHERE id = ?');
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

	//erase chapter and comments chapter 
}