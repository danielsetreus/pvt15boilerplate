<?php
session_start(); 

	require "userClass.php";

	// Funktion för att kontrollera inlogg - och sätta en session om inlogg lyckas.	
	// Returnerar true om inlogg lyckades - false om den misslyckades
	function doLogin($email, $password) {
		
		global $users; // I verkligheten hade man här gjort ett databasanrop 
						// för att leta efter användare med matchande inloggsuppgifter
		
		foreach($users as $userId => $userData) {
			if ($userData['email'] == $email && $userData['password'] == $password) {
				$_SESSION['logedIn'] = $userId;
				return true; 
			}
		}
		return false;
		
	}
	
	// Kontrollerar om en användare är inloggad med ett giltigt konto. 
	// Returnerar id på inloggad användare, eller false om ingen är inloggad (med giltigt konto)
	function logedIn() {
		global $users; 
		$user = $_SESSION['logedIn'];
		if (array_key_exists($user, $users)) return $user;
		
		return false; 
	}
	
	// Loggar ut en användare. 
	// Returnerar användar-id på användaren som loggades ut, eller false om det inte fanns någon inloggad. 
	function doLogOut() {
		if ($user = logedIn()) {
			unset($_SESSION['logedIn']); // Tar bort session
			return $user;
		} else {
			return false; 
		}
	}
	
?>