<?php
/**
 * This is the mid term test page for Web Development - Fundamentals (INFT1206), here we are building a css file which will apply all the general css styles to all the pages.
 * url:https://opentech.durhamcollege.org/inft1206/nissarf/Tearn_Test1
 *
 * PHP version 7.1
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "term test 1";
$file = "termtest1.php";
$description = 'This is the Term test 1 page for Web Development - it was developed to see the learning in mid-term';
$date = "February 15, 2023";
$banner = '<h1>Term test 1</h1>';
include("./header.php");
?>
<h3>
    <?php echo $title ?>
</h3>
<h4>
    <?php echo $description ?>
</h4>
<p> This web page will incorparate several topics that have Learned in the course from week 1 top 6 you can find more
    info on <a href="opentech.durhamcollege.org/pufferd/inft1206">Inft1206</a></p>
<table width="90%">
    <tr>

        <th colspan="8">
            <h3>Canadian Network's Thrusday Primetime TV Guide</h3>
        </th>

    </tr>
    <tr>
        <th>
            Network
        </th>
        <th>
            Channel(s)
        </th>
        <th>
            7:00pm
        </th>
        <th>
            7:30pm
        </th>
        <th>
            8:00pm
        </th>
        <th>
            8:30pm
        </th>
        <th>
            9:00pm
        </th>
        <th>

            9:30pm
        </th>
    </tr>
    <tr>
        <td rowspan="2"><img class="tvlogoimagecolor" src="./Images/tvlogos/ctv.png" alt="CTV channel logo" /></td>
        <td> 201 </td>
        <td>etalk</td>
        <td>The big Bang Theory</td>
        <td>Young sheldon</td>
        <td>B Positive</td>
        <td colspan="2">Law &amp; Order</td>
    </tr>
    <tr>
        <td> 202 </td>
        <td>The big Bang Theory</td>
        <td>etalk</td>
        <td colspan="2">Pandora</td>
        <td>The Goldbergs</td>
        <td>The seinfeld</td>
    </tr>
    <tr>
        <td><img class="tvlogoimagecolor" src="./Images/tvlogos/global.png" alt="Global tv channel logo" /></td>
        <td> 203 </td>
        <td>Entertainment Tonight</td>
        <td>ET Canada</td>
        <td>Call Your Mother </td>
        <td>Superstore</td>
        <td>The Neighborhood</td>
        <td>The seinfeld</td>
    </tr>
    <tr>
        <td><img class="tvlogoimagecolor" src="./Images/tvlogos/cbc.png" alt="cbc channel logo" /></td>
        <td> 205 </td>
        <td>Coronation Street</td>
        <td>Family Fued Canada</td>
        <td colspan="2">Burden of Truth </td>
        <td colspan="2">The Fifth Estate </td>
    </tr>
</table>
<?php
include("./footer.php");
?>