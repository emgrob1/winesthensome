<?php

class Grapes extends Controller{
	function __construct(){
		parent::__construct();
		$this->view->js = array('grapes/js/default.js');
	}
	
	
	function indexAction(){
  	$list = $this->model->getGrapes();
	    $data['list'] = $list;
	    $this->load->view('grapes/index', $data);
	}
	
	function index() {
		$list = $this->model->getGrapes(); 
	$this->view->list = $list;

 $this->view->render('grapes/index');
  }
	
	
	function insertGrapes(){
		$this->model->grapesInsert();
	}
	
	function getGrapes(){
		
	 return $this->model->getGrapes();

	}
	
	function showList(){
	
		
	}
}

?>
