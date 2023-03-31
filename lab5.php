<?php
/**
 * this file is lab5 which is showing a navigation menu for navigation with diffrent examples.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "Lab 5 - PHP";
$file = "lab5.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are seeing the file lab5 which is showing a navigation menu for navigation with diffrent examples';
$date = "February 15, 2023";
$banner = '<h1>Lab 5 - PHP</h1>';
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<p> In this lab we are exploring the calculator in php which is using if else statments, and we are also using some
    important constant such as REMOTE_ADDR or HTTP_USER_AGENT and we are also using loops to create html tables for
    showing the conversion of temparature, and we are using functions also to show the same thing.</p>
<ul>
    <li><a href="lab5_calculate_form.php">Calculater form</a></li>
    <li><a href="lab5_remoteaddress.php"> What is my ip</a></li>
    <li><a href="lab5_useragent.php">Remote address</a></li>
    <li><a href="lab5_simple_temp_convert.php">Temprature calculator</a></li>
    <li><a href="lab5_function_temp_convert.php"> Temprature calculator with functions</a></li>
</ul>
<?php
include("./footer.php");
?>