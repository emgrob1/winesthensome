<?php

class Help{
	function __construct(){
		echo 'We are in Help<br/>';
	}
	
	public function other($arg = false){
		echo 'We are inside Other<br/>';
		echo 'Optional ' . $arg . '<br.>';
	}
}

?>
