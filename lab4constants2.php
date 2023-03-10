<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of using Using Constants in php.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Using Constants Pt.2";
$file = "lab4constants2.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are seeing example of using Constants Pt.2';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Using Constants Pt.2</h1>';
include("./header.php");
?>
<br>
<h3>
    <?php echo $title ?>
</h3>
<br>
<p>PHP also has a couple of built-in constants.</p>
<br>
<table>
    <tbody>
        <tr>
            <th>Constant</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>__FILE__</td>
            <td>Reports the name of the file.</td>
        </tr>
        <tr>
            <td>__LINE__</td>
            <td>Reports what line of the code the constant is called on.</td>
        </tr>
        <tr>
            <td>PHP_VERSION</td>
            <td>Reports what version of PHP the file is configured in.</td>
        </tr>
        <tr>
            <td>PHP_OS</td>
            <td>Reports what Operating system the file is being run from.</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<p> the following code when excecuted will return this </p>
<br>
<br>
<?php
echo "The current version of PHP is " . PHP_VERSION . ".";
echo "<br>";
echo "<br>";
echo "This code is in file " . __FILE__ . " on line " . __LINE__ . ".";
echo "<br>";
echo "<br>";
echo "The current OS is " . PHP_OS . ".";
?>
<br>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php
include("./footer.php");
?>