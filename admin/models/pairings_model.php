<?php

class Pairings_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function insertPairings() 
	{
		$grape_id = $_POST['grapes'];
		
		$pairs_with = $_POST['pairs_with'];
			 
		$sth = $this->db->prepare('INSERT INTO pairings (grapes, pairs_with) VALUES (:grape_id, :pairs_with)');
		$sth->execute(array(':grape_id' => $grape_id, ':pairs_with' => $pairs_with, ));
		$data = array('grapes' => $grape_id, 'pairs_with' => $pairs_with, 'id' => $this->db->lastInsertId());
		
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
	

	
	function getGrapes()
	{
		
		$sth = $this->db->prepare('SELECT * FROM grapes');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}
}