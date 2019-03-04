<?php
        session_start();
	error_reporting(E_ALL);

echo "<!DOCTYPE html>
<html>
<body onload = 'logoutAlert()'>


<script>";
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
	echo "function logoutAlert() {
    		alert('You have successfully logged out!');
		window.location = 'Homepage.php';
	}";
    session_destroy();
}
else {
	echo "function logoutAlert() {
    		alert('Error: No user logged in to log out.');
		window.location = 'Homepage.php';
	}";
}
echo "</script>

</body>
</html>";
?>