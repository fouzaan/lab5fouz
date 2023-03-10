<?php
/**
 * this file is a part of lab5 which is showing as an exapmple of using a constant to view our ip address.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 8, 2023)
 */
$title = "Remote Address";
$file = "lab5_remoteaddress.php";
$description = 'This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are seeing the ip address of the network by using the constant REMOTE_ADDR.';
$date = "February 15, 2023";
$banner = '<h1>Lab5 - Remote Address</h1>';
$address = getenv("REMOTE_ADDR");
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<p>This is the Lab 5 page for Web Development - Fundamentals (INFT1206), here we are seeing the ip address of the
    network by using the constant REMOTE_ADDR. Then we are passing the constant and echoing it to see the results</p>
<p>Your IP address is
    <?php echo $address ?>.
</p>
<a href="lab5.php">Back to Lab 5 Menu</a>
<?php
include("./footer.php");
?>