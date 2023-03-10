<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of echoing the user input using some inbuilt constants.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "User Agent";
$file = "lab5_useragentscript.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are showing an exapmple of echoing the user input using some inbuilt constants.';
$date = "February 15, 2023";
$banner = '<h1>Lab5 - User Agent</h1>';
$agent = getenv("HTTP_USER_AGENT");
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<p>here we are showing an exapmple of echoing the user input using some inbuilt constants. here we are using the inbuilt
    constants which is HTTP_USER_AGENT</p>
<p>You are using
    <?php echo $agent ?>
</p>
<a href="lab5.php">Back to Lab 5 Menu</a>
<?php
include("./footer.php");
?>