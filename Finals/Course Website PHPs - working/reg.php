<?php
	if (isset($_POST['siteuser'])) {
		session_start();

		$_SESSION['siteuser'] = $_POST['siteuser'];
	}
	header('Location: index.php');
?>