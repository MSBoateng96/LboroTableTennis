<?php
require('globals.php');

$S1HomePlayerID = $_POST['S1HomePlayers'];
$S1HomePlayerQry = mysqli_query($conn, "SELECT Surname, Forename FROM players WHERE PlayerID='$S1HomePlayerID'");
while($row=mysqli_fetch_array($S1HomePlayerQry)) {
		$S1HomePlayer = $row['Forename']. " " .$row['Surname'];
	}
	
$S2HomePlayerID = $_POST['S2HomePlayers'];
$S2HomePlayerQry = mysqli_query($conn, "SELECT Surname, Forename FROM players WHERE PlayerID='$S2HomePlayerID'");
while($row=mysqli_fetch_array($S2HomePlayerQry)) {
		$S2HomePlayer = $row['Forename']. " " .$row['Surname'];
	}

$HomePlayers = array();
	array_push($HomePlayers, $S1HomePlayerID);
	if (! in_array($S2HomePlayerID, $HomePlayers)) {
		array_push($HomePlayers, $S2HomePlayerID);
		print_r($HomePlayers);
		echo "<br>Player Added to Array!";
	}
	 
	if (count($HomePlayers) == 2) {
		$qry1 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomePlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry1)) {
			$value1 = $row['Handicap'];	
		}
		
		$qry2 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomePlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry2)) {
			$value2 = $row['Handicap'];	
		}
		
		$HomeHandicap = ($value1 + $value2) * 12;
		echo $HomeHandicap;
	}


?>