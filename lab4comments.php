<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of php Commenting our Code.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Commenting Your Code";
$file = "lab4comments.php";
$description = 'This is the Lab 4 page for Web Development - we will discover Commenting Your Code in php.';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Commenting Your Code</h1>';
include("./header.php");
?>
<h3><?php echo $title?></h3>
<br>
<h4> Its best practisses to put comments in the code, too se the comments see the source</h4>
<br>
<?php
	// This is a PHP script that outputs an ASCII art tree
	// The following lines of code define the ASCII art tree using a multi-line string
     echo "comments are done using // slashes or multi line using /* your multiline comments here */";
     echo "see consle for more comments";
	// This is the end of the script
        /*
     /\\
    //\\\\
   ///\\\\\\
  ////\\\\\\\\
 /////\\\\\\\\\\
//////\\\\\\\\\\\\
    */
?>
<br>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php 
include("./footer.php");
?>