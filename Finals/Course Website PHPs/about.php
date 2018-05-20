<?php
	session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Course Website</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
		
    <header>
			<div class="container">
				<h1><span class="header-blue">Course</span> <span class="header-gray">Website</span> <span class="sub-header">Server-side Web Scripting</span></h1>
			</div>
    </header>
		
    <nav>
			<div class="container">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="java.php">Java</a></li>
					<li><a href="php.php">PHP</a></li>
					<li><a href="nodejs.php">Node.js</a></li>
					<li><a href="ruby.php">Ruby</a></li>
					<?php
						if (isset($_SESSION["siteuser"])) {
							echo '<li><a href="logout.php">Logout</a></li>';
						}
					?>
				</ul>
			</div>
    </nav>

    
	<section id="home_section">
		<div id="featured-wrapper">
			<div class="container">
				<h1>MEMBERS:</h1>
				<ul>
					<li>Emeterio, Ricamelle</li>
					<li>Faypon, Jon Paulo</li>
					<li>Guiab, John Carlo</li>
					<li>Viloria, Bruce Brendon</li>
					<li>Willy, Kim</li>
				</ul>
				<p>2:00 pm - 3:00 pm TF</p>
				<p>9346A</p>
			</div>
		</div>
    </section>

    <footer>
			<div class="container">
      	<p>Course Web Site</p>
			</div>
    </footer>
		
  </body>
</html>