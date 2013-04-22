<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM sal_users');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function userSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, login, role FROM sal_users WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}
	
	public function create($data)
	{
		$sth = $this->db->prepare('INSERT INTO sal_users 
			(`login`, `password`, `role`) 
			VALUES (:login, :password, :role)
			');
		
		$sth->execute(array(
			':login' => $data['login'],
			':password' => $data['password'],
			':role' => $data['role']
		));
	}
	
	public function editSave($data)
	{
		$sth = $this->db->prepare('UPDATE sal_users
			SET `login` = :login, `password` = :password, `role` = :role
			WHERE id = :id
			');
		
		$sth->execute(array(
			':id' => $data['id'],
			':login' => $data['login'],
			':password' => md5($data['password']),
			':role' => $data['role']
		));
	}
	
	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM sal_users WHERE id = :id');
		$sth->execute(array(
			':id' => $id
		));
	}
}