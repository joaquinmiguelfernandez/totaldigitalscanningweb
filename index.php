<!DOCTYPE HTML>
<html>
	<head>
		<title>Total Digital Scanning</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>
		<h1 id="logo" class="scrolly"><a href="#fourth">Contact Us</a></h1>

		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1>Welcome to <b>Total Digital Scanning</b></h1>
					<p>Web Under Construction. Sorry!</p>
				</header>
				<footer>
					<a href="#first" class="button scrolly">What We Do?</a></br>
					<div class="social">
					<ul class="icons">
						<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
						<li><a href="https://www.facebook.com/TotalDigitalScanning?ref=stream" class="fa fa-facebook solo"><span>Facebook</span></a></li>
					</ul>
				</footer>
			</section>
			
		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>Company Description</h2>
						<p>Here add all the comments about the company that we think can be relevant to describe what we do and who we are.<br />
						Here add all the comments about the company that we think can be relevant to describe what we do and who we are.</p>
					</div>
				</header>
				<div class="content dark style1 featured">
					<div class="container">
						<div class="row">
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-clock-o"></span></span>
									<header>
										<h3>Support</h3>
									</header>
									<p>We provide support all the year.</p>
								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-bolt"></span></span>
									<header>
										<h3>Quick</h3>
									</header>
									<p>Our system let be more efficient. Forget about trying to get the balance at the end of year, you will
									know always how your company is it going.</p>
								</section>
							</div>
							<div class="4u">
								<section>
									<span class="feature-icon"><span class="fa fa-cloud"></span></span>
									<header>
										<h3>Cloud</h3>
									</header>
									<p>Get all your information on the cloud. You won't lose any paper and will be easy go
									get all the information you need at any place.</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<footer>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		<!-- Fourth -->
		<?php
			if(isset($_POST['message_submit'])) {
				// Connect to mysql
				$conn = mysql_connect('localhost', 'wampmysqld', '') or die('Could not connect: ' . mysql_error());
				echo 'Connected successfully';
				// Select database
				mysql_select_db('test_1') or die('Could not select DB');
				
				// Insert input
				$message_name = $_POST['message_name'];
				$message_email = $_POST['message_email'];
				$message_content = $_POST['message_content'];
				$sql = "INSERT INTO messages "."(message_name,message_email, message_content, message_isread) "."VALUES('$message_name','$message_email','$message_content', false)";
				$retval = mysql_query( $sql, $conn );
				if(! $retval ) {
					die('Could not enter data: ' . mysql_error());
				}
				// Cerrar la conexión
				mysql_close($link);
			}
		?>
			<section id="fourth" class="main">
				<header>
					<div class="container">
						<h2>Contact with us</h2>
						<p>Ask a question, request a service, make a complaint or compliment and we'll reply within three working days.<br />
						</p>
					</div>
				</header>
				<div class="content style3 featured">
					<div class="container small">
						<form method="post" action="<?php $_PHP_SELF ?>">
							<div class="row half">
								<div class="6u"><input type="text" class="text" placeholder="Name" name="message_name" id="message_name"/></div>
								<div class="6u"><input type="email" class="text" placeholder="Email" name="message_email" id="message_email"/></div>
							</div>
							<div class="row half">
								<div class="12u"><textarea placeholder="Message" name="message_content" id="message_content"></textarea></div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="button" value="Send Message" name="message_submit" id="message_submit"/></li>
										<li><input type="reset" class="button alt" value="Clear Form" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<section id="footer">
				<div class="copyright">
					<ul class="menu">
						<li>&copy; TotalDigitalScanning. All rights reserved.</li>
						<li><p> Phone: + 34 626 88 74 89 </p></li>
						<li><p> e-mail: support@totaldigitalscanning.com </p></li>
					</ul>
				</div>
			</section>

	</body>
</html>