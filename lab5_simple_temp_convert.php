<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of using a loop to create a temparature converter chart.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "Temperature Conversion Table";
$file = "lab5_simple_temp_convert.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are creating a simple table using the loops in PHP.';
$date = "February 15, 2023";
$banner = '<h1>Lab5 - Temperature Conversion Table</h1>';
include("./header.php");
?>
    <h3>Simple Temperature Conversion</h3>
<p> here we are creating a simple table using the loops in PHP. We are passing td tag inside of the PHP loops by doing this it creats a table.</p>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
            // Loop from -40°C to 100°C in increments of 10°C
            for($celsius = -40; $celsius <= 100; $celsius += 10) {
                // Convert celsius to fahrenheit
                $fahrenheit = ($celsius * 9/5) + 32;
                // Output the table row
                echo "<tr><td>$celsius&deg;C</td><td>$fahrenheit&deg;F</td></tr>";
            }
        ?>
          </table>
           <br>
<a href="lab5.php">Back to Lab 5 Menu</a>
<?php 
include("./footer.php");
?>