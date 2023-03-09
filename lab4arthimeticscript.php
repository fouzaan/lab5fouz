<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of php arthematic operatrs.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "arthematic operatrs";
$file = "lab4arthimeticscript.php";
$description = 'This is the Lab 4 page which shows the arthematic operatrs of php';
$date = "February 15, 2023";
$banner = '<h1>lab4-php arthematic operatrs</h1>';
include("./header.php");
?>

<?php
// Initialize two variables with values
$num1 = 10;
$num2 = 5;

// Calculate the results of various arithmetic operations
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$modulus = $num1 % $num2;
?>
<h3><?php echo $title?></h3>
<br>
<p>PHP has all the usual arithmetic operators: +, -, *, /, and %. The following script demonstrates PHP at work. The calculation in the table is made using php script itself please see the code or more</p>
<table>
	
			<tr>
				<th>Operation</th>
				<th>Result</th>
			</tr>
	
		
			<tr>
				<td><?php echo $num1; ?> + <?php echo $num2; ?></td>
				<td><?php echo $addition; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> - <?php echo $num2; ?></td>
				<td><?php echo $subtraction; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> * <?php echo $num2; ?></td>
				<td><?php echo $multiplication; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> / <?php echo $num2; ?></td>
				<td><?php echo $division; ?></td>
			</tr>
			<tr>
				<td><?php echo $num1; ?> % <?php echo $num2; ?></td>
				<td><?php echo $modulus; ?></td>
			</tr>
		
	</table>


<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>