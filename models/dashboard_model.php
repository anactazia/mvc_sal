<?php

class Dashboard_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function xhrInsert() 
	{
		$text = $_POST['text'];
		
		$sth = $this->db->prepare('INSERT INTO sal_data (text) VALUES (:text)');
		$sth->execute(array(':text' => $text));
		
		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}
	
	public function xhrGetListings()
	{
		$sth = $this->db->prepare('SELECT * FROM sal_data');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
	
	public function xhrDeleteListing()
	{
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM sal_data WHERE id = "'.$id.'"');
		$sth->execute();
	}

}