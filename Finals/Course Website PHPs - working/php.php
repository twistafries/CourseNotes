<?php
	session_start();
		class DBphp extends SQLite3{
	function __construct(){
			$this->open('../quizgame.db');
		}
	}
	$db = new DBphp();
	$query1="SELECT file_path FROM quiz WHERE name='Hangman';";
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
				<h2>PHP: Hypertext preprocessor</h2>
				<ul>
					<li>Originally known as Personal Home Page but it is now a recursive acronym and some have called it the 'Perl Killer' of the server side scripting world.</li>
					<li>Developed by Rasmus Lerdorf in 1994 who wrote a number of CGI (Common Gateway Interface) - binaries to maintain his personal homepage.</li>
					<li>It is an open source server side scripting language that embedded in HTML.</li>
					<li>A tool for making a dynamic content, interactive web pages or used for CGI scripts, it can also create, read, write and delete a files on the server,can add, delete and modify a data to the database and can encrypt data.</li>
					<li>It is sufficient enough to run the largest social network and on different platforms and it is also suitable in most servers that we use today like Apache, IIS and etc.</li>
					<li>PHP is fast and flexible.</li>
					<li>Using PHP allows both the creation of a FORM and the process of the reply on the same file.</li>
					<li>PHP scripts can be invoked via command prompt using the command-line interpreter for PHP.</li>
					<li>PHP framework is an Object-Oriented Programming language (OOP), with methods and tools for extending web app capabilities.</li>
					<li>There are lists of Built-in functions in PHP : array, calender, Error Handling, MySql, network, XML and more.</li>
					<li>PHP handles everything itself.</li>
					<li>The only weakness of php is that it's generally hard to expand the language to add non-standard functionalities that aren't handled by its built-in functions.</li>
				</ul>

				<h3>Advantages</h3>
				<ul>
					<li>When it comes to speed it's relatively fast since it uses a system's resources effectively.</li>
					<li>It's easy to use especially for those who are familiar with C,  it’s very easy for them to learn and create a website using PHP.</li>
				</ul>

				<h3>Disadvantages</h3>
				<ul>
					<li>It's not suitable for huge applications so it's hard to maintain since its not that modular.</li>
					<li>For security purposes since it's open source everyone can view PHP's source code so it can easily hack it to identify bugs in the code.</li>
				</ul>
				
				<div class="sample-code">
					&lt;!DOCTYPE html><br>
						<span class="keyword">&lt;html</span> <span class="attribute">lang</span>=<span class="string">"en"</span><span class="keyword">></span><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;head></span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;meta</span> <span class="attribute">charset</span>=<span class="string">"UTF-8"</span>><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;title></span>PHP Demo: Handling Form Data Submission (GET)<span class="keyword">&lt;/title></span><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;/head></span><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;body></span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name = $_GET[<span class="string">"yourname"</span>];<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$color = $_GET[<span class="string">"favcolor"</span>];<br><br>

										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">"&lt;h1 style='color:</span> $color'<span class="string">>Hello,</span> $name<span class="string">!&lt;/h1>"</span>;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?><br>
						&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;/body></span><br>
					<span class="keyword">&lt;/html></span>
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