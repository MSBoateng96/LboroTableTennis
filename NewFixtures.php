<?php
	session_start();
?>

<html lang="en">

<head>
	<title>Loughborough & District Table Tennis Cup</title>
    <meta charset="utf-8" />
    
    <link href="StyleSheets/newfixstyle.css" rel="stylesheet" type="text/css">
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
    <h1> Add New Fixture </h1>
     <section>
    
    <form name='NewFixtures' action='addfixtures.php' method='post'>
    
    <?php
	require('globals.php');
	
	$MatchCount = mysqli_query($conn,"SELECT COUNT(MatchID) as Match_ID FROM matches");
	
	while($row=mysqli_fetch_array($MatchCount)) {
		$MatchID=$row['Match_ID'] + 1001;
	}

    echo "<label for='matchid'>MatchID:</label>
	<input type='text' size='4' maxlength='4' name='matchid' value='$MatchID' readonly>"
    
    ?>
    <br> 
    <label for='hometeam'>Home Team:</label>
	<input type='text' size='30' maxlength='30' name='hometeam' required>
    <br>
    <label for='awayteam'>Away Team:</label>
	<input type='text' size='30' maxlength='30' name='awayteam' required>
    <br>
    <label for='group'>Group:</label>
	<input type='text' size='9' maxlength='9' name='group' required>
    <br>
    <label for='date'>Date Scheduled:</label>
	<input type='text' size='15' maxlength='30' name='date' placeholder='DD/MM/YYYY' required>
    <br><br>
    <input type='submit' value='Add Fixtures!' name='addfixtures'/>
    
    
    </section>
    </div>
    
    
    <footer class="mainFooter">
        	<p>Copyright &copy; <a href="#" title="Copyright">Michael Sarpong-Boateng</a></p>
       	</footer>
    </body>

</html>
