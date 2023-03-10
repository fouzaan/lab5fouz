<?php
/**
 * this file is a part of lab4 which is showing as an exapmple of PHP Start and End Tags.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "PHP Start and End Tags";
$file = "lab4phptags.php";
$description = 'PHP Start and End Tags and it ways for implimentation';
$date = "February 15, 2023";
$banner = '<h1>Lab4 - PHP Start and End Tags</h1>';
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<p>Standard PHP gives us three possible ways to embed PHP script in an HTML document. All PHP script
    must be contained within these tags. On this server only the first method renders successfully.</p>
<table>
    <caption>Three Ways to Include PHP</caption>
    <tbody>
        <tr>
            <th>Opening Tag</th>
            <th>Closing Tag</th>
        </tr>
        <tr>
            <td>&lt;?php</td>
            <td>?&gt;</td>
        </tr>
        <tr>
            <td>&lt;?</td>
            <td>?&gt;</td>
        </tr>
        <tr>
            <td>&lt;script language = "php"&gt;</td>
            <td>&lt;/script&gt;</td>
        </tr>
    </tbody>
</table>
<br>
<a href="lab4.php">Back to Lab 4 Menu</a>
<?php
include("./footer.php");
?>