<?php
	session_start();
?>

<html lang="en">

<head>
	<title>Loughborough & District Table Tennis Cup</title>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="StyleSheets/groupsstyle.css" rel="stylesheet" type="text/css">

</head>

<body class="body">

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
    
    <h1> Group Stages </h1>
    
    <h2> Group A </h2>
    
    <table class='GroupA'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>
    <tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>
    
	<tr>
    <th class = "position">1</th>
    </tr>
    <tr>
    <th class = "position">2</th>
    </tr>
    <tr>
    <th class = "position">3</th>
    </tr>
	
	<?php
	require('globals.php');
	
	//Check Connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to Database: " . mysqli_connect_error();	
	}
  
	$resultA = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='A'");
   
	while($recordA = mysqli_fetch_array($resultA)) {
		echo "<tr>";
		echo "<td>".$recordA['Position']."</td>";
		echo "<td>".$recordA['Name']."</td>";
		echo "<td>".$recordA['Wins']."</td>";
		echo "<td>".$recordA['Draws']."</td>";
		echo "<td>".$recordA['Losses']."</td>";
		echo "<td>".$recordA['For']."</td>";
		echo "<td>".$recordA['Against']."</td>";
		echo "<td>".$recordA['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
    
    echo "<h2> Group B </h2>";
	
	$resultB = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='B'");
	
    echo "<table class='GroupB'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordB = mysqli_fetch_array($resultB)) {
		echo "<tr>";
		echo "<td>".$recordB['Position']."</td>";
		echo "<td>".$recordB['Name']."</td>";
		echo "<td>".$recordB['Wins']."</td>";
		echo "<td>".$recordB['Draws']."</td>";
		echo "<td>".$recordB['Losses']."</td>";
		echo "<td>".$recordB['For']."</td>";
		echo "<td>".$recordB['Against']."</td>";
		echo "<td>".$recordB['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	echo "<h2> Group C </h2>";
	
	$resultC = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='C'");
	
    echo "<table class='GroupC'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordC = mysqli_fetch_array($resultC)) {
		echo "<tr>";
		echo "<td>".$recordC['Position']."</td>";
		echo "<td>".$recordC['Name']."</td>";
		echo "<td>".$recordC['Wins']."</td>";
		echo "<td>".$recordC['Draws']."</td>";
		echo "<td>".$recordC['Losses']."</td>";
		echo "<td>".$recordC['For']."</td>";
		echo "<td>".$recordC['Against']."</td>";
		echo "<td>".$recordC['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	echo "<h2> Group D </h2>";
	
	$resultD = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='D'");
	
    echo "<table class='GroupD'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordD = mysqli_fetch_array($resultD)) {
		echo "<tr>";
		echo "<td>".$recordD['Position']."</td>";
		echo "<td>".$recordD['Name']."</td>";
		echo "<td>".$recordD['Wins']."</td>";
		echo "<td>".$recordD['Draws']."</td>";
		echo "<td>".$recordD['Losses']."</td>";
		echo "<td>".$recordD['For']."</td>";
		echo "<td>".$recordD['Against']."</td>";
		echo "<td>".$recordD['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	echo "<h2> Group E </h2>";
	
	$resultE = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='E'");
	
    echo "<table class='GroupE'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordE = mysqli_fetch_array($resultE)) {
		echo "<tr>";
		echo "<td>".$recordE['Position']."</td>";
		echo "<td>".$recordE['Name']."</td>";
		echo "<td>".$recordE['Wins']."</td>";
		echo "<td>".$recordE['Draws']."</td>";
		echo "<td>".$recordE['Losses']."</td>";
		echo "<td>".$recordE['For']."</td>";
		echo "<td>".$recordE['Against']."</td>";
		echo "<td>".$recordE['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	echo "<h2> Group F </h2>";
	
	$resultF = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='F'");
	
    echo "<table class='GroupF'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordF = mysqli_fetch_array($resultF)) {
		echo "<tr>";
		echo "<td>".$recordF['Position']."</td>";
		echo "<td>".$recordF['Name']."</td>";
		echo "<td>".$recordF['Wins']."</td>";
		echo "<td>".$recordF['Draws']."</td>";
		echo "<td>".$recordF['Losses']."</td>";
		echo "<td>".$recordF['For']."</td>";
		echo "<td>".$recordF['Against']."</td>";
		echo "<td>".$recordF['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	echo "<h2> Group G </h2>";
	
	$resultG = mysqli_query($conn,"SELECT * FROM groups WHERE GroupLetter='G'");
	
    echo "<table class='GroupG'><tr><th rowspan='2'>Pos</th><th rowspan='2'>Team</th><th colspan='3'>Matches</th><th colspan='2'>Match Points</th><th rowspan='2'>Points</th></tr>";
    echo "<tr><th>Win</th><th>Draw</th><th>Loss</th><th>For</th><th>Against</th></tr>";
   
	while($recordG = mysqli_fetch_array($resultG)) {
		echo "<tr>";
		echo "<td>".$recordG['Position']."</td>";
		echo "<td>".$recordG['Name']."</td>";
		echo "<td>".$recordG['Wins']."</td>";
		echo "<td>".$recordG['Draws']."</td>";
		echo "<td>".$recordG['Losses']."</td>";
		echo "<td>".$recordG['For']."</td>";
		echo "<td>".$recordG['Against']."</td>";
		echo "<td>".$recordG['Points']."</td>";
		echo "<tr>";
	}
	echo "</table>";
	echo "<br>";
	
	mysqli_close($conn);

	?>
    
    </form>
    </Section>
    </div>
    
    
  </body>

</html>