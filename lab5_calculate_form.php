<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of PHP calculator.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "PHP Calculator form";
$file = "lab5_calculate_form.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are seeing creating a new calculator by using a form elenment and passing the values using POSTA METHOD.';
$date = "February 15, 2023";
$banner = '<h1>Lab5 - PHP Calculator form</h1>';
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<p>here we are seeing creating a new calculator by using a form elenment and passing the values using POSTA METHOD for
    example, we are setting form method to so that we have data avaiable globally post. enter the values below to
    calculate.</p>
<FORM METHOD="post" ACTION="lab5_calculate.php">
    <P>Value 1: <INPUT TYPE="text" NAME="val1" SIZE=10></P>
    <P>Value 2: <INPUT TYPE="text" NAME="val2" SIZE=10></P>
    <P>Calculation:<br>
        <INPUT TYPE="radio" NAME="calc" VALUE="add"> add<br>
        <INPUT TYPE="radio" NAME="calc" VALUE="subtract"> subtract<br>
        <INPUT TYPE="radio" NAME="calc" VALUE="multiply"> multiply<br>
        <INPUT TYPE="radio" NAME="calc" VALUE="divide"> divide
    </P>
    <P><INPUT TYPE="submit" NAME="submit" VALUE="Calculate"></P>
</FORM>

<a href="lab5.php">Back to Lab 5 Menu</a>
<?php
include("./footer.php");
?>