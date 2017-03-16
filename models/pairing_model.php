<?php

class Pairing_Model extends Model {

private $list;

	function __construct() {
		parent::__construct();
	}
	function getGrapes()
	{
		$sth = $this->db->prepare('SELECT * FROM grapes ORDER by name');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		$this->list = $data;
		return $data;
	}
	
	function getFood()
	{

		 $grape = $_POST['grape_id'];

$sth = $this->db->prepare('SELECT * FROM pairings WHERE grapes =  "'.$grape.'"');
			$sth->setFetchMode(PDO::FETCH_ASSOC);
		 $sth->execute();
		$data = $sth->fetchColumn(PDO::FETCH_ASSOC);
		echo json_encode($data);
	}

}