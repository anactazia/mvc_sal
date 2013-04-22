<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT id, role FROM sal_users WHERE 
				login = :login AND password = MD5(:password)");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));
		
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			Session::set('id', $data['id']);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		
	}
	
}
