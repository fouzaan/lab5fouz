<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of using Using Constants in php.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Using Constants";
$file = "lab4constants.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are building a css file which will apply all the general css styles to all the pages.';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Using Constants</h1>';
include("./header.php");
?>
<h3><?php echo $title?></h3>
<br>
<p>In PHP you can define constants with the keyword 'define'. That looks like this:</p>
<br>
<code>
    define("MYCONSTANT", "This is a test of defining constants.");
</code>
<br>
<br>
<?php
	// Define a constant for the value of pi
	define("PI", 3.14159);

	// Use the constant in calculations
	$radius = 5;
	$circumference = 2 * PI * $radius;

	// Output the result
	echo "The circumference of a circle with radius $radius is $circumference. here I have defined PI as a constant";
    echo "<br>";
    echo "<br>";
?>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>