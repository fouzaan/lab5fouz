<?php
/**
 * This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are building examples of php code as shown in the textbook'
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "lab4";
$file = "Lab4.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are building examples of php code as shown in the textbook';
$date = "February 15, 2023";
$banner = '<h1>Lab4</h1>';
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<h4>
    <?php echo $description ?>
</h4>
<ul>
    <li><a href="lab4phptags.php">PHP Start and End Tags</a></li>
    <li><a href="lab4firstscript.php">Code Cohabitation</a></li>
    <li><a href="lab4errorscript.php">Escaping Your Code</a></li>
    <li><a href="lab4comments.php">Commenting Your Code</a></li>
    <li><a href="lab4printvarscript.php">PHP Variables and Data Types</a></li>
    <li><a href="lab4constants.php">Using Constants</a></li>
    <li><a href="lab4constants2.php">Using Constants Pt.2</a></li>
    <li><a href="lab4assignscript.php">Assignment Operators</a></li>
    <li><a href="lab4arthimeticscript.php">Arithmetic Operators</a></li>
    <li><a href="lab4comparisonscript.php">Comparison Operators</a></li>
    <li><a href="lab4logicalscript.php">Logical Operators</a></li>
</ul>
<?php
include("./footer.php");
?>