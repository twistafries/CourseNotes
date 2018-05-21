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
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="java.html">Java</a></li>
					<li><a href="php.html">PHP</a></li>
					<li><a href="nodejs.html">Node.js</a></li>
					<li><a href="ruby.html">Ruby</a></li>
				</ul>
			</div>
    </nav>

    <section class="content">
			<div class="container">
				<h2>Node.js</h2>
                
                <p>Node.js is a server environment that developed by Ryan Dahl on 2009. Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside of a browser. Node js is a javascript-based that runs on V8 of javascript runtime environment. Node js executes a javascript and it provides different libraries and frameworks such as Hapi.js, Socket.io, Express.js, Mojito, Meteor, Derby, Mean.js, Sails.js Koa.js, Total.js and others.</p>

                <p>The client can store data, send emails, push notifications to the server. It builds highly scalable data and real time back-end services. It is a runtime environment for executing JavaScript code. Node is asynchronous by default, so in a single thread it can handle multiple requests from the client.</p>


                <h3>Example</h3>

                 <p>In a single thread when a request arrives - the thread handles that request, and if we query a database this thread doesn't wait for the database to return the results. While the database is executing the query, the thread can be used to serve another client.

                When the database prepares the result it puts a message called an 'event queue.' The node still monitors the queue in the background so when it finds an event in this queue the thread will process it.

                The node can serve more clients without the need for more hardware. But node should not be used for CPU intensive applications like video encoding or an image manipulation service.</p>

                <h3>Features</h3>

                <li>Asynchronous and Event Driven - the server doesn't wait the API to return the data it is used to serve another client while waiting for the results.</li>
                <li>Very Fast - the code termination of the node.js library is fast.</li>
                <li>Single Threaded but Highly Scalable - the single thread program can handle many requests from the clients.</li>
                <li>No Buffering - it gives the data in chunks</li>
                <li>License - it is an MIT licensed.</li>

                <h3>Node.js Applications</h3> 
                <li> I/O bound Applications</li>
                <li> Data Streaming Applications </li>
                <li> Data Intensive Real-time Applications (DIRT) </li>
                <li> JSON APIs based Applications </li>
                <li> Single Page Applications </li>


                <h3>Advantages</h3>

                <li> It is an asynchronous event-driven IO assists concurrent request handling.</li>
                <li> It stores the cache of indiviual modules.</li>
                <li> It is a single threaded program that uses call-back methods and event loops.</li>

                <h3>Disadvantages</h3>

                <li> It does not support relational database.</li>
                <li> It not advisable to use it in creating a  large web applications since it is not multi-threaded.</li>
                <li> It is inconsistent that in every update of the API you also have to change your codes.</li>
                
                <h3>Creating a Simple Node.js Application</h3>
                
                <p>
                    // Import the directive load which is the http module.
                    <br>
                    var http = require("http");
                    <br>
                    <br>

                    //We create the server the bind it on port number 8080.
                    <br>
                    http.createServer(function (request, response) {
                    <br>
                    response.writeHead(200, {'Content-Type': 'text/plain'});
                    <br>
                    //The response body is Hello World
                    <br>
                    response.end('Hello World\n');
                    <br>
                    }).listen(8080);
                    <br>

                    //Then the console displays the content.
                    <br>
                    console.log('Server running at http://127.0.0.1:8080/');
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