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
</head>
<body>
<div class="container">
	<div class="well">
		<b>Logga in med...</b>
		<ol>
			<li>Anv: test@test.com, Lösen: lösenord</li>
			<li>Anv: rekryterare@test.com, Lösen: lösenord</li>
		</ol>
		<form action="index.php" method="post">
			<p>Användarnamn: <input type="text" placeholder="Användarnamn" name="userName"></p>
			<p>Lösenord: <input type="password" name="userPsw"></p>
			
			<p><input type="submit" name="doLogin" value="Logga in" class="btn btn-primary"></p>
		</form>
	</div>
	
<?php
	require "system/functions.php";

	if (isset($_POST['doLogin'])) {
		if (doLogin($_POST['userName'], $_POST['userPsw'])) {
			$user = new User(logedIn());
			?>
			<h1>Hej på dig <?php echo $user->getName();?></h1>
			<p>
				Det ser ut som att du har rollen <?php echo $user->getPrivLevel(); ?>.
			</p>
			<p>
				Logga ut...
				<?php
					$logedOut = doLogOut();
					if ($logedOut) {
						$logedOutUser = new User($logedOut); 
						echo "Utloggning lyckades - loggade ut " . $logedOutUser->getName();
					}
					else echo "Utloggning misslyckades... typ";
				?>
			</p>
			<?php
	
		} else {
			echo "Inloggningen misslyckades!";
		}
	}
?>

<h1><a href="code.php">Kod som används</a></h1>

<h3>Exempel på att kalla / köra Java från PHP:</h3>
<div class="well">
	<?php
		system('java -classpath javaCode CallJava', $retval);
		echo $retval;
	?>
</div>

</div>

</body>
</html>