<?php
	session_start();
	class DBphp extends SQLite3{
	function __construct(){
			$this->open('../quizgame.db');
		}
	}
	$db = new DBphp();
	$query1="SELECT file_path FROM quiz WHERE name='WordFind';";
	$result=$db->query($query1);
	$row = $result->fetchArray() ;
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

    <section class="content">
			<div class="container">
				<h2>Ruby on Rails</h2>
				<ul>
					<li>Created by David Heinemeier Hansson by extracting Ruby on rails from his work on his project management tool Basecamp</li>
					<li>Ruby on rails is not only free to use, it is an open source software that means that you can also help to make it better by contributing codes.</li>
					<li>Ruby on rails is an MVC Architecture which is divided into 3 interconnected parts which is the Model that handles the business logic, Controller that control the flow of the application, And then the View which handle the logic presentation that the end  user sees.</li>
					<li>Ruby on rails is Convention over Configuration, that helps decrease the number of decisions that a developer attempt so that it will not lose flexibility in coding.</li>
					<li>DRY code is used in Ruby on rails DRY which stands for Don't Repeat Yourself that makes the code concise, consistent that makes it easier to maintain</li>
					<li>Ruby on rails is easy to learn most of the code are based in english language and it is an Object Oriented language</li>
					<li>Many popular websites use Ruby-on-rails as server-side web application language (such as twitter/shopify/sondcloud/slideshare/urbandictionary/bloomberg/github)</li>
					<li>Using Ruby-on-rails can make the development cycle faster or shorter.</li>
				</ul>

				<h3>Advantages</h3>
				<ul>
					<li>It has a consistent structure - it means it has a strong foundation and library</li>
					<li>Can easily manage database migrations because it allows us to create and edit database column and row</li>
					<li>Can easily do prototyping and can be used in rapid development</li>
					<li>Can easily learned due to its good english word used</li>
					<li>It is a multi-paradigm language and Object Oriented</li>
					<li>Ruby gem is a package manager that extends the core functionality of the framework similar to npm node.js</li>
					<li>Due to its Maturity ruby on rails is a respected Community</li>
				</ul>

				<h3>Disadvantages</h3>
				<ul>
					<li>Ruby-on-rails needs a big framework so it does have a considerable performance hit</li>
					<li>Lack of Documentation</li>
					<li>On cutting age of development - that is, some features may be 'experimental' or not yet completely supported</li>
				</ul>
			</div>
    </section>
	
	<?php
		if (!isset($_SESSION["siteuser"])) {
			echo '<p> To show the activity, please login:</p>';
			include ("login.html");
		} else {
			include ($row['file_path']);
		}
	?>
    <footer>
			<div class="container">
      	<p>Course Web Site</p>
			</div>
    </footer>
		
  </body>
</html>