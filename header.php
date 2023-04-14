<?php
require("./includes/functions.php");
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/inft1206.css" />
		<!-- CHANGE THE HREF ABOVE TO webd2201.css AFTER YOU HAVE COPY AND PASTED THE CONTENTS OF style.css INTO IT -->
		<!--
	Author: Fouzaan Ahmed Shaik nissar
	Filename: <?php echo $file ?>
	Date:  <?php echo $date ?>
	Description: <?php echo $description ?>
	-->
		<title>
			<?php
			echo $title
				?>
		</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
	</head>

	<body>
		<div id="container">
			<div id="header">
				<img src="./Images/mangopic.png" alt="YOUR SITE LOGO ALT" />
				<h1>
					<?php echo $banner ?>
				</h1>
			</div>
			<div id="sites">
				<ul>
					<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">inft1206</a></li>
					<li><a href="http://www.w3schools.com">W3Schools</a></li>
					<li><a href="http://validator.w3.org">XHTML Validator</a></li>
					<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>
					<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
					<li><a href="http://www.durhamcollege.ca">Durham College</a></li>

				</ul>
			</div>
			<div id="content-container">
				<div id="navigation">
					<h3>
						Local Navigation Bar
					</h3>
					<ul>
						<li><a href="./index.php"> Home Page</a></li>
						<li><a href="./lab1.php">Lab 1: Basic XHTML pages</a></li>
						<li><a href="./lab2.php">Lab 2: Working with HTML Tables</a></li>
						<li><a href="./lab3.php">Lab 3: Formatting and Layout with Styles</a></li>
						<li><a href="./termtest1.php">Term Test 1: Mid tearm examination 1</a></li>
						<li><a href="./lab4.php">Lab 4: PHP Chapter Files from textbook</a></li>
						<li><a href="./lab5.php">Lab 5: PHP Calculator</a></li>
						<li><a href="./lab6.php">Lab 6 example: PHP Calculator sticky form</a></li>
						<li><a href="./lab7.php">Lab 7 example: Database intro</a></li>
						<li><a href="./lab9.php">Lab 9: Login Page</a></li>
						<li><a href="./lab10.php">Lab 10: email Page</a></li>
					</ul>
				</div>
				<div id="content">

					<!-- start of main page content. -->