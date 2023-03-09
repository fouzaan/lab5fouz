<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of Comparison Operators in php.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Comparison Operators";
$file = "lab4comparisonscript.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are seeing the example Comparison Operators';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Comparison Operators</h1>';
include("./header.php");
?>
<h3><?php echo $title?></h3>
<br>
<p>Like other programming languages PHP has the usual methods for control flow. This includes if/else statements and the standard operators. There comparison operators are ==, !=, <, <=, >=.</p>
<?php
// Initialize two variables with values
$num1 = 10;
$num2 = 5;

// Compare the values of the two variables
$equal = $num1 == $num2;
$notEqual = $num1 != $num2;
$greaterThan = $num1 > $num2;
$lessThan = $num1 < $num2;
$greaterThanOrEqual = $num1 >= $num2;
$lessThanOrEqual = $num1 <= $num2;
?>
<h3>PHP Comparison Operator Table in HTML</h3>
<br>
	<table>
		
			<tr>
				<th>Operator</th>
				<th>Result</th>
			</tr>
	
	
			<tr>
				<td><?php echo $num1; ?> == <?php echo $num2; ?></td>
				<td><?php echo $equal ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> != <?php echo $num2; ?></td>
				<td><?php echo $notEqual ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> > <?php echo $num2; ?></td>
				<td><?php echo $greaterThan ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> < <?php echo $num2; ?></td>
				<td><?php echo $lessThan ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> >= <?php echo $num2; ?></td>
				<td><?php echo $greaterThanOrEqual ? 'true' : 'false'; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> <= <?php echo $num2; ?></td>
				<td><?php echo $lessThanOrEqual ? 'true' : 'false'; ?></td>
			</tr>
	
	</table>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>