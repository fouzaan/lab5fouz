<?php
/**
 * this file is a part of lab4 which is showing us escape pattren php.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "php escape";
$file = "lab4errorscript.php";
$description = 'This is the Lab 4 page for Web Development - this file is a part of lab4 which is showing us escape pattren php';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - php escape</h1>';
include("./header.php");
?>
<br>
<h3><?php echo $title?></h3>
<br>
<h4>There are many instances when you we want to print a character that is being used as a delimiting character by the interpreter. PHP allows you to 'escape' the interpreter by using a backslash in-front of the character you want the interpreter to skip.</h4>
<br>
<code>
    //I want to print a string so I write:<br>
    echo "&lt;p&gt;"people are always running behind money &lt;/p&gt;";<br>
    //However this will produce an error because of use of quotations to delimit the echo statement and there use to mark the quote itself.<br>
    <br>
    //To code this correctly we need to write it like this:<br>
    echo "&lt;p&gt;\"people are always running behind money.\" &lt;/p&gt;";<br>
</code>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>