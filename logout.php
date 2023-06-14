<?php

if (isset($_SESSION['username'])) {
	session_destroy();
	// Stuur de gebruiker door naar de uitlogpagina of een andere gewenste bestemming
	header("Location: index.php"); // Vervang "logout.php" door de gewenste bestemming
	exit();
}
?>