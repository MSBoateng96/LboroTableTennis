<?php
	//Start the session
	session_start();
?>

<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<head>
	<title>Loughborough & District Table Tennis Cup</title>
    <meta charset="utf-8" />
    
    <link href="StyleSheets/fixturesstyle.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="Groups.php">Group Tables</a>
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
    
    <form action="Scorecard.php" METHOD="GET">
    <h1> Fixtures </h1>
    
    <?php
		if (isset($_SESSION['username']) && $_SESSION['username'] !=
		 '') {
    echo "<a class='NewFixtures' href='NewFixtures.php'>Add New Fixture</a>";
		 }
		 ?>
    <h2> Group A  </h2>         
          
    <table class="FixturesGroupA">
      <tr>
        <th>Week</th>
        <th>Date</th>
        <th>Home</th>
        <th>Score</th>
        <th>Away</th>
        <th>Status</th>
      </tr>
      
      <?php	
	  //Creates connection to database
	  require('globals.php');
	  
	  //Check Connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to Database: " . mysqli_connect_error();	
	}
      
	  $qryA = mysqli_query($conn,"SELECT * FROM matches WHERE GroupLetter='A'");
	  
	  while($rowA = mysqli_fetch_array($qryA)) {
		  
		  $Fixtures = "<tr>";
		  $Fixtures .= "<td id='WeekMatch1A'></td>";
		  $Fixtures .= "<td id='DateMatch1A'>".$rowA['Date']."</td>";
		  $Fixtures .= "<td id='HomeMatch1A'>".$rowA['HomeTeam']."</td>";
		  $Fixtures .= "<td id='ScoreMatch1A'>vs</td>";
		  $Fixtures .= "<td id='AwayMatch1A'>".$rowA['AwayTeam']."</td>";
		  if ($rowA['ScoresAdded'] == "Yes") {
			  $Fixtures .= "<td class='StatusMatch1A'><a href='Scorecard.php?id=".$rowA['MatchID']."'>Result</a></td>";
		  }elseif ($rowA['ScoresAdded'] == "No") {
			  $Fixtures .= "<td class='StatusMatch1A'><a href='Scorecard.php?id=".$rowA['MatchID']."'>TBA</a></td>";
		  }
		  $Fixtures .= "</tr>";
		  
		  echo $Fixtures;
	  }
	  
	
		  ?>
          
      </table>
      </form>
      
      </section> 
      </div>
      
</body>

</html>
