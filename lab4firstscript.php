<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of php creating html tags and html tags parsing php or Code Cohabitation.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Code Cohabitation";
$file = "lab4firstscript.php";
$description = 'Here we can see the examples on Code Cohabitation';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Code Cohabitation</h1>';
include("./header.php");
?>
<h3>
	<?php echo $title ?>
</h3>
<p>Code cohabitation in PHP refers to the ability to include HTML code within PHP code and vice versa. Since PHP code is
	executed on the server-side before sending the resulting HTML to the client's browser, you can mix HTML and PHP code
	to create dynamic web pages.</p>
<br>
<p>In this example, we all can see that php is creating html tags</p>
<?php
// Define a variable
$Number1 = 42;

// Perform a calculation
$NumberRes = $Number1 * 2;
?>
<code>
&lt;?php <br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "&lt;p&gt;&lt;em&gt;Hello World! I'm using PHP!&lt;/em&gt;&lt;/p&gt;"; <br>
?&gt;
</code>
<br>
<h4> or </h4>
<p>In this example, we all can see we are using php in html</p>

<p>The result of doubling
	<?php echo $Number1; ?> is
	<?php echo $NumberRes; ?>, This is done using php in html.
</p>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php
include("./footer.php");
?>