<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, login, password, role, name, email FROM sal_users');
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function userSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, login, password, role, name, email FROM sal_users WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}
	
	
	public function create($data)
	{
		$sth = $this->db->prepare('INSERT INTO sal_users 
			(`login`, `password`, `role`, `name`, `email`) 
			VALUES (:login, :password, :role, :name, :email)
			');
		
		$sth->execute(array(
			':login' => $data['login'],
			':password' => $data['password'],
			':role' => $data['role'],
			':name' => $data['name'],
			':email' => $data['email']
			
		));
	}
	
	public function usercreate($data)
	{
		$sth = $this->db->prepare('INSERT INTO sal_users 
			(`login`, `password`, `role`, `name`, `email`) 
			VALUES (:login, :password, :role, :name, :email)
			');
		
		$sth->execute(array(
			':login' => $data['login'],
			':password' => $data['password'],
			':role' => $data['role'],
			':name' => $data['name'],
			':email' => $data['email']
			
		));
	}
	
	public function editSave($data)
	{
		$sth = $this->db->prepare('UPDATE sal_users
			SET `login` = :login, `password` = :password, `role` = :role, `name` = :name, `email` = :email
			WHERE id = :id
			');
		
		$sth->execute(array(
			':id' => $data['id'],
			':login' => $data['login'],
			':password' => $data['password'],
			':role' => $data['role'],
			':name' => $data['name'],
			':email' => $data['email']
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