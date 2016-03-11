<!DOCTYPE html>

<html lang="en">

  <head>
  
	<!-- establish correct base based on URL -->
	<?php
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo '<base href="http://localhost/CIS-Project/">';
		else 
			echo '<base href="http://cis425a.wpcarey.asu.edu/dvan3/">';
	?>
	
    <!-- Meta tag -->
    <meta charset = "utf-8" />
	<meta name="robots" content="noindex,nofollow" />	

    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/home.css" />

	<!-- favicon tag -->
	<link type="image/gif" rel="icon" href="images/pitchfork.ico" />
	
    <!-- Web Page Title -->
    <title>Feedies</title>

  </head>
  
  <body>
  		<?php include ('php/header.php'); ?>  
		<p>hi</p>
		<?php include ('php/footer.php'); ?>
  </body>
  
  </html>