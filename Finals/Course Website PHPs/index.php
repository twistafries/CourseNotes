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
						} else {
							include ("login.html");
						}
					?>				
					</ul>
			</div>
    </nav>

    <section id="home_section">
			<div id="featured-wrapper">
		<div id="featured" class="container">
				<h1>JAVA & PHP & NODE.JS & RUBY</h1>
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