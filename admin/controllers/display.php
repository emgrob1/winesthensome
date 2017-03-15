<?php

class Display extends Controller{
	
		function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	
		$this->view->js = array('display/js/default.js');
		
	}
	
	
	function index() {

		$this->view->render('display/index');
	}
	
	
	function insertGrapes(){
		
		$this->model->insertGrapes();
	}
	
	
	function getGrapes(){
		$this->model->getGrapes();
	}
	
	
	function deleteGrapes(){
		$this->model->deleteGrapes();
	}
	
}

?>
