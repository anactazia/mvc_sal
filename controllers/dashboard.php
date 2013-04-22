<?php

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		$email = Session::get('email');
		$user = Session::get('login');
		$id = Session::get('id');

		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	
		$this->view->js = array('dashboard/js/default.js');
		
	}
	
	function index() 
	{	
		$role = Session::get('role');
		if($role == 'admin') {$this->view->render('dashboard/adminindex');}
		else {$this->view->render('dashboard/userindex');}
	}
	
	function logout()
	{
		Session::destroy();
		$this->view->render('dashboard/logout');
		exit;
	}
	
	
	

}
