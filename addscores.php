<?php
require('globals.php');

$MatchID = $_POST['matchid'];
$HomeTeam = $_POST['hometeam'];
$AwayTeam = $_POST['awayteam'];
$HomeTotal = $_POST['HomeTotal'];
$AwayTotal = $_POST['AwayTotal'];
$Comments = $_POST['comments'];
$SinglesSets = mysqli_query($conn,"SELECT COUNT(SetID) as Singles_Sets FROM setssingles");
while($row=mysqli_fetch_array($SinglesSets)) {
		$SinglesSetID=$row['Singles_Sets'] + 100001;
	}
$DoublesSets = mysqli_query($conn,"SELECT COUNT(SetID) as Doubles_Sets FROM setsdoubles");
while($row=mysqli_fetch_array($DoublesSets)) {
		$DoublesSetID=$row['Doubles_Sets'] + 100001;
	}

//Adding the scores for the first singles set
$S1HomePlayer = $_POST['S1HomePlayer'];
$S1HomeGame1 = $_POST['S1HomeGame1'];
$S1AwayGame1 = $_POST['S1AwayGame1'];
$S1HomeGame2 = $_POST['S1HomeGame2'];
$S1AwayGame2 = $_POST['S1AwayGame2'];
$S1HomeGame3 = $_POST['S1HomeGame3'];
$S1AwayGame3 = $_POST['S1AwayGame3'];
$S1HomeGame4 = $_POST['S1HomeGame4'];
$S1AwayGame4 = $_POST['S1AwayGame4'];
$S1AwayPlayer = $_POST['S1AwayPlayer'];
$S1HomeTotal = $_POST['S1HomeTotal'];
$S1AwayTotal = $_POST['S1AwayTotal'];

//sql query
$sql = sprintf("INSERT INTO setssingles (SetID, MatchID, HomePlayer, AwayPlayer, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$SinglesSetID', '$MatchID', '$S1HomePlayer', '$S1AwayPlayer', '$S1HomeGame1', '$S1AwayGame1', '$S1HomeGame2', '$S1AwayGame2', '$S1HomeGame3', '$S1AwayGame3', '$S1HomeGame4', '$S1AwayGame4', '$S1HomeTotal', $S1AwayTotal)");

$SinglesSetID = $SinglesSetID + 1;

//Adding the scores for the second singles set
$S2HomePlayer = $_POST['S2HomePlayer'];
$S2HomeGame1 = $_POST['S2HomeGame1'];
$S2AwayGame1 = $_POST['S2AwayGame1'];
$S2HomeGame2 = $_POST['S2HomeGame2'];
$S2AwayGame2 = $_POST['S2AwayGame2'];
$S2HomeGame3 = $_POST['S2HomeGame3'];
$S2AwayGame3 = $_POST['S2AwayGame3'];
$S2HomeGame4 = $_POST['S2HomeGame4'];
$S2AwayGame4 = $_POST['S2AwayGame4'];
$S2AwayPlayer = $_POST['S2AwayPlayer'];
$S2HomeTotal = $_POST['S2HomeTotal'];
$S2AwayTotal = $_POST['S2AwayTotal'];

//sql query
$sql1 = sprintf("INSERT INTO setssingles (SetID, MatchID, HomePlayer, AwayPlayer, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$SinglesSetID', '$MatchID', '$S2HomePlayer', '$S2AwayPlayer', '$S2HomeGame1', '$S2AwayGame1', '$S2HomeGame2', '$S2AwayGame2', '$S2HomeGame3', '$S2AwayGame3', '$S2HomeGame4', '$S2AwayGame4', '$S2HomeTotal', $S2AwayTotal)");

$SinglesSetID = $SinglesSetID + 1;

//Adding the scores for the third singles set
$S3HomePlayer = $_POST['S3HomePlayer'];
$S3HomeGame1 = $_POST['S3HomeGame1'];
$S3AwayGame1 = $_POST['S3AwayGame1'];
$S3HomeGame2 = $_POST['S3HomeGame2'];
$S3AwayGame2 = $_POST['S3AwayGame2'];
$S3HomeGame3 = $_POST['S3HomeGame3'];
$S3AwayGame3 = $_POST['S3AwayGame3'];
$S3HomeGame4 = $_POST['S3HomeGame4'];
$S3AwayGame4 = $_POST['S3AwayGame4'];
$S3AwayPlayer = $_POST['S3AwayPlayer'];
$S3HomeTotal = $_POST['S3HomeTotal'];
$S3AwayTotal = $_POST['S3AwayTotal'];

//sql query
$sql2 = sprintf("INSERT INTO setssingles (SetID, MatchID, HomePlayer, AwayPlayer, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$SinglesSetID', '$MatchID', '$S3HomePlayer', '$S3AwayPlayer', '$S3HomeGame1', '$S3AwayGame1', '$S3HomeGame2', '$S3AwayGame2', '$S3HomeGame3', '$S3AwayGame3', '$S3HomeGame4', '$S3AwayGame4', '$S3HomeTotal', $S3AwayTotal)");

$SinglesSetID = $SinglesSetID + 1;

//Adding the scores for the fourth singles set
$S4HomePlayer = $_POST['S4HomePlayer'];
$S4HomeGame1 = $_POST['S4HomeGame1'];
$S4AwayGame1 = $_POST['S4AwayGame1'];
$S4HomeGame2 = $_POST['S4HomeGame2'];
$S4AwayGame2 = $_POST['S4AwayGame2'];
$S4HomeGame3 = $_POST['S4HomeGame3'];
$S4AwayGame3 = $_POST['S4AwayGame3'];
$S4HomeGame4 = $_POST['S4HomeGame4'];
$S4AwayGame4 = $_POST['S4AwayGame4'];
$S4AwayPlayer = $_POST['S4AwayPlayer'];
$S4HomeTotal = $_POST['S4HomeTotal'];
$S4AwayTotal = $_POST['S4AwayTotal'];

//sql query
$sql3 = sprintf("INSERT INTO setssingles (SetID, MatchID, HomePlayer, AwayPlayer, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$SinglesSetID', '$MatchID', '$S4HomePlayer', '$S4AwayPlayer', '$S4HomeGame1', '$S4AwayGame1', '$S4HomeGame2', '$S4AwayGame2', '$S4HomeGame3', '$S4AwayGame3', '$S4HomeGame4', '$S4AwayGame4', '$S4HomeTotal', $S4AwayTotal)");

//Adding the scores for the fourth singles set
$D1HomePlayer1 = $_POST['D1HomePlayer1'];
$D1HomePlayer2 = $_POST['D1HomePlayer2'];
$D1HomeGame1 = $_POST['D1HomeGame1'];
$D1AwayGame1 = $_POST['D1AwayGame1'];
$D1HomeGame2 = $_POST['D1HomeGame2'];
$D1AwayGame2 = $_POST['D1AwayGame2'];
$D1HomeGame3 = $_POST['D1HomeGame3'];
$D1AwayGame3 = $_POST['D1AwayGame3'];
$D1HomeGame4 = $_POST['D1HomeGame4'];
$D1AwayGame4 = $_POST['D1AwayGame4'];
$D1AwayPlayer1 = $_POST['D1AwayPlayer1'];
$D1AwayPlayer2 = $_POST['D1AwayPlayer2'];
$D1HomeTotal = $_POST['D1HomeTotal'];
$D1AwayTotal = $_POST['D1AwayTotal'];

//sql query
$sql4 = sprintf("INSERT INTO setsdoubles (SetID, MatchID, HomePlayer1, HomePlayer2, AwayPlayer1, AwayPlayer2, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$DoublesSetID', '$MatchID', '$D1HomePlayer1', '$D1HomePlayer2', '$D1AwayPlayer1', '$D1AwayPlayer2', '$D1HomeGame1', '$D1AwayGame1', '$D1HomeGame2', '$D1AwayGame2', '$D1HomeGame3', '$D1AwayGame3', '$D1HomeGame4', '$D1AwayGame4', '$D1HomeTotal', '$D1AwayTotal')");

$DoublesSetID = $DoublesSetID + 1;

//Adding the scores for the fourth singles set
$D2HomePlayer1 = $_POST['D2HomePlayer1'];
$D2HomePlayer2 = $_POST['D2HomePlayer2'];
$D2HomeGame1 = $_POST['D2HomeGame1'];
$D2AwayGame1 = $_POST['D2AwayGame1'];
$D2HomeGame2 = $_POST['D2HomeGame2'];
$D2AwayGame2 = $_POST['D2AwayGame2'];
$D2HomeGame3 = $_POST['D2HomeGame3'];
$D2AwayGame3 = $_POST['D2AwayGame3'];
$D2HomeGame4 = $_POST['D2HomeGame4'];
$D2AwayGame4 = $_POST['D2AwayGame4'];
$D2AwayPlayer1 = $_POST['D2AwayPlayer1'];
$D2AwayPlayer2 = $_POST['D2AwayPlayer2'];
$D2HomeTotal = $_POST['D2HomeTotal'];
$D2AwayTotal = $_POST['D2AwayTotal'];

//sql query
$sql5 = sprintf("INSERT INTO setsdoubles (SetID, MatchID, HomePlayer1, HomePlayer2, AwayPlayer1, AwayPlayer2, G1Home, G1Away, G2Home, G2Away, G3Home, G3Away, G4Home, G4Away, HomePoints, AwayPoints) VALUES ('$DoublesSetID', '$MatchID', '$D2HomePlayer1', '$D2HomePlayer2', '$D2AwayPlayer1', '$D2AwayPlayer2', '$D2HomeGame1', '$D2AwayGame1', '$D2HomeGame2', '$D2AwayGame2', '$D2HomeGame3', '$D2AwayGame3', '$D2HomeGame4', '$D2AwayGame4', '$D2HomeTotal', '$D2AwayTotal')");

//sql query
$sql6 = sprintf("UPDATE matches SET HomeScore='$HomeTotal', AwayScore='$AwayTotal', ScoresAdded='Yes', ScoresAddedBy='$ScoresAddedBy', Comments='$Comments' WHERE MatchID='$MatchID'");

if ($conn->query($sql) == TRUE && $conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE && $conn->query($sql3) == TRUE && $conn->query($sql4) == TRUE && $conn->query($sql5) == TRUE && $conn->query($sql6) == TRUE) {
	echo "Set has been successfully been added!";
}else{
	echo "Set has not been added! Please go back and try again";
}

?>