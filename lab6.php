<?php
/**
 * short description
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author your name <your dc mail>
 * @version 1.0 (03, 17, 2023)
 */
$title = "Lab 6 - Self-Referring Forms";
$file = "lab6.php";
$description = "description";
$date = "2023-03-17";
$banner = "Lab 6 - Self-Referring Forms";
include("./header.php");
$error = "";
$output = "";
$start = "";
$stop = "";
$incr = "";
define("MAX_ITERATIONS", 100);
echo " <h2>$title </h2> <br/> <p>This lab 6 page has a temprature converter scale which converts temprature based on user input. It takes three user input start, stop, and increment.It also does validation by using in built functions such as !is_numeric() etc.At the end when there is no errors it outputs the table of conversion.</p>";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $start = $_POST['n1Input'];
    $stop = $_POST['n2Input'];
    $incr = $_POST['n3Input'];

    if (!isset($start) || $start == "") {
        $error .= 'Please enter start it can not be empty, you entered ' . $start . '<br/>';
        $start = "";
    } elseif (!is_numeric($start)) {
        $error .= 'Please enter a number start can only be numeric, you entered ' . $start . '<br/>';
        $start = "";
    }


    if (!isset($stop) || $stop == "") {
        $error .= 'Please enter stop it can not be empty, you entered' . $stop . '<br/>';
        $stop = "";
    } elseif (!is_numeric($stop)) {
        $error .= 'Please enter a number stop can only be numeric, you entered ' . $stop . '<br/>';
        $stop = "";
    } elseif ($stop < $start) {
        $error .= "Your stoping temperature must be more than your starting temperature you entered " . $stop . "<br/>";
        $stop = "";
    }

    if (!isset($incr) || $incr == "") {
        $error .= 'Please enter a number increment can only be numeric you entered ' . $incr . '<br/>';
        $incr = "";
    } elseif ($incr < 0) {
        $error .= 'Please enter a number greater than 0 increment can only be positive numeric.you entered ' . $incr . '<br/>';
        $incr = "";
    } elseif ($incr == 0) {
        $error .= 'Please enter a number greater than 0 increment can only be positive numeric.you entered ' . $incr . '<br/>';
        $incr = "";
    } elseif (!is_numeric($incr)) {
        $error .= 'Please enter a number increment can only be numeric.you entered ' . $incr . '<br/>';
        $incr = "";
    }

    function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * 9 / 5) + 32;
        return $fahrenheit;
    }
    if ($error == "") {

        $step = ($stop - $start) / ($incr) + 1;


        if ($step >= MAX_ITERATIONS) {
            $error .= "Step size must be lower than " . MAX_ITERATIONS . " please try again.";
        } else {
            $output = '<table>';
            // Add table header row
            $output .= '<tr><th>Celsius</th><th>Fahrenheit</th></tr>';
            // Loop through the range of values
            for ($i = 0; $i < $step; $i++) {
                // Call the conversion function
                $value = $start + $i * $incr;
                $fahrenheit = celsiusToFahrenheit($value);
                // Add a row to the table for each converted temperature
                $output .= '<tr><td>' . $value . '&deg;</td><td>' . $fahrenheit . '&deg;</td></tr>';
            }
            $output .= '</table>';
        }
    }
}
?>
<h3 id="error">
    <?php echo $error; ?>
</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Starting Temprature : <input type="text" name="n1Input" value="<?php echo $start ?>" />
    <br />
    Ending Temprature : <input type="text" name="n2Input" value="<?php echo $stop ?>" />
    <br />
    Temperature increment : <input type="text" name="n3Input" value="<?php echo $incr ?>" />
    <br />
    <input type="submit" />
</form>
<h3 id="output">
    <?php echo $output; ?>
</h3>

<?php
include("./footer.php");
?>