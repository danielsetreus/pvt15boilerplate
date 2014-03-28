<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
</head>
<body>
<div class="container">

	<h1>index.php</h1>
	<pre><code class="prettyprint"><?php
		$source = file_get_contents("index.php"); 
		$source = htmlspecialchars($source); 
		
		echo $source;
	?></code></pre>
	
	<h1>system/functions.php</h1>
	<pre><code class="prettyprint"><?php
		$source = file_get_contents("system/functions.php"); 
		$source = htmlspecialchars($source); 
		
		echo $source;
	?></code></pre>
	
	<h1>system/userClass.php</h1>
	<pre><code class="prettyprint"><?php
		$source = file_get_contents("system/userClass.php"); 
		$source = htmlspecialchars($source); 
		
		echo $source;
	?></code></pre>	
	
	<h1>javaCode/CallJava.class</h1>
	<pre><code class="prettyprint"><?php
		$source = file_get_contents("javaCode/CallJava.java"); 
		$source = htmlspecialchars($source); 
		
		echo $source;
	?></code></pre>	
</div>

</body>

</html>