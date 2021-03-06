<?php

require_once("model/Manager.php");

//

class CommentManager extends Manager
{
	public function getComments($chapterId)
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, author, comment, comment_date, comment_state_id FROM comments WHERE chapter_id = ? AND comment_state_id = 1 ORDER BY comment_date DESC');
		$comments->execute(array($chapterId));

		return $comments;
	}

	public function postComment($chapterId, $author, $comment)
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(chapter_id, author, comment, comment_date, comment_state_id) VALUES(?, ?, ?, NOW(), 1)');
		$affectedLines = $comments->execute(array($chapterId, $author, $comment));

		return $affectedLines;
	}

	public function getComment($commentId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, author, comment, comment_date FROM comments WHERE id = ? ORDER BY comment_date DESC');
		$req->execute(array($commentId));
		$comment = $req->fetch();

		return $comment;
	}
	public function getReportComments()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, chapter_id, author, comment, comment_date, comment_state_id FROM comments WHERE comment_state_id = 2 ORDER BY comment_date DESC');

		return $req;
	}
	public function changeCommentState($commentId)
	{
		$db = $this->dbConnect();
		$addReportComment = $db->prepare('UPDATE comments SET comment_state_id = 2 WHERE id = ?');
		$addReportComment->execute(array($commentId));

		return $addReportComment;

	}
	public function eraseComment($commentId)
	{
		$db = $this->dbConnect();
		$eraseThisComment = $db->prepare('DELETE FROM comments WHERE id = ?');
		$eraseThisComment->execute(array($commentId));

		return $eraseThisComment;
	}

	public function replaceComment($commentId)
	{
		$db = $this->dbConnect();
		$addReplaceComment = $db->prepare('UPDATE comments SET comment_state_id = 1 WHERE id = ?');
		$addReplaceComment->execute(array($commentId));

		return $addReplaceComment;
	}
}