<?php
/**
 * This is a file for favriote automobiles.php
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed <fouzaan.shaiknissar@dcmail.ca>
 * @version 1.0 (month, day, year)
 */
$title = "Auto Info";
$file = "lab7_example_bond.php";
$description = "This page utilizes several postgreSQL method calls. Such as pg_connect(),
pg_query(), and pg_fetch_result().";
$date = "2023/Mar/22 ";
$banner = "Auto Info";
include("./header.php");
?>
<h3>
    <?php echo $title; ?>
</h3>
<p>
    This page utilizes several postgreSQL method calls. Such as pg_connect(),
    pg_query(), and pg_fetch_result(). Below is a list automobiles information which are created and stored in
    Postgresql here we are using a normal query compared to other php file and we are displayinh the results in an
    assending order
</p>
<!-- setup the table -->
<table border="1" width="100%">
    <tr>
        <th>make</th>
        <th>model</th>
        <th>year</th>
        <th>msrp</th>
    </tr>

    <?php
    $output = ""; //Set up a variable to store the output of the loop 
//connect
    $conn = pg_connect("host=127.0.0.1 dbname=nissarf_db user=nissarf password=nissarf");
    //N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead
    
    //issue the query
    $sql = "SELECT make, model, year, msrp FROM automobiles ORDER BY year ASC";
    $result = pg_query($conn, $sql);
    $records = pg_num_rows($result);

    //generate the table
    for ($i = 0; $i < $records; $i++) { // loop through all of the retrieved records and add to the output variable
        $output .= "\n\t<tr>\n\t\t<td>" . pg_fetch_result($result, $i, "make") . "</td>";
        $output .= "\n\t\t<td>" . pg_fetch_result($result, $i, "model") . "</td>";
        $output .= "\n\t\t<td>" . pg_fetch_result($result, $i, "year") . "</td>";
        $output .= "\n\t\t<td>" . pg_fetch_result($result, $i, "msrp") . "</td>\n\t</tr>";
    }

    echo $output; //display the output
    ?>
</table>
<br /> <a href="lab7.php">Back to Lab 7 Menu</a>
<!-- end the table -->
<?php
include("./footer.php");
?>