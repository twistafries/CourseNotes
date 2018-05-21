<?php
	session_start();
	class DBphp extends SQLite3{
	function __construct(){
			$this->open('../quizgame.db');
		}
	}
	$db = new DBphp();
	$query1="SELECT file_path FROM quiz WHERE name='double shuffle';";
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

				<h3>Creating a new ruby on rails</h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;After installing ruby on rails you can already used the command line to create your rails and then you can install the rails gem by typing the command "gem install rails" the you can create the following list below:</p>

				<div class="sample-code">
					<p>$ rails new commandsapp</p>
					<p>&nbsp;&nbsp;create</p>
					<p>&nbsp;&nbsp;create README.md</p>
					<p>&nbsp;&nbsp;create Rakefile</p>
					<p>&nbsp;&nbsp;create config.ru</p>
					<p>&nbsp;&nbsp;create .gitignore</p>
					<p>&nbsp;&nbsp;create Gemfile</p>
					<p>&nbsp;&nbsp;create app</p>
					<p>&nbsp;&nbsp;...</p>
					<p>&nbsp;&nbsp;tmp/cache</p>
				</div>

				<h3>Rails Server</h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;The server for rail will launch a webserver named puma which is bundled that with rails. You can run this in the new rails app</p>

				<div class="sample-code">
					<p>$ cd commandsapp</p>
					<p>$ bin/rails server</p>
					<p>=> Booting Puma</p>
					<p>=> Rails 5.1.0 application starting in development on http://0.0.0.0:3000</p>
					<p>=> Run `rails server -h` for more startup options</p>
					<p>Puma starting in single mode...</p>
					<p>* Version 3.0.2 (ruby 2.3.0-p0), codename: Plethora of Penguin Pinatas</p>
					<p>* Min threads: 5, max threads: 5</p>
					<p>* Environment: development</p>
					<p>* Listening on tcp://localhost:3000</p>
					<p>User Ctrl-C to stop</p>
				</div>

				<h3>Session Handling</h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Session is the most perfect place to store the data during a request that can
be read during or later request.</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Data Can Be set in action from the controller:</p>

				<div class="sample-code">
					<p>--------------------------------------</p>
					<p>app/controller/sessions_controller.rb</p>
					<p>--------------------------------------</p>
					<p>def create</p>
					<p>&nbsp;&nbsp;# ... </p>
					<p>&nbsp;&nbsp;session[:current_user_id] = @user.id</p>
					<p>&nbsp;&nbsp;# ... </p>
					<p>end</p>
				</div>

				<p>Then read it in another file</p>
				<div class="sample-code">
					<p>--------------------------------------</p>
					<p>app/controllers/users_controller.rb</p>
					<p>--------------------------------------</p>
					<p>def index</p>
					<p>&nbsp;&nbsp;current_user = User.find_by_id(session[:current_user_id])</p>
					<p>&nbsp;&nbsp;# ...</p>
					<p>end</p>
				</div>

				<p>Then After you request a page, the server will set a cookie to respond back</p>

				<div class="sample-code">
					<p>~ jweiss$ curl -I http://www.google.com | grep Set-Cookie</p>
					<p>Set-Cookie: NID=67=J2xeyegolV0SSneukSOANOCoeuDQs7G1FDAK2j-nVyaoejz-4K6aouUQtyp5B_rK3Z7G-EwTIzDm7XQ3_ZUVNnFmlGfIHMAnZQNd4kM89VLzCsM0fZnr_N8-idASAfBEdS; expires=Wed, 16-Sep-2015 05:44:42 GMT; path=/; domain=.google.com; HttpOnly</p>
				</div>

				<p>And after your cookie expires,It will make another request, and the browser
will send again the cookie back to the server:</p>
				
				<div class="sample-code">
					<p>> GET / HTTP/1.1</p>
					<p>> User-Agent: curl/7.37.1</p>
					<p>> Host: www.google.com</p>
					<p>> Accept: */*</p>
					<p>> Cookie: NID=67=J2xeyegolV0SSneukSOANOCoeuDQs7G1FDAK2j-nVyaoejz-4K6aouUQtyp5B_rK3Z7G-EwTIzDm7XQ3_ZUVNnFmlGfIHMAnZQNd4kM89VLzCsM0fZnr_N8-idASAfBEdS; expires=Wed, 16-Sep-2015 05:44:42 GMT; path=/; domain=.google.com; HttpOnly</p>
				</div>

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