<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of php Assignment Operators.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Assignment Operators";
$file = "lab4assignscript.php";
$description = 'This is the Lab 4 page for Web Development - Fundamentals (INFT1206), here we are showing the Assignment Operators.';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - Assignment Operators</h1>';
include("./header.php");
?>
<br>

<h3>
    <?php echo $title ?>
</h3>
<p>As with any language PHP has the normal mechanisms for assigning values to variables.</p>
<table>
    <tbody>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>=</td>
            <td>Assigns a value to a variable.</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>Adds the new value to the value already in the variable</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>Subtracts the new value from the value already in the variable</td>
        </tr>
        <tr>
            <td>.=</td>
            <td>For strings, concatenates the new value to the string already in the variable</td>
        </tr>
    </tbody>
</table>
<p>Here is an example of these operators:</p>
<br>
<code>
    $counter = 100;<br>
    echo "&lt;p&gt;Original value is $counter&lt;/p&gt;";<br>
    $counter += 7;<br>
    echo "&lt;p&gt;Added a value, now it's $counter&lt;/p&gt;";<br>
    $counter -= 2;<br>
    echo "&lt;p&gt;Subtracted a value, now it's $counter&lt;/p&gt;";<br>
    $counter .= "mango";<br>
    echo "&lt;p&gt;Final answer: $counter&lt;/p&gt;";<br>
</code>
<p>The above code produces the following: </p>
<?php
// Initialize a variable with a value
$counter = 100;
echo $counter;
// Use the ++ operator to increment the value of $counter by 1
$counter += 7;
echo "<br>";
echo "7 is added using the operator += 7, now the counter value is $counter";
// Use the -= operator to subtract 2 from the value of $counter
$counter -= 2;
echo "<br>";
echo "2 is substracted using the operator -= 2, now the counter value is $counter";
// Use the *= operator to multiply the value of $counter by 5
$counter .= " mango";
echo "<br>";
echo "mongo is concatenated using the operator .= mango, now the counter value is $counter";
// final answer
echo "<br>";
echo "final answer $counter"
    ?>
<br>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php
include("./footer.php");
?>