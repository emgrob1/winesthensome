<?php

class Pairings extends Controller{
	
		function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	
		$this->view->js = array('pairings/js/default.js');
		
	}
	
	
	function index() {

		$this->view->render('pairings/index');
	}
	
	function insertPairings(){
		$this->model->insertPairings();
		
	}
	
	function getPairings(){
		$this->model->getPairings();
	}
	
	function deletePairings(){
		$this->model->deletePairings();
	}
	
	function clearFields(){
		echo 'clear';
	}
	
}

?>
