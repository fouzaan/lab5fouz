<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of PHP Variables and Data Types.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "PHP Variables and Data Types";
$file = "lab4printvarscript.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are seeing defination and examples of PHP Variables and Data Types in php.';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - PHP Variables and Data Types</h1>';
include("./header.php");
?>
<br>
<h3><?php echo $title?></h3>
<br>
<p>in php we have primary data types such as Integer, Float, String, Boolean, Array </p>
<?php
	// Define some variables with different data types
	$myString = "Hello, world!";
	$myNumber = 42;
	$myBoolean = true;
	$myArray = array("apple", "banana", "cherry");

	// Create an HTML table to display the variables
	echo "<table>\n";
	echo "<tr><th>Variable</th><th>Data Type</th><th>Value</th></tr>\n";
	echo "<tr><td>myString</td><td>string</td><td>$myString</td></tr>\n";
	echo "<tr><td>myNumber</td><td>integer</td><td>$myNumber</td></tr>\n";
	echo "<tr><td>myBoolean</td><td>boolean</td><td>$myBoolean</td></tr>\n";
	echo "<tr><td>myArray</td><td>array</td><td>" . implode(", ", $myArray) . "</td></tr>\n";
	echo "</table>\n";
?>
<p> the above script runs as follows</p>
<?php 
echo $myString;
echo'<br>';
echo $myNumber;
echo'<br>';
echo $myBoolean;
?>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>