<?php
    
    session_start();
  	include 'globals.php';
	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$qry = sprintf("SELECT * FROM admin WHERE Username='$user' AND Password='$pass'");
	$result = $conn->query($qry);
		if (!$row = $result->fetch_assoc()) {
			$_SESSION['error'] = "<p>Wrong password or user does not exist.</p>";
		die();
			
		} else {
			echo "You are now logged in.";
		$_SESSION['valid'] = true;
		$_SESSION['timeout'] = time();
		$_SESSION['username'] = $user;
		header( 'Location: Homepage.php' ) ;
		die();
	}

?>