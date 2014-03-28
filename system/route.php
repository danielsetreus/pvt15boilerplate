<?php
	/*
	This file takes the request argument and transforms it to the correct script
	*/

	$routes = array (
		'search' 	=> 'query/order',
		'user' 		=> 'userid',
		'user/edit'	=> 'userid',
	);
	
	
	define("ACTION", makeRoute($_GET['request']));
	$arguments = registerArguments(ACTION, $_GET['request']);
	
	// Function to callculate what route will become
	function makeRoute($requestUrl) {
		global $routes;
		$length = 0;
		$foundMatch = false;
		foreach($routes as $action => $arguments) {
			$routeLength = strlen($action);
			
			if (substr($requestUrl, 0, $routeLength) === $action) { // We've found a matching route
				$foundMatch = true;
				if ($routeLength > $length) {
					$bestMatch = $action;
					$length = $routeLength;
				}
			}
			
		}
		if ($foundMatch) {
			//registerArguments($bestMatch, $requestUrl);
			return $bestMatch;
		}
		
		return "unknown";
	}
	
	
	function registerArguments($action, $requestUrl) {
		global $routes;
		$requestUrl = str_replace($action . "/", "", $requestUrl);
		$requestArgs = explode("/", $requestUrl);
		$actionArgs = explode("/", $routes[$action]);
		
		$count = 0;
		foreach($requestArgs as $arg) {
			
			if (array_key_exists($count, $actionArgs)) {
				$arguments[$actionArgs[$count]] = $arg;
			} else {
				$arguments["arg" . ($count + 1)] = $arg;
			}
			$count ++;
		}
		return $arguments;
	}
?>