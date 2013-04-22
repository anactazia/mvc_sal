<?php

class Guestbook extends Controller {

	public function __construct() {
		parent::__construct();

		}

	
	public function index() 
	{	
		$this->view->guestbookList = $this->model->guestbookList();
		$this->view->render('guestbook/index');
	}
	
	public function create() 
	{
		$data = array();
		$data['topic'] = $_POST['topic'];
		$data['message'] = $_POST['message'];
		$data['writer'] = $_POST['writer'];
		
		
		$this->model->create($data);
		header('location: ' . URL . 'guestbook');
	}
	
	public function edit($id) 
	{
		$this->view->guestbook = $this->model->guestbookSingleList($id);
		$this->view->render('guestbook/edit');
	}
	
	public function editSave($id)
	{
		$data = array();
		$data['id'] = $id;
		$data['topic'] = $_POST['topic'];
		$data['message'] = $_POST['message'];
		$data['writer'] = $_POST['writer'];
		
		
		$this->model->editSave($data);
		header('location: ' . URL . 'guestbook');
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'guestbook');
	}
}
