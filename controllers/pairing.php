<?php

class Pairing extends Controller{
	
	function __construct(){
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
		$this->view->js = array('pairing/js/pairings.js');
	}
	
	function index() {
		echo 'pairing';
		$this->view->render('pairing/index');
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
	
	public function pairingList(){
		$this->model->collect();
	}
	
	public function pairingListDel(){
		$this->model->delete();
	}
}

?>
