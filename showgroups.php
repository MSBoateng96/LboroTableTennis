<?php

require_once('globals.php');
session_start();

$teamid = $_POST['TeamID'];
$positionfirst = $_POST['PositionFirst'];
$namefirst = $_POST['NameFirst'];
$winsfirst = $_POST['WinsFirst'];
$drawsfirst = $_POST['DrawsFirst'];
$lossesfirst = $_POST['LossesFirst'];
$forfirst = $_POST['ForFirst'];
$againstfirst = $_POST['AgainstFirst'];
$pointsfirst = $_POST['PointsFirst'];

$qry = "INSERT into Groups (Name) VALUES ('$namefirst')";
		$result = $conn->query($qry);
		
		if ($result) {
	echo "
    		alert('Your item was successfully uploaded!');
		window.location = 'Homepage.php';
	";

}
else {
	echo "
    		alert('Error: Upload was unsuccessful');
		window.location = 'Groups.php';
	";
}
	
?>
