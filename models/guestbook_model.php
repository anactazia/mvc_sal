<?php

class Guestbook_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function guestbookList()
	{
		$sth = $this->db->prepare('SELECT id, topic, message, writer FROM sal_guestbook');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function guestbookSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, topic, message, writer FROM sal_guestbook WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}
	
	public function create($data)
	{
		$sth = $this->db->prepare('INSERT INTO sal_guestbook 
			(`topic`, `message`, `writer`) 
			VALUES (:topic, :message, :writer)
			');
		
		$sth->execute(array(
			':topic' => $data['topic'],
			':message' => $data['message'],
			':writer' => $data['writer']
		));
	}
	
	public function editSave($data)
	{
		$sth = $this->db->prepare('UPDATE sal_guestbook
			SET `topic` = :topic, `message` = :message, `writer` = :writer
			WHERE id = :id
			');
		
		$sth->execute(array(
			':id' => $data['id'],
			':topic' => $data['topic'],
			':message' => $data['message'],
			':writer' => $data['writer']
		));
	}
	
	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM sal_guestbook WHERE id = :id');
		$sth->execute(array(
			':id' => $id
		));
	}
}