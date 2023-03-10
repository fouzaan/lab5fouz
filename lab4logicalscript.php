<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of Logical Operators in php.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Logical Operators";
$file = "lab4logicalscript.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are displaying examples of Logical Operators in php by using a table';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Logical Operators</h1>';
include("./header.php");
?>
<br>
<?php
// Initializeing three variables with boolean values
$var1 = true;
$var2 = false;
$var3 = true;

// Useing logical operators to combine the values of the variables
$and = $var1 && $var2;
$or = $var1 || $var2;
$not = !$var1;
$xor1 = $var1 xor $var2;
$xor2 = $var1 xor $var3;
?>
<h3>
	<?php echo $title ?>
</h3>
<p> there are logical operators such as && || etc</p>

<h3>PHP Logical Operator Table in HTML</h3>
<table>
	<thead>
		<tr>
			<th>Operator</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<?php echo $var1 ? 'true' : 'false'; ?> &&
				<?php echo $var2 ? 'true' : 'false'; ?>
			</td>
			<td>
				<?php echo $and ? 'true' : 'false'; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $var1 ? 'true' : 'false'; ?> ||
				<?php echo $var2 ? 'true' : 'false'; ?>
			</td>
			<td>
				<?php echo $or ? 'true' : 'false'; ?>
			</td>
		</tr>
		<tr>
			<td>!
				<?php echo $var1 ? 'true' : 'false'; ?>
			</td>
			<td>
				<?php echo $not ? 'true' : 'false'; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $var1 ? 'true' : 'false'; ?> xor
				<?php echo $var2 ? 'true' : 'false'; ?>
			</td>
			<td>
				<?php echo $xor1 ? 'true' : 'false'; ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $var1 ? 'true' : 'false'; ?> xor
				<?php echo $var3 ? 'true' : 'false'; ?>
			</td>
			<td>
				<?php echo $xor2 ? 'true' : 'false'; ?>
			</td>
		</tr>
	</tbody>
</table>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php
include("./footer.php");
?>