<?php
require('globals.php');

$MatchID = $_POST['matchid'];
$Group = $_POST['group'];
$HomeTeam = $_POST['hometeam'];
$AwayTeam = $_POST['awayteam'];
$Date = $_POST['date'];

$sql = sprintf("INSERT INTO matches (MatchID, GroupLetter, HomeTeam, AwayTeam, Date) VALUES ('$MatchID', '$Group', '$HomeTeam', '$AwayTeam', '$Date')");

if ($conn->query($sql) === TRUE) {
   echo "<script>
   alert('New Fixture Added Succesfully!');
   window.location.href='Fixtures.php';
   </script>";
} else {
 echo "<script>
   alert('New Fixture was not added succesfully, please try again!');
   window.location.href='NewFixtures.php';
   </script>";
}

$conn->close();


?>