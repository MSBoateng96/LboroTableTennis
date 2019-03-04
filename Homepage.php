<?php
	session_start();
?>

<html lang="en">

<head>
	<title>Loughborough & District Table Tennis Cup</title>
    <meta charset="utf-8" />
    
    <link href="StyleSheets/mystyle.css" rel="stylesheet" type="text/css">
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
    	<div class="content">
        	<article class="topcontent">
            	<header>
                	<h2><a href="#" title="First Post">First post</a></h2>
                </header>
                
                <footer>
                	<p class="post-info"> This post is written by Michael</p>
                </footer>
                
                <content>
                	<p>In this project, I will be creating a website for the Loughborough and District Table Tennis Cup Championship. The main aim of this project is to create a platform where an administrator can enter details of the players and clubs participating in the tournament, enter all the fixtures and results after each match is played. This means that there needs to be a database where all this data is stored. The database will be created by using MySQL and PHP.</p>
                    
                     	<p>In this project, I will be creating a website for the Loughborough and District Table Tennis Cup Championship. The main aim of this project is to create a platform where an administrator can enter details of the players and clubs participating in the tournament, enter all the fixtures and results after each match is played. This means that there needs to be a database where all this data is stored. The database will be created by using MySQL and PHP.</p>
                </content> 
            </article>
            
            <article class="bottomcontent">
            	<header>
                	<h2><a href="#" title="Second Post">Second post</a></h2>
                </header>
                
                <footer>
                	<p class="post-info"> This post is written by Michael</p>
                </footer>
                
                <content>
                	<p>In this project, I will be creating a website for the Loughborough and District Table Tennis Cup Championship. The main aim of this project is to create a platform where an administrator can enter details of the players and clubs participating in the tournament, enter all the fixtures and results after each match is played. This means that there needs to be a database where all this data is stored. The database will be created by using MySQL and PHP.</p>
                    
                     	<p>In this project, I will be creating a website for the Loughborough and District Table Tennis Cup Championship. The main aim of this project is to create a platform where an administrator can enter details of the players and clubs participating in the tournament, enter all the fixtures and results after each match is played. This means that there needs to be a database where all this data is stored. The database will be created by using MySQL and PHP.</p>
                </content>
            </article>
          </div>
       </div>
		
        <aside class="Top-sidebar">
        	<article>
            	<h2>Top Sidebar</h2>
                <p>Cup Matches have specific rules that need to be followed. All matches will have 6 sets with 4 games played in each set. After the 4 games have been played, the points of either side are totalled.</p>
            </article>
        </aside>
        
         <aside class="Middle-sidebar">
        	<article>
            	<h2>Middle Sidebar</h2>
                <p>Cup Matches have specific rules that need to be followed. All matches will have 6 sets with 4 games played in each set. After the 4 games have been played, the points of either side are totalled.</p>
            </article>
        </aside>
        
<aside class="bottom-sidebar">
        	<article>
            	<h2>Bottom Sidebar</h2>
                <p>Cup Matches have specific rules that need to be followed. All matches will have 6 sets with 4 games played in each set. After the 4 games have been played, the points of either side are totalled.</p>
            </article>
        </aside>
        
        <footer class="mainFooter">
        	<p>Copyright &copy; <a href="#" title="Copyright">Michael Sarpong-Boateng</a></p>
       	</footer>
       
        
</body>

</html>
