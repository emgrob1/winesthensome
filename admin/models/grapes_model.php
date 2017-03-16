<?php

class Grapes_Model extends Model {

	function __construct() {
		parent::__construct();
	}

	function insertGrapes() {
		$name = $_POST['name'];
		$color = $_POST['color'];
		$image = $_FILES['inputFile']['name'];
		$tmp_name = $_FILES['inputFile']['tmp_name'];

		if (isset($image)) {
			if (!empty($image)) {
				$location = UPLOADS . '/';

				if (move_uploaded_file($tmp_name, $location . $image)) {

					$sth = $this -> db -> prepare('INSERT INTO grapes (color, name, image) VALUES (:color, :name, :image)');
					$sth -> execute(array(':color' => $color, ':name' => $name, ':image' => $image));

					$data = array('color' => $color, 'name' => $name, 'image' => $image, 'id' => $this -> db -> lastInsertId());
					echo json_encode($data);

					header('Location: http://localhost/winesthensome/admin/grapes');
				} else {
					echo 'Please select a file';
				}
			}
		}

	}

	function getGrapes() {

		$sth = $this -> db -> prepare('SELECT * FROM grapes');
		$sth -> setFetchMode(PDO::FETCH_ASSOC);
		$sth -> execute();
		$data = $sth -> fetchAll();
		echo json_encode($data);
	}

	function deleteGrapes() {
		$id = $_POST['id'];
		$sth = $this -> db -> prepare('DELETE FROM grapes WHERE id = "' . $id . '"');
		$sth -> execute();
	}

}
