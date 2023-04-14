<?php
/**
 * This file contains essential functions such as connect etc.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed <fouzaan.shaiknissar@dcmail.ca>
 * @version 1.0 (month, day, year)
 */

// connects to the database using important credentials.

define('MINIMUM_ID_LENGTH', 5);
define('MAXIMUM_ID_LENGTH', 20);
define('MINIMUM_PASSWORD_LENGTH', 6);
define('MAXIMUM_PASSWORD_LENGTH', 15);
define('MAX_FIRST_NAME_LENGTH', 20);
define('MAX_LAST_NAME_LENGTH', 30);
define('MAXIMUM_EMAIL_LENGTH', 255);

function db_connect()
{
    $conn = pg_connect("host=127.0.0.1 dbname=nissarf_db user=nissarf password=nissarf");
    return $conn;
}

// displaying the copy right information.
function displayCopyright()
{
    echo "&copy; " . date("Y") . " Fouzaan";
}

?>