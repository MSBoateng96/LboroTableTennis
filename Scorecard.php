<?php
	//Start the session
	session_start();
?>

<html lang="en">

<head>
	<title>Loughborough & District Table Tennis Cup</title>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="StyleSheets/cardstyle.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>

<body class="body" onLoad="sum()">

<header class="mainheader">
    	<img src="img\logo.jpg">
        
     	<section>
		<?php	
		if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
			echo "<form action='logout.php' method='post'><br>
					<input type='submit' value='Logout!' name='logout' />
				</form>";
		}
		else {
			echo "<form action='login.php' method='post'>
			<p>
				<label for='username'>Username:</label>
				<input type='text' size='24' maxlength='20' name='username' required>
			</p>
			<p>
				<label for='password'>Password:</label>
				<input type='password' size='24' maxlength='20' name='password' required>
			</p>
			<p>
				<input type='submit' value='Login!' name='submit' />
			</p>
		</form>";
		}
		?>
        </section>
        
  <nav><ul> <!--Buttons in the Navigation Bar, Including Dropdown Buttons-->
        	<li><a href="Homepage.php">Home</a></li>
            <li class="CupOverview">
            	<a href="javascript:void(0)" class="CupBtn">Cup Overview</a>
                <div class="CupOverview-content">
                	<a href="Fixtures.php">Fixtures and Results</a>
                    <a href="#Groups">Group Tables</a>
                    <a href="#Knockouts">Knockout Standings</a>
                 </div>
                 </li>
             
            <li class="Clubs">
            	<a href="javascript:void(0)" class="ClubsBtn">Clubs</a>
                <div class="Clubs-content">
                	<a href="#Charnwood">Charnwood</a>
                    <a href="#Draycott">Draycott</a>
                    <a href="#Hugglescote">Hugglescote</a>
                    <a href="#Sawley">Sawley</a>
                    <a href="#Unicorn">Unicorn</a>
                 </div>
                 </li>
       
       		<li class="Teams">
            	<a href="javascript:void(0)" class="TeamsBtn">Teams</a>
                <div class="Teams-content">
                	<a href="#Aggressors">Charnwood Agressors</a>
                    <a href="#Blockers">Charnwood Blockers</a>
                    <a href="#Choppers">Charnwood Choppers</a>
                    <a href="#Drivers">Charnwood Drivers</a>
                    <a href="#Devils">Draycott Devils</a>
                    <a href="#Dinosaurs">Draycott Dinosaurs</a>
                    <a href="#Donkeys">Draycott Donkeys</a>
                    <a href="#Dragons">Draycott Dragons</a>
                    <a href="#Dynamos">Draycott Dynamos</a>
                    <a href="#Hares">Hugglescote Hares</a>
                    <a href="#Hawks">Hugglescote Hawks</a>
                    <a href="#Hornets">Hugglescote Hornets</a>
                    <a href="#Tempted">Sawley Tempted</a>
                    <a href="#Tested">Sawley Tested</a>
                    <a href="#Avocets">Unicorn Avocets</a>
                    <a href="#Bitterns">Unicorn Bitterns</a>
                    <a href="#Curlews">Unicorn Curlews</a>
                    <a href="#Dippers">Unicorn Dippers</a>
                    <a href="#Egrets">Unicorn Egrets</a>
                    <a href="#Flamingos">Unicorn Flamingos</a>
                 	<a href="#Grebes">Unicorn Grebes</a>
                 </div>
                 </li>
            
          
            <li><a href="#">Player stats</a></li>
           </ul></nav>
           
           <?php
		if (isset($_SESSION['username']) && $_SESSION['username'] !=
		 '') {
			echo "<div id='hellouser' >";
				echo "Hello, ".$_SESSION['username'];
				
			echo "</div>";
		}
	?>
    </header>

	<div class="mainContent">
    <Section>
    
    <?php
	require('globals.php');
   
	//Check Connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to Database: " . mysqli_connect_error();	
	}
	
	echo "<form action='addscores.php' method='post'>";
	
	$MatchID =  $_GET['id'];
	
	$TeamQuery = mysqli_query($conn, "SELECT HomeTeam, AwayTeam FROM matches WHERE MatchID='$MatchID'");
	while ($row = mysqli_fetch_assoc($TeamQuery)) {
		$HomeTeam = $row['HomeTeam'];
		$AwayTeam = $row['AwayTeam'];
	}
	
	$HomeIDqry = mysqli_query($conn, "SELECT TeamID FROM teams WHERE TeamName='$HomeTeam'");
	while ($row = mysqli_fetch_assoc($HomeIDqry)) {
		$HomeTeamID = $row['TeamID'];
	}
	
	$AwayIDqry = mysqli_query($conn, "SELECT TeamID FROM teams WHERE TeamName='$AwayTeam'");
	while ($row = mysqli_fetch_assoc($AwayIDqry)) {
		$AwayTeamID = $row['TeamID'];
	}
	
	//Duplicated SQL Queries to populate all the dropdown lists for Home Players
	$HomePlayersQry1 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry2 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry3 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry4 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry5 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry6 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry7 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	$HomePlayersQry8 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$HomeTeamID'");
	
	//Duplicated SQL Queries to populate all the dropdown lists for Away Players
	$AwayPlayersQry1 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry2 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry3 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry4 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry5 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry6 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry7 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");
	$AwayPlayersQry8 = mysqli_query($conn, "SELECT PlayerID, Surname, Forename FROM players WHERE TeamID='$AwayTeamID'");

	//Calculating Handicap Points for Home Team
	$HomePlayersCount = mysqli_query($conn,"SELECT COUNT(PlayerID) as Player_ID FROM players WHERE TeamID='$HomeTeamID'");
	while ($row = mysqli_fetch_assoc($HomePlayersCount)) {
		$HomePlayersTotal = $row['Player_ID'];
		
	if ($HomePlayersCount == 2) {
					
		}
	}
	
    echo "<h1> Scorecard </h1>";
	
    echo "<h2> Group A: <input type='text' name='hometeam' size='20' value='$HomeTeam' readonly> vs <input type='text' name='awayteam' size='20' value='$AwayTeam' readonly> <h2>";
    echo "<h3> Date: <input name='date' type='text' size='10' value='11/10/2016' maxlength='10'> <h3>";

    echo "<label for='matchid'>MatchID:</label>
	<input type='text' size='4' maxlength='4' name='matchid' value='$MatchID' readonly>";
    
    echo "<input type='submit' value='Add Scores!' name='addscores'/>
    <table class='Scorecard'>
    <tr>
    <th>Games</th>
    <th>Home Players</th>
    <th colspan='8'>GAME SCORES for each SET</th>
    <th>Away Players</th>
    <th>Home</th>
    <th>Away</th>
    </tr>
    <tr>
    <td>Singles1</td>";
    $S1HomePlayers = "<td><select name='S1HomePlayers'>";
	while ($row = mysqli_fetch_array($HomePlayersQry1)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S1HomePlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S1HomePlayers .= "</select></td>";
	echo $S1HomePlayers;
    echo "<td><input name='S1HomeGame1' id='S1HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='S1AwayGame1' type='text' size='1'></td>
    <td><input name='S1HomeGame2' id='S1HomeGame2' type='text' size='1'></td>
    <td><input name='S1AwayGame2' type='text' size='1'></td>
    <td><input name='S1HomeGame3' type='text' size='1'></td>
    <td><input name='S1AwayGame3' type='text' size='1'></td>
    <td><input name='S1HomeGame4' type='text' size='1'></td>
    <td><input name='S1AwayGame4' type='text' size='1'></td>";
    $S1AwayPlayers = "<td><select name='S1AwayPlayers'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry1)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S1AwayPlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S1AwayPlayers .= "</select></td>";
	echo $S1AwayPlayers;
    echo "<td><input name='S1HomeTotal' id='S1HomeTotal' type='text' size='1' readonly></td>
    <td><input name='S1AwayTotal' id='S1AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td>Singles2</td>";
    $S2HomePlayers = "<td><select name='S2HomePlayers'>";
	while ($row = mysqli_fetch_array($HomePlayersQry2)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S2HomePlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S2HomePlayers .= "</select></td>";
	echo $S2HomePlayers;
    echo "<td><input name='S2HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='S2AwayGame1' type='text' size='1'></td>
    <td><input name='S2HomeGame2' type='text' size='1'></td>
    <td><input name='S2AwayGame2' type='text' size='1'></td>
    <td><input name='S2HomeGame3' type='text' size='1'></td>
    <td><input name='S2AwayGame3' type='text' size='1'></td>
    <td><input name='S2HomeGame4' type='text' size='1'></td>
    <td><input name='S2AwayGame4' type='text' size='1'></td>";
    $S2AwayPlayers = "<td><select name='S2AwayPlayers'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry2)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S2AwayPlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S2AwayPlayers .= "</select></td>";
	echo $S2AwayPlayers;
    echo "<td><input name='S2HomeTotal' type='text' size='1'></td>
    <td><input name='S2AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td>Singles3</td>";
    $S3HomePlayers = "<td><select name='S3HomePlayers'>";
	while ($row = mysqli_fetch_array($HomePlayersQry3)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S3HomePlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S3HomePlayers .= "</select></td>";
	echo $S3HomePlayers;
    echo "<td><input name='S2HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='S3AwayGame1' type='text' size='1'></td>
    <td><input name='S3HomeGame2' type='text' size='1'></td>
    <td><input name='S3AwayGame2' type='text' size='1'></td>
    <td><input name='S3HomeGame3' type='text' size='1'></td>
    <td><input name='S3AwayGame3' type='text' size='1'></td>
    <td><input name='S3HomeGame4' type='text' size='1'></td>
    <td><input name='S3AwayGame4' type='text' size='1'></td>";
    $S3AwayPlayers = "<td><select name='S3AwayPlayers'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry3)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S3AwayPlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S3AwayPlayers .= "</select></td>";
	echo $S3AwayPlayers;
    echo "<td><input name='S3HomeTotal' type='text' size='1'></td>
    <td><input name='S3AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td>Singles4</td>";
    $S4HomePlayers = "<td><select name='S4HomePlayers'>";
	while ($row = mysqli_fetch_array($HomePlayersQry4)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S4HomePlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S4HomePlayers .= "</select></td>";
	echo $S4HomePlayers;
    echo "<td><input name='S4HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='S4AwayGame1' type='text' size='1'></td>
    <td><input name='S4HomeGame2' type='text' size='1'></td>
    <td><input name='S4AwayGame2' type='text' size='1'></td>
    <td><input name='S4HomeGame3' type='text' size='1'></td>
    <td><input name='S4AwayGame3' type='text' size='1'></td>
    <td><input name='S4HomeGame4' type='text' size='1'></td>
    <td><input name='S4AwayGame4' type='text' size='1'></td>";
    $S4AwayPlayers = "<td><select name='S4AwayPlayers'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry4)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$S4AwayPlayers .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$S4AwayPlayers .= "</select></td>";
	echo $S4AwayPlayers;
    echo "<td><input name='S4HomeTotal' type='text' size='1'></td>
    <td><input name='S4AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td>Doubles1</td>";
    $D1HomePlayers1 = "<td><select name='D1HomePlayers1'>";
	while ($row = mysqli_fetch_array($HomePlayersQry5)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D1HomePlayers1 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D1HomePlayers1 .= "</select>";
	echo $D1HomePlayers1;
	$D1HomePlayers2 = "<br><select name='D1HomePlayers1'>";
	while ($row = mysqli_fetch_array($HomePlayersQry6)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D1HomePlayers2 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D1HomePlayers2 .= "</select></td>";
	echo $D1HomePlayers2;
    echo "<td><input name='D1HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='D1AwayGame1' type='text' size='1'></td>
    <td><input name='D1HomeGame2' type='text' size='1'></td>
    <td><input name='D1AwayGame2' type='text' size='1'></td>
    <td><input name='D1HomeGame3' type='text' size='1'></td>
    <td><input name='D1AwayGame3' type='text' size='1'></td>
    <td><input name='D1HomeGame4' type='text' size='1'></td>
    <td><input name='D1AwayGame4' type='text' size='1'></td>";
    $D1AwayPlayers1 = "<td><select name='D1AwayPlayers1'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry5)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D1AwayPlayers1 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D1AwayPlayers1 .= "</select>";
	echo $D1AwayPlayers1;
	$D1AwayPlayers2 = "<br><select name='D1AwayPlayers1'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry6)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D1AwayPlayers2 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D1AwayPlayers2 .= "</select></td>";
	echo $D1AwayPlayers2;
    echo "<td><input name='D1HomeTotal' type='text' size='1'></td>
    <td><input name='D1AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td>Doubles2</td>";
    $D2HomePlayers1 = "<td><select name='D2HomePlayers1'>";
	while ($row = mysqli_fetch_array($HomePlayersQry7)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D2HomePlayers1 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D2HomePlayers1 .= "</select>";
	echo $D2HomePlayers1;
	$D2HomePlayers2 = "<br><select name='D2HomePlayers1'>";
	while ($row = mysqli_fetch_array($HomePlayersQry8)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D2HomePlayers2 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D2HomePlayers2 .= "</select></td>";
	echo $D2HomePlayers2;
    echo "<td><input name='D2HomeGame1' type='text' size='1' placeholder='H1'></td>
    <td><input name='D2AwayGame1' type='text' size='1'></td>
    <td><input name='D2HomeGame2' type='text' size='1'></td>
    <td><input name='D2AwayGame2' type='text' size='1'></td>
    <td><input name='D2HomeGame3' type='text' size='1'></td>
    <td><input name='D2AwayGame3' type='text' size='1'></td>
    <td><input name='D2HomeGame4' type='text' size='1'></td>
    <td><input name='D2AwayGame4' type='text' size='1'></td>";
    $D2AwayPlayers1 = "<td><select name='D2AwayPlayers1'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry7)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D2AwayPlayers1 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D2AwayPlayers1 .= "</select>";
	echo $D2AwayPlayers1;
	$D2AwayPlayers2 = "<br><select name='D2AwayPlayers1'>";
	while ($row = mysqli_fetch_array($AwayPlayersQry8)) {
		$FullName = $row['Forename'] . " " . $row['Surname'];
		$D2AwayPlayers2 .= "<option value ='".$row['PlayerID']."'>".$FullName."</option>";
	}
	$D2AwayPlayers2 .= "</select></td>";
	echo $D2AwayPlayers2;
    echo "<td><input name='D2HomeTotal' type='text' size='1'></td>
    <td><input name='D2AwayTotal' type='text' size='1'></td>
    </tr>
    <tr>
    <td class='Comments' rowspan='3' colspan='10'><input name='comments' type='text' size='70' value='Comments:'></td>
    <td class='Handicap'>Handicap:</td>
    <td><input name='HomeHandicap' type='text' size='1'></td>
    <td><input name='AwayHandicap' type='text' size='1'></td>
    </tr>
    <tr>
    <td class='Compensation'>Compensation:</td>
    <td><input name='HomeCompensation' type='text' size='1'></td>
    <td><input name='AwayCompensation' type='text' size='1'></td>
    </tr>
    <tr>
    <td class='Total'>TOTAL:</td>
    <td><input id='HomeTotal' type='text' size='1'></td>
    <td><input id='AwayTotal' type='text' size='1'></td>
    </tr>
    </form>";
   
    ?>
    
    <script>
  		var S1HomeGames = $('[name="S1HomeGame1"],[name="S1HomeGame2"], [name="S1HomeGame3"], [name="S1HomeGame4"]'),
    		input1 = $('[name="S1HomeGame1"]'),
    		input2 = $('[name="S1HomeGame2"]'),
			input3 = $('[name="S1HomeGame3"]'),
    		input4 = $('[name="S1HomeGame4"]'),
    		input5 = $('[name="S1HomeTotal"]');
		S1HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input1.val()))) ? 0 : parseInt(input1.val());
    		var val2 = (isNaN(parseInt(input2.val()))) ? 0 : parseInt(input2.val());
			var val3 = (isNaN(parseInt(input3.val()))) ? 0 : parseInt(input3.val());
    		var val4 = (isNaN(parseInt(input4.val()))) ? 0 : parseInt(input4.val());
    		input5.val(val1 + val2 + val3 + val4);
		});
		
		var S1AwayGames = $('[name="S1AwayGame1"],[name="S1AwayGame2"], [name="S1AwayGame3"], [name="S1AwayGame4"]'),
    		input6 = $('[name="S1AwayGame1"]'),
    		input7 = $('[name="S1AwayGame2"]'),
			input8 = $('[name="S1AwayGame3"]'),
    		input9 = $('[name="S1AwayGame4"]'),
    		input10 = $('[name="S1AwayTotal"]');
		S1AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input6.val()))) ? 0 : parseInt(input6.val());
    		var val2 = (isNaN(parseInt(input7.val()))) ? 0 : parseInt(input7.val());
			var val3 = (isNaN(parseInt(input8.val()))) ? 0 : parseInt(input8.val());
    		var val4 = (isNaN(parseInt(input9.val()))) ? 0 : parseInt(input9.val());
    		input10.val(val1 + val2 + val3 + val4);
		});
		
		var S2HomeGames = $('[name="S2HomeGame1"],[name="S2HomeGame2"], [name="S2HomeGame3"], [name="S2HomeGame4"]'),
    		input11 = $('[name="S2HomeGame1"]'),
    		input12 = $('[name="S2HomeGame2"]'),
			input13 = $('[name="S2HomeGame3"]'),
    		input14 = $('[name="S2HomeGame4"]'),
    		input15 = $('[name="S2HomeTotal"]');
		S2HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input11.val()))) ? 0 : parseInt(input11.val());
    		var val2 = (isNaN(parseInt(input12.val()))) ? 0 : parseInt(input12.val());
			var val3 = (isNaN(parseInt(input13.val()))) ? 0 : parseInt(input13.val());
    		var val4 = (isNaN(parseInt(input14.val()))) ? 0 : parseInt(input14.val());
    		input15.val(val1 + val2 + val3 + val4);
		});
		
		var S2AwayGames = $('[name="S2AwayGame1"],[name="S2AwayGame2"], [name="S2AwayGame3"], [name="S2AwayGame4"]'),
    		input16 = $('[name="S2AwayGame1"]'),
    		input17 = $('[name="S2AwayGame2"]'),
			input18 = $('[name="S2AwayGame3"]'),
    		input19 = $('[name="S2AwayGame4"]'),
    		input20 = $('[name="S2AwayTotal"]');
		S2AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input16.val()))) ? 0 : parseInt(input16.val());
    		var val2 = (isNaN(parseInt(input17.val()))) ? 0 : parseInt(input17.val());
			var val3 = (isNaN(parseInt(input18.val()))) ? 0 : parseInt(input18.val());
    		var val4 = (isNaN(parseInt(input19.val()))) ? 0 : parseInt(input19.val());
    		input20.val(val1 + val2 + val3 + val4);
		});
		
		var S3HomeGames = $('[name="S3HomeGame1"],[name="S3HomeGame2"], [name="S3HomeGame3"], [name="S3HomeGame4"]'),
    		input21 = $('[name="S3HomeGame1"]'),
    		input22 = $('[name="S3HomeGame2"]'),
			input23 = $('[name="S3HomeGame3"]'),
    		input24 = $('[name="S3HomeGame4"]'),
    		input25 = $('[name="S3HomeTotal"]');
		S3HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input21.val()))) ? 0 : parseInt(input21.val());
    		var val2 = (isNaN(parseInt(input22.val()))) ? 0 : parseInt(input22.val());
			var val3 = (isNaN(parseInt(input23.val()))) ? 0 : parseInt(input23.val());
    		var val4 = (isNaN(parseInt(input24.val()))) ? 0 : parseInt(input24.val());
    		input25.val(val1 + val2 + val3 + val4);
		});
		
		var S3AwayGames = $('[name="S3AwayGame1"],[name="S3AwayGame2"], [name="S3AwayGame3"], [name="S3AwayGame4"]'),
    		input26 = $('[name="S3AwayGame1"]'),
    		input27 = $('[name="S3AwayGame2"]'),
			input28 = $('[name="S3AwayGame3"]'),
    		input29 = $('[name="S3AwayGame4"]'),
    		input30 = $('[name="S3AwayTotal"]');
		S3AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input26.val()))) ? 0 : parseInt(input26.val());
    		var val2 = (isNaN(parseInt(input27.val()))) ? 0 : parseInt(input27.val());
			var val3 = (isNaN(parseInt(input28.val()))) ? 0 : parseInt(input28.val());
    		var val4 = (isNaN(parseInt(input29.val()))) ? 0 : parseInt(input29.val());
    		input30.val(val1 + val2 + val3 + val4);
		});
		
		var S4HomeGames = $('[name="S4HomeGame1"],[name="S4HomeGame2"], [name="S4HomeGame3"], [name="S4HomeGame4"]'),
    		input31 = $('[name="S4HomeGame1"]'),
    		input32 = $('[name="S4HomeGame2"]'),
			input33 = $('[name="S4HomeGame3"]'),
    		input34 = $('[name="S4HomeGame4"]'),
    		input35 = $('[name="S4HomeTotal"]');
		S4HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input31.val()))) ? 0 : parseInt(input31.val());
    		var val2 = (isNaN(parseInt(input32.val()))) ? 0 : parseInt(input32.val());
			var val3 = (isNaN(parseInt(input33.val()))) ? 0 : parseInt(input33.val());
    		var val4 = (isNaN(parseInt(input34.val()))) ? 0 : parseInt(input34.val());
    		input35.val(val1 + val2 + val3 + val4);
		});
		
		var S4AwayGames = $('[name="S4AwayGame1"],[name="S4AwayGame2"], [name="S4AwayGame3"], [name="S4AwayGame4"]'),
    		input36 = $('[name="S4AwayGame1"]'),
    		input37 = $('[name="S4AwayGame2"]'),
			input38 = $('[name="S4AwayGame3"]'),
    		input39 = $('[name="S4AwayGame4"]'),
    		input40 = $('[name="S4AwayTotal"]');
		S4AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input36.val()))) ? 0 : parseInt(input36.val());
    		var val2 = (isNaN(parseInt(input37.val()))) ? 0 : parseInt(input37.val());
			var val3 = (isNaN(parseInt(input38.val()))) ? 0 : parseInt(input38.val());
    		var val4 = (isNaN(parseInt(input39.val()))) ? 0 : parseInt(input39.val());
    		input40.val(val1 + val2 + val3 + val4);
		});
		
		var D1HomeGames = $('[name="D1HomeGame1"],[name="D1HomeGame2"], [name="D1HomeGame3"], [name="D1HomeGame4"]'),
    		input41 = $('[name="D1HomeGame1"]'),
    		input42 = $('[name="D1HomeGame2"]'),
			input43 = $('[name="D1HomeGame3"]'),
    		input44 = $('[name="D1HomeGame4"]'),
    		input45 = $('[name="D1HomeTotal"]');
		D1HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input41.val()))) ? 0 : parseInt(input41.val());
    		var val2 = (isNaN(parseInt(input42.val()))) ? 0 : parseInt(input42.val());
			var val3 = (isNaN(parseInt(input43.val()))) ? 0 : parseInt(input43.val());
    		var val4 = (isNaN(parseInt(input44.val()))) ? 0 : parseInt(input44.val());
    		input45.val(val1 + val2 + val3 + val4);
		});
		
		var D1AwayGames = $('[name="D1AwayGame1"],[name="D1AwayGame2"], [name="D1AwayGame3"], [name="D1AwayGame4"]'),
    		input46 = $('[name="D1AwayGame1"]'),
    		input47 = $('[name="D1AwayGame2"]'),
			input48 = $('[name="D1AwayGame3"]'),
    		input49 = $('[name="D1AwayGame4"]'),
    		input50 = $('[name="D1AwayTotal"]');
		D1AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input46.val()))) ? 0 : parseInt(input46.val());
    		var val2 = (isNaN(parseInt(input47.val()))) ? 0 : parseInt(input47.val());
			var val3 = (isNaN(parseInt(input48.val()))) ? 0 : parseInt(input48.val());
    		var val4 = (isNaN(parseInt(input49.val()))) ? 0 : parseInt(input49.val());
    		input50.val(val1 + val2 + val3 + val4);
		});
		
		var D2HomeGames = $('[name="D2HomeGame1"],[name="D2HomeGame2"], [name="D2HomeGame3"], [name="D2HomeGame4"]'),
    		input51 = $('[name="D2HomeGame1"]'),
    		input52 = $('[name="D2HomeGame2"]'),
			input53 = $('[name="D2HomeGame3"]'),
    		input54 = $('[name="D2HomeGame4"]'),
    		input55 = $('[name="D2HomeTotal"]');
		D2HomeGames.change(function () {
    		var val1 = (isNaN(parseInt(input51.val()))) ? 0 : parseInt(input51.val());
    		var val2 = (isNaN(parseInt(input52.val()))) ? 0 : parseInt(input52.val());
			var val3 = (isNaN(parseInt(input53.val()))) ? 0 : parseInt(input53.val());
    		var val4 = (isNaN(parseInt(input54.val()))) ? 0 : parseInt(input54.val());
    		input55.val(val1 + val2 + val3 + val4);
		});
		
		var D2AwayGames = $('[name="D2AwayGame1"],[name="D2AwayGame2"], [name="D2AwayGame3"], [name="D2AwayGame4"]'),
    		input56 = $('[name="D2AwayGame1"]'),
    		input57 = $('[name="D2AwayGame2"]'),
			input58 = $('[name="D2AwayGame3"]'),
    		input59 = $('[name="D2AwayGame4"]'),
    		input60 = $('[name="D2AwayTotal"]');
		D2AwayGames.change(function () {
    		var val1 = (isNaN(parseInt(input56.val()))) ? 0 : parseInt(input56.val());
    		var val2 = (isNaN(parseInt(input57.val()))) ? 0 : parseInt(input57.val());
			var val3 = (isNaN(parseInt(input58.val()))) ? 0 : parseInt(input58.val());
    		var val4 = (isNaN(parseInt(input59.val()))) ? 0 : parseInt(input59.val());
    		input60.val(val1 + val2 + val3 + val4);
		});
    </script>


    
   
    </Section>
    </div>
    
  </body>

</html>