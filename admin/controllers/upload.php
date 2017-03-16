<?php

class Upload extends Controller{

	function storeFile() {
		$fname = $_FILES['uploadFile']['name'];
		$tmp_name = $_FILES['uploadFile']['tmp_name'];

		if (isset($fname)){
			if(!empty($fname)){
				$location = UPLOADS . '/';
			
				if(move_uploaded_file($tmp_name, $location.$fname)){
					echo 'Uploaded';
						header('Location: http://localhost/winesthensome/admin/grapes');
				
				} else {
					echo 'Please select a file';
				}
			}
			}
		
	}
}

?>
