<?php

	// En array som innehåller två olika användare. Men denna array kommer antagligen - i verkligheten - från en databas
	$users = array(
		'1' => array ('email' => 'test@test.com', 		'password' => 'lösenord', 'name' => 'Testanvändare CV-konto'),
		'2' => array ('email' => 'rekryterare@test.com','password' => 'lösenord', 'name' => 'Testanvändare Rekryterare'),
	);
	
	// Array som håller respektive användares roll - i verkligheten info från en databastabell
	$privs = array(
		array ('privLevel' => 'user'),
		array ('privLevel' => 'recruiter'),
	);
	
	
	class User {
		// Instansvariabler - vi håller dem privata och låter get-funktioner returnera dem. 
		private $id;
		private $email;
		private $name;
		
		// Konstruktor. Tar in användar-id - för att kunna hämta informationen om den användaren.
		function User($userId) {
			global $users; // Bara för att kunna hämta info från users-arrayen. Här hade man i 
					// verkligheten haft en databasanslutning som hämtar informationen. 
						
			if (array_key_exists($userId, $users)) { // Kolla om användare med id userId existerar
				// Sätt värden på instansvariabler
				$this->id = $userId; 				// Instansvariabler
				$this->email = $users[$userId]['email'];	// ..
				$this->name = $users[$userId]['name'];		// ..
			} else 
				throw new Exception("User with id " . $userId . " was not found."); // Användaren finns inte!
				
		}
		
		function getPrivLevel() {
			global $privs; // I verklogheten hade man här gjort en databasfråga för att kolla vilken typ av användare det är.
			return $privs[$this->id]['privLevel'];
		}
		
		function getName() {
			return $this->name;
		}
		
	}
	
?>