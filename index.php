<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Surface Area and Volume of a Pentagonal Prism" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Google MDL -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-pink.min.css" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Surface Area and Volume of a Pentagonal Prism</title>
	</head>
	<body>
		<!-- MDL Header -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	    	<header class="mdl-layout__header">
		        <div class="mdl-layout__header-row">
		        	<span class="mdl-layout-title">Surface Area and Volume of a Pentagonal Prism</span>
		        </div>
	    	</header>
			
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Surface Area and Volume of a Pentagonal Prism</h1></center>';
			echo '<img src="./images/diagram.PNG" width="12%"/>';
			echo '<br><br><img src="./images/surfaceArea.PNG" width="22%"/>';
			echo '<img src="./images/volume.PNG" width="18%"/>';
			echo '<center><p>Formulas for the surface area and volume of a pentagonal prism.</center></p>';
			echo "<p><center>Fill out the text fields below and determine the surface area and volume of the pentagonal prism. Don't forget to put units!</center></p>"; 
		?>
		<!-- Textfields -->
		<form method = "post">   
			Side length (a): <input type="number" name="sideA" step="0.01" min="1">   
			<br><br>   
			Height of the prism (h): <input type="number" name="Height" step="0.01" min="0">   
			<br><br>
			Unit of Measurement: <input type="text" name="Unit">
			<br><br>
			<!-- Button -->
			<input type = "submit" name = "enter" value="Submit">    
			<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$sideA = $_POST['sideA'];   
				$height = $_POST['Height']; 
				$units = $_POST['Unit'];
				$surfaceArea = 5 * $sideA * $height + 1 / 2 * sqrt(5 * (5 + 2 * sqrt(5))) * $sideA ** 2;
				$surfaceArea = round($surfaceArea, 2);
				$volume = 1 / 4 * sqrt(5 * (5 + 2 * sqrt(5))) * $sideA ** 2 * $height;
				$volume = round($volume, 2);

				if ($sideA > 0 && $height > 0 && units != "") {
					if ($units === "mm" or $units === "cm" or $units === "dm" or $units === "m" or $units === "dam" or $units === "hm" or $units === "km") {
						//If everything is correct, output SA and volume
						echo "<br>The surface area of the pentagonal prism is " . $surfaceArea . " " . $units . "??";
						echo "<br>The surface area of the pentagonal prism is " . $volume . " " . $units . "??";
					} else {
						//Error message if unit of measurement is invalid
						echo "<br>The unit of measurement you chose is not valid. Please enter one of the following: mm, cm, dm, m, dam, hm or km";
					}
				}	else {
					//Error message if a text field was left blank
					echo "<br>You need to fill in all the text fields to determine the surface area and volume.";
				}
			}
		?>
	</body>
</html>