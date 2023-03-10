<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of creating table of temprature converter using the function and loop.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "Temperature Conversion Table (With Functions)";
$file = "lab5_function_temp_convert.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are creating a table temarture by using function.';
$date = "February 15, 2023";
$banner = '<h1>Lab5 - Temperature Conversion Table (With Functions)</h1>';
include("./header.php");
?>
<h3>Function-based Temperature Conversion</h3>
<p>this file is a part of lab5 which is showing as an exapmple of creating table of temprature converter using the
    function and loop here we are integrating HTML using loops and PHP functions.</p>
<table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    // Define the conversion function
    function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * 9 / 5) + 32;
        return $fahrenheit;
    }
    // Loop from -40°C to 100°C in increments of 10°C
    for ($celsius = -40; $celsius <= 100; $celsius += 10) {
        // Call the conversion function
        $fahrenheit = celsiusToFahrenheit($celsius);
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