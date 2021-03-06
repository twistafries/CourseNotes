<?php
	session_start();
	class DBphp extends SQLite3{
	function __construct(){
			$this->open('../quizgame.db');
		}
	}
	$db = new DBphp();
	$query1="SELECT file_path FROM quiz WHERE name='Anagram';";
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
				<h2>Node.js</h2>
				<p>
					Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside of a browser.
					The client can store data, send emails, push notifications to the server. 
					It builds highly scalable data and real time back-end services. 
					It is a runtime environment for executing JavaScript code. 
					Node is asynchronous by default, so in a single thread it can handle multiple requests from the client. 
				<p>
					For example in a single thread when a request arrives - the thread handles that request, and if we query a database this thread doesn't wait for the database to return the results. While the database is executing the query, the thread can be used to serve another client.
				</p>
				<p>
					When the database prepares the result it puts a message called an 'event queue.' 
					The node still monitors the queue in the background so when it finds an event in this queue the thread will process it.
				</p>
				<p>
					The node can serve more clients without the need for more hardware.
					But node should not be used for CPU intensive applications like video encoding or an image manipulation service.
				</p>
				<p>
					In these kind of applications we have a lot of calculations that should be done by the CPU. Since node applications are single threaded when performing the calculations to serve one client, other clients have to wait and that's why node should not be used for CPU intensive applications.
					It should only be used for building data intensive and real time applications. 
					We build REST APIs and Back-end Application, Real-Time Services (Chat, Games), Blogs, CMS , Social Applications ,Utilities and Tools with Node.js.
				</p>
                
                <p>
                Features
                <br>

                1.Asynchronous and Event Driven
                 <br>
                     - the server doesn't wait the API to return the data it is used to serve another client while waiting for the results.
                 <br>
                2.Very Fast
                 <br>
                     - the code termination of the node.js library is fast.
                 <br>
                3.Single Threaded but Highly Scalable
                 <br>
                     - the single thread program can handle many requests from the clients.
                 <br>
                4.No Buffering
                 <br>
                     - it gives the data in chunks
                 <br>

                5.License
                 <br>
                     - it is an MIT licensed.
                 <br>
                </p>
                <p>
                Important Components
                 <br>

                1. Import required modules
                 <br>
                2. Create server
                 <br>
                3. Read request and return response
                 <br>
                </p>
                <p>
                Node.js Applications
                 <br>

                1. I/O bound Applications
                 <br>

                2. Data Streaming Applications
                 <br>

                3. Data Intensive Real-time Applications (DIRT)
                 <br>
                4. JSON APIs based Applications
                 <br>
                5. Single Page Applications
                 <br>
                </p>
			</div>
    </section>
	<?php
		if (!isset($_SESSION["siteuser"])) {
			echo '<p> To show the activity, please login:</p>';
			include ("login.html");
		} else {
			include ($row['file_path']) ;
		}
	?>
    <footer>
			<div class="container">
      	<p>Course Web Site</p>
			</div>
    </footer>
		
  </body>
</html>