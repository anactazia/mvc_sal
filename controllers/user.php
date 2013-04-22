<?php

class User extends Controller {
	

	public function __construct() {
		parent::__construct();
		Session::init();

		$logged = Session::get('loggedIn');
		$role = Session::get('role');
		$id = Session::get('id');
		$user = Session::get('login');
		$email = Session::get('email');	
		
	}
	
	public function adminindex() 
	{	
		$this->view->userList = $this->model->userList();
		$this->view->render('user/adminindex');
	}
	
	public function userindex() 
	{	
		$this->view->userList = $this->model->userList();
		$this->view->render('user/userindex');
	}
	
		
	public function admin() 
	{	
		$this->view->userList = $this->model->userList();
		$this->view->render('user/admin');
	}
	

	public function usercreate() 
	{	
		$this->view->render('user/usercreate');
	}
	
	
	public function create() 
	{
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		
		// @TODO: Do your error checking!
		
		$role = Session::get('role');
		$this->model->create($data);
		if($role == 'admin') {header('location: ' . URL . 'user/admin');}
		else {$this->view->render('login/created');;}
	}
	
	
	public function edit($id) 
	{	
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/adminedit');

	}
	
		public function useredit() 
	{	$id = Session::get('id');
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/useredit');
		

	}
	
		
	public function editSave($id)
	{
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
		header('location: ' . URL . 'user/admin');
	}
	
	
	public function usereditSave($id)
	{
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = md5($_POST['password']);
		$data['role'] = $_POST['role'];
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
		header('location: ' . URL . 'user/useredit');
	}
	
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'user/admin');
	}
	public function userdelete($id)
	{
		$this->model->delete($id);
		Session::destroy();
		$this->view->render('dashboard/deleted');
	}
	

	

}
