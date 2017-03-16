<?php

class Pairing extends Controller{
	
	function __construct(){
		parent::__construct();		
		$this->view->js = array('pairing/js/default.js');
	}

	function indexAction(){
  		$list = $this->model->getGrapes();
	    $data['list'] = $list;
	    $this->load->view('pairing/index', $data);
		
		
	}
	
	function index() {
		$list = $this->model->getGrapes(); 
		$this->view->list = $list;
		
		
		$this->view->render('pairing/index');
	}

	function getFood(){
		$this->model->getFood();
	}	
}

?>
