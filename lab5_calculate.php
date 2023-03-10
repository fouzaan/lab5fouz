<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of PHP calculator output.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
if (($_POST["val1"] == "") || ($_POST["val2"] == "") || ($_POST["calc"] == "")) {
    header("Location: lab5_calculate_form.php");
    exit;

}
$title = "PHP calculator output";
$file = "lab5_calculate.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are outputiing the calculation made by using else if and by usinf POST method..';
$date = "march 8 , 2023";
$banner = '<h1>Lab5 - PHP Calculator output.</h1>';
include("./header.php");
echo "<h3> $title </h3>";
echo "<p> Here we are outputting the result from the calulator form page, in the form we used POST method which enables us to make the variables global and we can acess the variable by using POST['variable'] address</p>";
if ($_POST["calc"] == "add") {
    $result = $_POST["val1"] + $_POST["val2"];
} else if ($_POST["calc"] == "subtract") {
    $result = $_POST["val1"] - $_POST["val2"];
} else if ($_POST["calc"] == "multiply") {
    $result = $_POST["val1"] * $_POST["val2"];
} else if ($_POST["calc"] == "divide") {
    $result = $_POST["val1"] / $_POST["val2"];
}
?>
<p> the result of the calculation is
    <?php echo $result ?>
</p>
<br>


<a href="lab5.php">Back to Lab 5 Menu</a>
<?php
include("./footer.php");
?>