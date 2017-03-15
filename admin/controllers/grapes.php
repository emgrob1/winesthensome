<?php

class Grapes extends Controller{
	
		function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	
		$this->view->js = array('grapes/js/default.js');
		
	}
	
	
	function index() {

		$this->view->render('grapes/index');
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
