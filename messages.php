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
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<section class="main">
			<header>
				<div class="container">
					<h2>TDS Messages List</h2>
				</div>
			</header>
			<div class="content style6 featured">
				<br/><br/>
				<div class="container small">
					<?php
						// Connect to mysql
						$conn = mysql_connect('localhost', 'wampmysqld', '') or die('Could not connect: ' . mysql_error());
						// Select database
						mysql_select_db('test_1') or die('Could not select DB');
						
						$query = 'SELECT * FROM messages';
						$result = mysql_query($query) or die('Fail: ' . mysql_error());

						// Imprimir los resultados en HTML
						echo "<table class='bordered'>\n";
						while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
							echo "\t<tr>\n";
							if(is_array($line)) {
								$i = 0;
								foreach($line as $element) {
									$record[$i++] = $element;
								}
								echo "\t\t<td>$record[1]</td>\n";
								echo "\t\t<td>$record[2]</td>\n";
								echo "\t\t<td>$record[3]</td>\n";
								
								echo "\t\t<td>";
								if($record[4] == true) {
									echo "<input type='checkbox' id='checked' value='' checked=checked'/>";
								} else {
									echo "<input type='checkbox' id='checked' value=''/>";
								}
							}
							echo "\t</tr>\n";
						}
						echo "</table>\n";

						// Liberar resultados
						mysql_free_result($result);
					?>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="button" value="Close Session" onclick="javascript:location.href='http://localhost/login.php'"/></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<br/>
			<br/>
			<br/>
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