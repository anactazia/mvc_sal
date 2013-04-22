<?php

class Dashboard_Model extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function userSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, login, password, role, name, email FROM sal_users WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}

}