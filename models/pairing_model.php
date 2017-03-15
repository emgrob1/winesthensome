<?php

class Pairing extends Model{
		
	public function __construct()
	{
		parent::__construct();
	}
	
		public function collect()
	{
		
		$sth = $this->db->prepare('SELECT * FROM pairings');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
	
	
}


?>