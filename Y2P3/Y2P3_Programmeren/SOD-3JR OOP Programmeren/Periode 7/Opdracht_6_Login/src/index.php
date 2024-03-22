<?php
    // Functie: Programma Login OOP 
    // Auteur: Maohua Fan

	// require_once('classes/user.php');
	require_once "../vendor/autoload.php";
	use Opdracht6Login\classes\User;


    // Initialisatie
?>

<!DOCTYPE html>

<html lang="en">

<body>

	<h3>PDO Login and Registration</h3>
	<hr/>

	<h3>Welcome op de HOME-pagina!</h3>
	<br />
	<?php

		// Activeer de session
		session_start();

		$user = new User();

		// Indien Logout geklikt
		if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
			$user->Logout();
		}

		// Check login session: staat de user in de session?
		if(!$user->IsLoggedin()){
			// Alert not login
			echo "U bent niet ingelogd. Login in om verder te gaan.<br><br>";
			// Toon login button
			echo '<a href = "login_form.php">Login</a>';
		} else {
			
			// select userdata from database
			// $user->GetUser($user->username);
			$user->GetUser($_SESSION['username']);
			
			// Print userdata
			echo "<h2>Het spel kan beginnen</h2>";
			echo "Je bent ingelogd met:<br/>";
			$user->ShowUser();
			echo "<br><br>";
			echo '<a href = "?logout=true">Logout</a>';
		}
	
	?>

</body>
</html>