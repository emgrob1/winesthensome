<?php

class Grapes_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function insertGrapes() 
	{
		
		//Get the file
$content = file_get_contents($_POST['inputFile']);
//Store in the filesystem.
$fp = fopen("/www/winesthensome/admin/public/images/grapes", "w");
fwrite($fp, $content);
fclose($fp);
		
		$name = $_POST['name'];
		$color = $_POST['color'];	
		$image = $_POST['inputFile'];	
		
		$sth = $this->db->prepare('INSERT INTO grapes (color, name, image) VALUES (:color, :name, :image)');
		$sth->execute(array(':color' => $color, ':name' => $name, ':image' => $image ));
		
		$data = array('color' => $color, 'name' => $name, 'image' => $image, 'id' => $this->db->lastInsertId());
		echo json_encode($data);

	}
	
	
	function getGrapes()
	{
		$sth = $this->db->prepare('SELECT * FROM grapes');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
	
	function deleteGrapes()
	{
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM grapes WHERE id = "'.$id.'"');
		$sth->execute();
	}
	

}