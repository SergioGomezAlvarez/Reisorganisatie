<?php

if (isset($_SESSION['username'])) {
	session_destroy();
	// Stuur de gebruiker door naar de uitlogpagina of een andere gewenste bestemming
	header("Location: logout.php"); // Vervang "logout.php" door de gewenste bestemming
	exit();
} else {
?>
<button id="myBtn">Open Modal</button>

<div id="myModal" class="modal">

	<div class="modal-content">
		<span class="close">&times;</span>
		<p>Some text in the Modal..</p>
	</div>

</div>
<?php }


///
?>