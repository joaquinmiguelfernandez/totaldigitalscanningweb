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
		<?php
			if(isset($_POST['user_submit'])) {
				// Connect to mysql
				$conn = mysql_connect('localhost', 'wampmysqld', '') or die('Could not connect: ' . mysql_error());
				// Select database
				mysql_select_db('test_1') or die('Could not select DB');
				
				// Insert input
				$user_id = $_POST['user_id'];
				$user_pwd = $_POST['user_pwd'];
				// Request database.
				$query = "SELECT user_pwd FROM users where user_id='$user_id'";
				$result = mysql_query($query) or die('Error, sorry: ' . mysql_error());
				if (!$result) {
					mysql_close($conn);
				}
				$row = mysql_fetch_row($result);

				// Check if password it is ok
				$pwd_ok = false;
				if(strcmp((string) $row[0], $user_pwd) == 0) {
					$pwd_ok = true;
				}
				// Liberar resultados
				mysql_free_result($result);
				// Cerrar la conexión
				mysql_close($conn);
				
				if ($pwd_ok) {
					header( 'Location: http://localhost/messages.php' ) ;
				} else {
				}
			}
		?>
		<section class="main">
			<header>
				<div class="container">
					<h2>TDS Login</h2>
				</div>
			</header>
			<div class="content style5 featured">
				<div class="container small">
					<form method="post" action="#">
						<div class="row">
							<div class="3u"></div><div class="6u"></div><div class="3u"></div>
						</div>
						<div class="row">
							<div class="3u"></div>
							<div class="6u"><input type="text" class="text" placeholder="User Name" name="user_id" id="user_id"/></div>
							<div class="3u"></div>
						</div>
						<div class="row">
							<div class="3u"></div>
							<div class="6u"><input type="password" class="text" placeholder="Password" name="user_pwd" id="user_pwd"/></div>
							<div class="3u"></div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" class="button" value="Login" name="user_submit" id="user_submit"/></li>
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