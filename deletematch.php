<?php

require('globals.php');

$MatchID = $_POST['matchid'];

$qry = sprintf("DELETE matches, setssingles, setsdoubles 
FROM matches
LEFT JOIN setssingles ON (setssingles.MatchID=matches.MatchID)
LEFT JOIN setsdoubles ON (setsdoubles.MatchID=matches.MatchID)
WHERE matches.MatchID=$MatchID");
		
		if ($conn->query($qry) === TRUE) {
			echo "The Match has now been deleted!";
			$_SESSION['valid'] = true;
			$_SESSION['timeout'] = time();
			header( 'Location: Fixtures.php' ) ;
			die();
		die();	
		}else {
			$_SESSION['error'] = "<p>The Match was not deleted! Please Try Again!</p>";	
		}

$conn->close();
?>





