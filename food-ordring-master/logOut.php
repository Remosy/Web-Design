<?php
	
	session_start();
	unset($_SESSION['iuser']);
	session_destroy();
	header('Location: index.php');		
?>