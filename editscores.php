<?php
require('globals.php');

$Username = $_SESSION['username'];
$MatchID = $_POST['matchid'];
$Comments = $_POST['comments'];

//Updating the scores for the first singles set
$S1HomeGame1 = $_POST['S1HomeGame1'];
$S1AwayGame1 = $_POST['S1AwayGame1'];
$S1HomeGame2 = $_POST['S1HomeGame2'];
$S1AwayGame2 = $_POST['S1AwayGame2'];
$S1HomeGame3 = $_POST['S1HomeGame3'];
$S1AwayGame3 = $_POST['S1AwayGame3'];
$S1HomeGame4 = $_POST['S1HomeGame4'];
$S1AwayGame4 = $_POST['S1AwayGame4'];
$S1HomeTotal = $_POST['S1HomeTotal'];
$S1AwayTotal = $_POST['S1AwayTotal'];

//sql query
$sql = sprintf("UPDATE setssingles SET G1Home='$S1HomeGame1', G1Away='$S1AwayGame1', G2Home='$S1HomeGame2', G2Away='$S1AwayGame2', G3Home='$S1HomeGame3', G3Away='$S1AwayGame3', G4Home='$S1HomeGame4', G4Away='$S1AwayGame4', HomePoints='$S1HomeTotal', AwayPoints='$S1AwayTotal'");

//Updating the scores for the second singles set
$S2HomeGame1 = $_POST['S2HomeGame1'];
$S2AwayGame1 = $_POST['S2AwayGame1'];
$S2HomeGame2 = $_POST['S2HomeGame2'];
$S2AwayGame2 = $_POST['S2AwayGame2'];
$S2HomeGame3 = $_POST['S2HomeGame3'];
$S2AwayGame3 = $_POST['S2AwayGame3'];
$S2HomeGame4 = $_POST['S2HomeGame4'];
$S2AwayGame4 = $_POST['S2AwayGame4'];
$S2HomeTotal = $_POST['S2HomeTotal'];
$S2AwayTotal = $_POST['S2AwayTotal'];

//sql query
$sql1 = sprintf("UPDATE setssingles SET G1Home='$S2HomeGame1', G1Away='$S2AwayGame1', G2Home='$S2HomeGame2', G2Away='$S2AwayGame2', G3Home='$S2HomeGame3', G3Away='$S2AwayGame3', G4Home='$S2HomeGame4', G4Away='$S2AwayGame4', HomePoints='$S2HomeTotal', AwayPoints='$S2AwayTotal'");

//Updating the scores for the third singles set
$S3HomeGame1 = $_POST['S3HomeGame1'];
$S3AwayGame1 = $_POST['S3AwayGame1'];
$S3HomeGame2 = $_POST['S3HomeGame2'];
$S3AwayGame2 = $_POST['S3AwayGame2'];
$S3HomeGame3 = $_POST['S3HomeGame3'];
$S3AwayGame3 = $_POST['S3AwayGame3'];
$S3HomeGame4 = $_POST['S3HomeGame4'];
$S3AwayGame4 = $_POST['S3AwayGame4'];
$S3HomeTotal = $_POST['S3HomeTotal'];
$S3AwayTotal = $_POST['S3AwayTotal'];

//sql query
$sql2 = sprintf("UPDATE setssingles SET G1Home='$S3HomeGame1', G1Away='$S3AwayGame1', G2Home='$S3HomeGame2', G2Away='$S3AwayGame2', G3Home='$S3HomeGame3', G3Away='$S3AwayGame3', G4Home='$S3HomeGame4', G4Away='$S3AwayGame4', HomePoints='$S3HomeTotal', AwayPoints='$S3AwayTotal'");

//Updating the scores for the fourth singles set
$S4HomeGame1 = $_POST['S4HomeGame1'];
$S4AwayGame1 = $_POST['S4AwayGame1'];
$S4HomeGame2 = $_POST['S4HomeGame2'];
$S4AwayGame2 = $_POST['S4AwayGame2'];
$S4HomeGame3 = $_POST['S4HomeGame3'];
$S4AwayGame3 = $_POST['S4AwayGame3'];
$S4HomeGame4 = $_POST['S4HomeGame4'];
$S4AwayGame4 = $_POST['S4AwayGame4'];
$S4HomeTotal = $_POST['S4HomeTotal'];
$S4AwayTotal = $_POST['S4AwayTotal'];

//sql query
$sql3 = sprintf("UPDATE setssingles SET G1Home='$S4HomeGame1', G1Away='$S4AwayGame1', G2Home='$S4HomeGame2', G2Away='$S4AwayGame2', G3Home='$S4HomeGame3', G3Away='$S4AwayGame3', G4Home='$S4HomeGame4', G4Away='$S4AwayGame4', HomePoints='$S4HomeTotal', AwayPoints='$S4AwayTotal'");

//Updating the scores for the fourth singles set
$D1HomeGame1 = $_POST['D1HomeGame1'];
$D1AwayGame1 = $_POST['D1AwayGame1'];
$D1HomeGame2 = $_POST['D1HomeGame2'];
$D1AwayGame2 = $_POST['D1AwayGame2'];
$D1HomeGame3 = $_POST['D1HomeGame3'];
$D1AwayGame3 = $_POST['D1AwayGame3'];
$D1HomeGame4 = $_POST['D1HomeGame4'];
$D1AwayGame4 = $_POST['D1AwayGame4'];
$D1HomeTotal = $_POST['D1HomeTotal'];
$D1AwayTotal = $_POST['D1AwayTotal'];

//sql query
$sql4 = sprintf("UPDATE setssingles SET G1Home='$D1HomeGame1', G1Away='$D1AwayGame1', G2Home='$D1HomeGame2', G2Away='$D1AwayGame2', G3Home='$D1HomeGame3', G3Away='$D1AwayGame3', G4Home='$D1HomeGame4', G4Away='$D1AwayGame4', HomePoints='$D1HomeTotal', AwayPoints='$D1AwayTotal'");

//Updating the scores for the fourth singles set
$D2HomeGame1 = $_POST['D2HomeGame1'];
$D2AwayGame1 = $_POST['D2AwayGame1'];
$D2HomeGame2 = $_POST['D2HomeGame2'];
$D2AwayGame2 = $_POST['D2AwayGame2'];
$D2HomeGame3 = $_POST['D2HomeGame3'];
$D2AwayGame3 = $_POST['D2AwayGame3'];
$D2HomeGame4 = $_POST['D2HomeGame4'];
$D2AwayGame4 = $_POST['D2AwayGame4'];
$D2HomeTotal = $_POST['D2HomeTotal'];
$D2AwayTotal = $_POST['D2AwayTotal'];

//sql query
$sql5 = sprintf("UPDATE setssingles SET G1Home='$D2HomeGame1', G1Away='$D2AwayGame1', G2Home='$D2HomeGame2', G2Away='$D2AwayGame2', G3Home='$D2HomeGame3', G3Away='$D2AwayGame3', G4Home='$D2HomeGame4', G4Away='$D2AwayGame4', HomePoints='$D2HomeTotal', AwayPoints='$D2AwayTotal'");

if ($conn->query($sql) == TRUE && $conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE && $conn->query($sql3) == TRUE && $conn->query($sql4) == TRUE && $conn->query($sql5) == TRUE) {
	
	//Calculating Handicap Points for Home Team
	
	//Defining an array for all the players for the Home Team in the Match
	$HomePlayers = array();
	array_push($HomePlayers, $S1HomePlayerID);
	if (! in_array($S2HomePlayerID, $HomePlayers)) {
		array_push($HomePlayers, $S2HomePlayerID);
	}
	if (! in_array($S3HomePlayerID, $HomePlayers)) {
		array_push($HomePlayers, $S3HomePlayerID);
	}
	if (! in_array($S4HomePlayerID, $HomePlayers)) {
		array_push($HomePlayers, $S4HomePlayerID);
	}
	if (! in_array($D1HomePlayer1ID, $HomePlayers)) {
		array_push($HomePlayers, $D1HomePlayer1ID);
	}
	if (! in_array($D1HomePlayer2ID, $HomePlayers)) {
		array_push($HomePlayers, $D1HomePlayer2ID);
	}
	if (! in_array($D2HomePlayer1ID, $HomePlayers)) {
		array_push($HomePlayers, $D2HomePlayer1ID);
	}
	if (! in_array($D2HomePlayer2ID, $HomePlayers)) {
		array_push($HomePlayers, $D2HomePlayer2ID);
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
	}elseif (count($HomePlayers) > 2 && count($HomePlayers) <= 4) {
		$HomeSinglesPlayers = array();
		$HomeDoublesPlayers = array();
		
		//Defining an array for the Singles Players for the Home Team - Maximum of 2
		array_push($HomeSinglesPlayers, $S1HomePlayerID);
		if (! in_array($S2HomePlayerID, $HomeSinglesPlayers)) {
			array_push($HomeSinglesPlayers, $S2HomePlayerID);
		}
		if (count($HomeSinglesPlayers) = 1 && ! in_array($S3HomePlayerID, $HomeSinglesPlayers)) {
			array_push($HomeSinglesPlayers, $S3HomePlayerID);
		}
		if (count($HomeSinglesPlayers) = 1 && ! in_array($S4HomePlayerID, $HomeSinglesPlayers)) {
			array_push($HomeSinglesPlayers, $S4HomePlayerID);
		}
		
		//Defning an array for the Doubles Players for the Home Team
		array_push($HomeDoublesPlayers, $D1HomePlayer1ID);
		array_push($HomeDoublesPlayers, $D1HomePlayer2ID);
		array_push($HomeDoublesPlayers, $D2HomePlayer1ID);
		array_push($HomeDoublesPlayers, $D2HomePlayer2ID);
		
		//Getting the handicaps of the Singles Players
		$qry3 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeSinglesPlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry3)) {
			$value3 = $row['Handicap'];	
			$value3 = $value3 * 8;
		}
		
		$qry4 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeSinglesPlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry4)) {
			$value4 = $row['Handicap'];	
			$value4 = $value4 * 8;
		}
		
		$qry5 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeDoublesPlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry5)) {
			$value5 = $row['Handicap'];	
			$value5 = $value5 * 2;
		}
		$qry6 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeDoublesPlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry6)) {
			$value6 = $row['Handicap'];	
			$value6 = $value6 * 2;
		}
		$qry7 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeDoublesPlayers[2]'");
		while ($row=mysqli_fetch_assoc($qry7)) {
			$value7 = $row['Handicap'];	
			$value7 = $value7 * 2;
		}
		
		$qry8 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$HomeDoublesPlayers[3]'");
		while ($row=mysqli_fetch_assoc($qry8)) {
			$value8 = $row['Handicap'];	
			$value8 = $value8 * 2;
		}
		
		//Total Handicap for the Home Team
		$HomeHandicap = $value3 + $value4 + $value5 + $value6 + $value7 + $value8;
	
	}elseif (count($HomePlayers) < 2 || count($HomePlayers) > 4) {
		echo "<script>
	alert('There can only be between 2-4 Home Players in a Match!');
	</script>";
	}
	
	//Calculating Handicap Points for Away Team
	
	//Defining an array for all the players for the Away Team in the Match
	$AwayPlayers = array();
	array_push($AwayPlayers, $S1AwayPlayerID);
	if (! in_array($S2AwayPlayerID, $AwayPlayers)) {
		array_push($AwayPlayers, $S2AwayPlayerID);
	}
	if (! in_array($S3AwayPlayerID, $AwayPlayers)) {
		array_push($AwayPlayers, $S3AwayPlayerID);
	}
	if (! in_array($S4AwayPlayerID, $AwayPlayers)) {
		array_push($AwayPlayers, $S4AwayPlayerID);
	}
	if (! in_array($D1AwayPlayer1ID, $AwayPlayers)) {
		array_push($AwayPlayers, $D1AwayPlayer1ID);
	}
	if (! in_array($D1AwayPlayer2ID, $AwayPlayers)) {
		array_push($AwayPlayers, $D1AwayPlayer2ID);
	}
	if (! in_array($D2AwayPlayer1ID, $AwayPlayers)) {
		array_push($AwayPlayers, $D2AwayPlayer1ID);
	}
	if (! in_array($D2AwayPlayer2ID, $AwayPlayers)) {
		array_push($AwayPlayers, $D2AwayPlayer2ID);
	}
	
	if (count($AwayPlayers) == 2) {
		$qry9 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayPlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry9)) {
			$value9 = $row['Handicap'];	
		}
		
		$qry10 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayPlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry10)) {
			$value10 = $row['Handicap'];	
		}
		
		$AwayHandicap = ($value9 + $value10) * 12;
	}elseif (count($AwayPlayers) > 2 && count($AwayPlayers) <= 4) {
		$AwaySinglesPlayers = array();
		$AwayDoublesPlayers = array();
		
		//Defining an array for the Singles Players for the Away Team - Maximum of 2
		array_push($AwaySinglesPlayers, $S1AwayPlayerID);
		if (! in_array($S2AwayPlayerID, $AwaySinglesPlayers)) {
			array_push($AwaySinglesPlayers, $S2AwayPlayerID);
		}
		if (count($AwaySinglesPlayers) = 1 && ! in_array($S3AwayPlayerID, $AwaySinglesPlayers)) {
			array_push($AwaySinglesPlayers, $S3AwayPlayerID);
		}
		if (count($AwaySinglesPlayers) = 1 && ! in_array($S4AwayPlayerID, $AwaySinglesPlayers)) {
			array_push($AwaySinglesPlayers, $S4AwayPlayerID);
		}
		
		//Defning an array for the Doubles Players for the Away Team
		array_push($AwayDoublesPlayers, $D1AwayPlayer1ID);
		array_push($AwayDoublesPlayers, $D1AwayPlayer2ID);
		array_push($AwayDoublesPlayers, $D2AwayPlayer1ID);
		array_push($AwayDoublesPlayers, $D2AwayPlayer2ID);
		
		//Getting the handicaps of the Singles Players
		$qry11 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwaySinglesPlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry11)) {
			$value11 = $row['Handicap'];	
			$value11 = $value11 * 8;
		}
		
		$qry12 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwaySinglesPlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry12)) {
			$value12 = $row['Handicap'];	
			$value12 = $value12 * 8;
		}
		
		//Getting the handicaps of the Doubles Players
		$qry13 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayDoublesPlayers[0]'");
		while ($row=mysqli_fetch_assoc($qry13)) {
			$value13 = $row['Handicap'];	
			$value13= $value13 * 2;
		}
		$qry14 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayDoublesPlayers[1]'");
		while ($row=mysqli_fetch_assoc($qry14)) {
			$value14 = $row['Handicap'];	
			$value14 = $value14 * 2;
		}
		$qry15 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayDoublesPlayers[2]'");
		while ($row=mysqli_fetch_assoc($qry15)) {
			$value15 = $row['Handicap'];	
			$value15 = $value15 * 2;
		}
		
		$qry16 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$AwayDoublesPlayers[3]'");
		while ($row=mysqli_fetch_assoc($qry16)) {
			$value16 = $row['Handicap'];	
			$value16 = $value16 * 2;
		}
		
		//Total Handicap for the Away Team
		$AwayHandicap = $value11 + $value12 + $value13 + $value14 + $value15 + $value16;
	
	}elseif (count($AwayPlayers) < 2 || count($AwayPlayers) > 4) {
		echo "<script>
	alert('There can only be between 2-4 Away Players in a Match!');
	</script>";
	}
	
	//Calculating the Compensation Points
	$HomeCompensation = 0;
	$AwayCompensation = 0;
	
	//Determining whether compensation is needed from the First Singles Set
	$query1 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S1HomePlayerID'");
	while ($row=mysqli_fetch_assoc($query1)) {
			$S1HomeHandicap = $row['Handicap'];	
		}
	$query2 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S1AwayPlayerID'");
	while ($row=mysqli_fetch_assoc($query2)) {
			$S1AwayHandicap = $row['Handicap'];	
		}
	
	if ($S1HomeHandicap > $S1AwayHandicap){
		if (($S1HomeHandicap - $S1AwayHandicap) > 7) {
			$S1Compensation = ($S1AwayHandicap - $S1HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $S1Compensation;
			}
	}elseif ($S1AwayHandicap > $S1HomeHandicap) {
		if (($S1AwayHandicap - $S1HomeHandicap) > 7) {
			$S1Compensation = ($S1HomeHandicap - $S1AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $S1Compensation;
			}
		}
	
	//Determining whether compensation is needed from the Second Singles Set
	$query3 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S2HomePlayerID'");
	while ($row=mysqli_fetch_assoc($query3)) {
			$S2HomeHandicap = $row['Handicap'];	
		}
	$query4 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S2AwayPlayerID'");
	while ($row=mysqli_fetch_assoc($query4)) {
			$S2AwayHandicap = $row['Handicap'];	
		}
	
	if ($S2HomeHandicap > $S2AwayHandicap){
		if (($S2HomeHandicap - $S2AwayHandicap) > 7) {
			$S2Compensation = ($S2AwayHandicap - $S2HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $S2Compensation;
			}
	}elseif ($S2AwayHandicap > $S2HomeHandicap) {
		if (($S2AwayHandicap - $S2HomeHandicap) > 7) {
			$S2Compensation = ($S2HomeHandicap - $S2AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $S2Compensation;
			}
		}
		
	//Determining whether compensation is needed from the Third Singles Set
	$query5 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S3HomePlayerID'");
	while ($row=mysqli_fetch_assoc($query5)) {
			$S3HomeHandicap = $row['Handicap'];	
		}
	$query6 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S3AwayPlayerID'");
	while ($row=mysqli_fetch_assoc($query6)) {
			$S3AwayHandicap = $row['Handicap'];	
		}
	
	if ($S3HomeHandicap > $S3AwayHandicap){
		if (($S3HomeHandicap - $S3AwayHandicap) > 7) {
			$S3Compensation = ($S3AwayHandicap - $S3HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $S3Compensation;
			}
	}elseif ($S3AwayHandicap > $S3HomeHandicap) {
		if (($S3AwayHandicap - $S3HomeHandicap) > 7) {
			$S3Compensation = ($S3HomeHandicap - $S3AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $S3Compensation;
			}
		}
	
	//Determining whether compensation is needed from the Fourth Singles Set
	$query7 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S4HomePlayerID'");
	while ($row=mysqli_fetch_assoc($query7)) {
			$S4HomeHandicap = $row['Handicap'];	
		}
	$query8 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$S4AwayPlayerID'");
	while ($row=mysqli_fetch_assoc($query8)) {
			$S4AwayHandicap = $row['Handicap'];	
		}
	
	if ($S4HomeHandicap > $S4AwayHandicap){
		if (($S4HomeHandicap - $S4AwayHandicap) > 7) {
			$S4Compensation = ($S4AwayHandicap - $S4HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $S4Compensation;
			}
	}elseif ($S4AwayHandicap > $S4HomeHandicap) {
		if (($S4AwayHandicap - $S4HomeHandicap) > 7) {
			$S4Compensation = ($S4HomeHandicap - $S4AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $S4Compensation;
			}
		}
	
	//Determing whether compensation is needed from the first Doubles Set
	$query9 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D1HomePlayer1ID'");
	while ($row=mysqli_fetch_assoc($query9)) {
		$D1Home1Handicap = $row['Handicap'];	
	}
	$query10 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D1HomePlayer2ID'");
	while ($row=mysqli_fetch_assoc($query10)) {
		$D1Home2Handicap = $row['Handicap'];	
	}
	$query11 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D1AwayPlayer1ID'");
	while ($row=mysqli_fetch_assoc($query11)) {
		$D1Away1Handicap = $row['Handicap'];	
	}
	$query12 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D1AwayPlayer2ID'");
	while ($row=mysqli_fetch_assoc($query12)) {
		$D1Away2Handicap = $row['Handicap'];	
	}

	//If there is only 2 players in the match for the home team
	if (count($HomePlayers) == 2) {
			$D1HomeHandicap = ($D1Home1Handicap + $D1Home2Handicap) * 12;
	}elseif (count($HomePlayers) > 2 && count($HomePlayers) <= 4) {
			$D1HomeHandicap = ($D1Home1Handicap + $D1Home2Handicap) * 2;
		}
	
	//If there is only 2 players in the match for the away team
	if (count($AwayPlayers) == 2) {
			$D1AwayHandicap = ($D1Away1Handicap + $D1Away2Handicap) * 12;
	}elseif (count($AwayPlayers) > 2 && count($AwayPlayers) <= 4) {
			$D1AwayHandicap = ($D1Away1Handicap + $D1Away2Handicap) * 2;
		}
		
	//Calculating Compensation
	if ($D1HomeHandicap > $D1AwayHandicap){
		if (($D1HomeHandicap - $D1AwayHandicap) > 7) {
			$D1Compensation = ($D1AwayHandicap - $D1HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $D1Compensation;
			}
	}elseif ($D1AwayHandicap > $D1HomeHandicap) {
		if (($D1AwayHandicap - $D1HomeHandicap) > 7) {
			$D1Compensation = ($D1HomeHandicap - $D1AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $D1Compensation;
			}
		}
	
	//Determing whether compensation is needed from the second Doubles Set
	$query13 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D2HomePlayer1ID'");
	while ($row=mysqli_fetch_assoc($query13)) {
		$D2Home1Handicap = $row['Handicap'];	
	}
	$query14 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D2HomePlayer2ID'");
	while ($row=mysqli_fetch_assoc($query14)) {
		$D2Home2Handicap = $row['Handicap'];	
	}
	$query15 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D2AwayPlayer1ID'");
	while ($row=mysqli_fetch_assoc($query15)) {
		$D2Away1Handicap = $row['Handicap'];	
	}
	$query16 = mysqli_query($conn, "SELECT Handicap FROM players WHERE PlayerID='$D2AwayPlayer2ID'");
	while ($row=mysqli_fetch_assoc($query16)) {
		$D2Away2Handicap = $row['Handicap'];	
	}

	//If there is only 2 players in the match for the home team
	if (count($HomePlayers) == 2) {
			$D2HomeHandicap = ($D2Home1Handicap + $D2Home2Handicap) * 12;
	}elseif (count($HomePlayers) > 2 && count($HomePlayers) <= 4) {
			$D2HomeHandicap = ($D2Home1Handicap + $D2Home2Handicap) * 2;
		}
	
	//If there is only 2 players in the match for the away team
	if (count($AwayPlayers) == 2) {
			$D2AwayHandicap = ($D2Away1Handicap + $D2Away2Handicap) * 12;
	}elseif (count($AwayPlayers) > 2 && count($AwayPlayers) <= 4) {
			$D2AwayHandicap = ($D2Away1Handicap + $D2Away2Handicap) * 2;
		}
		
	//Calculating Compensation
	if ($D2HomeHandicap > $D2AwayHandicap){
		if (($D2HomeHandicap - $D2AwayHandicap) > 7) {
			$D2Compensation = ($D2AwayHandicap - $D2HomeHandicap - 7) * 4;
			$HomeCompensation = $HomeCompensation + $D2Compensation;
			}
	}elseif ($D2AwayHandicap > $D2HomeHandicap) {
		if (($D2AwayHandicap - $D2HomeHandicap) > 7) {
			$D2Compensation = ($D2HomeHandicap - $D2AwayHandicap - 7) * 4;
			$AwayCompensation = $AwayCompensation + $D2Compensation;
			}
		}
		
	//Calculating the Overall Totals for the Home and Away Team
	$HomeScore = $S1HomeTotal + $S2HomeTotal + $S3HomeTotal + $S4HomeTotal + $D1HomeTotal + $D2HomeTotal + $HomeHandicap + $HomeCompensation;
	$AwayScore = $S1AwayTotal + $S2AwayTotal + $S3AwayTotal + $S4AwayTotal + $D1AwayTotal + $D2AwayTotal + $AwayHandicap + $AwayCompensation;
	
	$HomePoints = 0;
	$AwayPoints = 0;
	
	if ($HomeScore > $AwayScore) {
		$HomePoints = 3;
		$PointsDifference = $HomeScore - $AwayScore;
		if ($PointsDifference < 25) {
			$AwayPoints = 1;	
		}else{
			$AwayPoints = 0;
			}
	$sql6 = sprintf("UPDATE groups SET Wins=1, For='$HomeScore', Against='$AwayScore', Points='$HomePoints' WHERE Name='$HomeTeam'");
	$sql7 = sprintf("UPDATE groups SET Losses=1, For='$AwayScore', Against='$HomeScore', Points='$AwayPoints' WHERE Name='$AwayTeam'");	
	}elseif ($AwayScore > $HomeScore) {
		$AwayPoints = 3;
		$PointsDifference = $AwayScore - $HomeScore;
		if ($PointsDifference < 25) {
			$HomePoints = 1;	
		}else{
			$HomePoints = 0;
			}
	$sql6 = sprintf("UPDATE groups SET Losses=1, For='$HomeScore', Against='$AwayScore', Points='$HomePoints' WHERE Name='$HomeTeam'");
	$sql7 = sprintf("UPDATE groups SET Away=1, For='$AwayScore', Against='$HomeScore', Points='$AwayPoints' WHERE Name='$AwayTeam'");	
	}elseif ($HomeScore == $AwayScore) {
			$HomePoints = 2;
			$AwayPoints = 2;
	$sql6 = sprintf("UPDATE groups SET Draws=1, For='$HomeScore', Against='$AwayScore', Points='$HomePoints' WHERE Name='$HomeTeam'");
	$sql7 = sprintf("UPDATE groups SET Draws=1, For='$AwayScore', Against='$HomeScore', Points='$AwayPoints' WHERE Name='$AwayTeam'");
		}
}

//sql query
$sql8 = sprintf("UPDATE matches SET HomeScore='$HomeScore', AwayScore='$AwayScore', HomeHandicap='$HomeHandicap', AwayHandicap='$AwayHandicap', HomeCompensation='HomeCompensation', AwayCompensation='$AwayCompensation', ScoresAdded='Yes', ScoresAddedBy='$UserLoggedIn', Comments='$Comments' WHERE MatchID='$MatchID'");

if ($conn->query($sql) == TRUE && $conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE && $conn->query($sql3) == TRUE && $conn->query($sql4) == TRUE && $conn->query($sql5) == TRUE && $conn->query($sql6) == TRUE && $conn->query($sql7) == TRUE && $conn->query($sql8) == TRUE) {
	echo "<script>
   alert('Scores for this match have been succesfully added!');
   window.location.href='Fixtures.php';
   </script>";
}elseif ($conn->query($sql) == TRUE || $conn->query($sql1) == TRUE || $conn->query($sql2) == TRUE || $conn->query($sql3) == TRUE || $conn->query($sql4) == TRUE || $conn->query($sql5) == TRUE || $conn->query($sql6) == TRUE || $conn->query($sql7) == TRUE || $conn->query($sql8) == TRUE){
	echo "<script>
	alert('Scores have NOT been added! Please Try Again!');
	</script>";
}

?>