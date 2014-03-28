<?php
	
	function getFrontPath() {
		if (BASE_URL != "/")
			return BASE_URL . "/"; 
			
		return BASE_URL;
	}

?>