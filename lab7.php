<?php
/**
 * This file is the main file that contains the navigation menu to other pages of lab7.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed <fouzaan.shaiknissar@dcmail.ca>
 * @version 1.0 (month, day, year)
 */
$title = "Database introduction";
$file = "lab7.php";
$description = "This file is the main file that contains the navigation menu to other pages of lab7.";
$date = "2023/Mar/22 ";
$banner = "Lab 7- Database introduction";
include("./header.php");
?>
<h3>
    <?php echo $title; ?>
</h3>
<p>
    This is the main file that contains the navigation menu to other pages of lab7, it contains SQL files and other php
    files which utilize the following: SQL databse and its cammands such as pg_connect(), pg_fetch_result(),pg_query()
    etc.
</p><br />
<ul>
    <li>
        <a href="./lab7_bond_info.php">lab7_bond_info</a>
    </li>
    <li>
        <a href="./lab7_auto_info.php"> lab7_auto_info</a>
    </li>
    <li>
        <a href="./sql/lab7_bond_movies.sql"> lab7_bond_movies</a>
    </li>
    <li>
        <a href="./sql/lab7_auto_records.sql"> lab7_auto_records</a>
    </li>
</ul>
<?php
include("./footer.php");
?>