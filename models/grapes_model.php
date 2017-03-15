<?php

class Grapes_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function grapesInsert() 
	{
		$name = $_POST['name'];
		$color = $_POST['color'];		
		$sth = $this->db->prepare('INSERT INTO grapes (color, name) VALUES (:color, :name)');
		$sth->execute(array(':color' => $color, ':name' => $name, ));
		
		$data = array('color' => $color, 'name' => $name, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}
	
	
	function getGrapes()
	{
		$sth = $this->db->prepare('SELECT * FROM grapes');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		return $data;
	}
	
	function deleteListing()
	{
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM grapes WHERE id = "'.$id.'"');
		$sth->execute();
	}
	

}