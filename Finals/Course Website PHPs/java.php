<?php
	session_start();
	class DBphp extends SQLite3{
	function __construct(){
			$this->open('../quizgame.db');
		}
	}
	$db = new DBphp();
	$query1="SELECT file_path FROM quiz WHERE name='Crossword puzzle';";
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
				<h2>Java Servlet</h2>
				<ul>
					<li>Java objects that are intended to play the role of server components in client-server communication.</li>
					<li>Handles the client requests by generating responses to such requests.</li>
					<li>Part of the Java EE specification (see <a href="https://docs.oracle.com/javaee/7/api/javax/servlet/package-summary.html">Java Servlet API</a> for more details).</li>
				</ul>

				<h3>Servlet Life Cycle</h3>
				<ul>
					<li>instantiation - constructor call
						<ul>
							<li>Creates an instance of the servlet to service client requests.</li>
							<li>Invoked implicitly by the servlet container when the servlet is called upon to service a client request and no instance currently exists.</li>
						</ul></li>
					<li>initialization - init() method
						<ul>
							<li>Invoked only once and is intended for any startup initialization code for the servlet.</li>
						</ul></li>
					<li>request handling - service() method
						<ul>
							<li>Invoked for each client request..
							servlet performs whatever logic is necessary in order to serve the request and generate a response.</li>
							<li>Multiple client requests are typically handled by a single, multi-threaded servlet instance, thus,
							to ensure that the code is being run by the servlet is 'thread-safe'.</li>
						</ul></li>
					<li>destruction - destroy() method
						<ul>
							<li>Invoked before the servlet instance is 'unloaded', and is intended for any 'housekeeping' code that the servlet may need to run.</li>
						</ul></li>
				</ul>

				<h3>HttpServlet</h3>
				<ul>
					<li>Java servlet is used to handle HTTP request and generate HTTP responses.</li>
					<li>Hosted in a 'web container' , which is a component in a Java 'application server'( e.g, Apache Tomcat, Red Hat Jboss/WildFly, Oracle GlassFish, IBM WebSphere, etc.).</li>
					<li>The service() method call is routed to a doXXX() call, depending on the HTTP request method, e.g., doGet(), doPost(), doHead(), doPut(), doDelete(), etc.</li>
					<li>The doXXX() methods are passed two arguments:
						<ul>
							<li>HttpServletRequest
								<ul>
									<li>Object representation of the HTTP request sent by the client and received by the servlet.</li>
									<li>Used to access information from the request message (e.g., HTTP request method, request URI, query string, message headers, message payload, etc.).</li>
								</ul></li>
							<li>HttpServletResponse
								<ul>
									<li>Object representation of the HTTP response generated by the servlet and sent back to the requesting client.</li>
									<li>Used to set information in the response message (e.g., HTTP response status code,  message headers, message payload, etc.).</li>
								</ul></li>
						</ul>
						<p>* The web container facilitates the conversation to and from the HTTP request/response messages to HttpServletRequest/HttpServletResponse.</p></li>

					<div class="sample-code">
							<span class="keyword">protected void</span> doGet(HttpServletRequest request, HttpServletResponse response) <span class="keyword">throws</span> ServletException, IOException {<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;response.setContentType(<span class="string">"text/html"</span>);<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;PrintWriter out = response.getWriter();<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;out.println(<span class="string">"&lt;h1>Hello Webtech!!!&lt;/h1>"</span>);<br>

									&nbsp;&nbsp;&nbsp;&nbsp;out.close();<br>
							}
					</div>
				</ul>

				<h3>Send Information to Server</h3>
				<p>Sending information from client browser to the server is important and often done. There are two ways of sending infomation to the server, using GET method and POST method.</p>

					<h4>doGet(HttpServletRequest request, HttpServletResponse response)</h4>
					<p>This method handles GET request by the client. This method is commonly used for passing information from the client to the server. Get method is not recommended when passing or sending sensitive information like password to the server.</p>

					<h4>doPost(HttpServletRequest request, HttpServletResponse response)</h4>
					<p>This method handles POST request by the client. This method is commonly used for passing information to the server. This is commonly used for passing information from forms.</p>

					<h4>Get data from form</h4>
					<p></p>
					<ul>
						<li>getParameter() - This method is used to get value from form by putting the id as the argument.</li>
						<li>getParameterValues() - This method is used for multiple values parameter like checkbox.</li>
						<li>getParameterNames() - This method is used to get the complete list of parameter.</li>
					</ul>
					<div class="sample-code">
						<span class="keyword">&lt;html></span><br>
					   	&nbsp;&nbsp;<span class="keyword">&lt;body></span><br>
					      &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;form</span> action = <span class="string">"HelloForm"</span> method = <span class="string">"GET"</span><span class="keyword">></span><br>
					        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name: <span class="keyword">&lt;input</span> type = <span class="string">"text"</span> name = <span class="string">"name"</span><span class="keyword">></span><br>
					        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;br/></span><br>
					        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;input</span> type = <span class="string">"submit"</span> value = <span class="string">"Submit"</span> <span class="keyword">/></span><br>
					      &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">&lt;/form></span><br>
					   	&nbsp;&nbsp;<span class="keyword">&lt;/body></span><br>
						<span class="keyword">&lt;html></span><br>
					</div>
					<br>
					<div class="sample-code">
						<span class="keyword">protected void</span> doGet(HttpServletRequest request, HttpServletResponse response) <span class="keyword">throws</span> ServletException, IOException {<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;response.setContentType(<span class="string">"text/html"</span>);<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;PrintWriter out = response.getWriter();<br><br>

									&nbsp;&nbsp;&nbsp;&nbsp;out.println(<span class="string">"&lt;h1>My Name is "</span> + request.getParameter(<span class="string">"name"</span>) + <span class="string">"&lt;/h1>"</span>);<br>

									&nbsp;&nbsp;&nbsp;&nbsp;out.close();<br>
							}
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