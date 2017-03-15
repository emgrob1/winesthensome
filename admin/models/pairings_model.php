<?php

class Pairings_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function insertPairings() 
	{
		$grape = $_POST['grape'];
		$pairs_with = $_POST['pairs_with'];		 
		$sth = $this->db->prepare('INSERT INTO pairings (grape, pairs_with) VALUES (:grape	, :pairs_with)');
		$sth->execute(array(':grape' => $grape, ':pairs_with' => $pairs_with, ));
		$data = array('grape' => $grape, 'pairs_with' => $pairs_with, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}
	
	function getPairings()
	{
		$sth = $this->db->prepare('SELECT * FROM pairings');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
	
	function deletePairings()
	{
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM pairings WHERE id = "'.$id.'"');
		$sth->execute();
	}
	

}