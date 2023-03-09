
<?php 
/**
 * This is the Lab 3 page for Web Development - Fundamentals (INFT1206), here we are building a css file which will apply all the general css styles to all the pages.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "lab3";
$file = "Lab3.php";
$description = 'This is the Lab 3 page for Web Development - Fundamentals (INFT1206), here we are building a css file which will apply all the general css styles to all the pages.';
$date = "February 15, 2023";
$banner = '<h1>Lab3</h1>';
include("./header.php");
?>
<p> In this lab we are playingh with CSS styling and we are migrating all the changes from html to a separate css file</p>
                <table width="90%" class="selectordescription" >
                    <tr>

                        <th>
                            selector
                        </th>
                        <th>
                            Selector Type
                        </th>
                        <th>
                            Description
                        </th>
                    </tr>
                    <tr>
                        <td> body</td>
                        <td> Element Selector </td>
                        <td> this applies all the styles to the whole body elenment </td>
                    </tr>
                    <tr>
                        <td>th</td>
                        <td> Element Selector </td>
                        <td> it applies the styling to all the table headers</td>
                    </tr>
                    <tr>
                        <td>table,td</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the to the whole table and the td inside of the table tags</td>
                    </tr>
                    <tr>
                        <td>a:hover</td>
                        <td> Element Selector </td>
                        <td> this applies the changes to the anchor tag or the link when the mouse hovers over it </td>
                    </tr>
                    <tr>
                        <td>a:visited</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the anchor tag or the link when it is already clicked or viewd </td>
                    </tr>
                    <tr>
                        <td>a:link</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the anchor tag or the link when it is in its default state </td>
                    </tr>
                    <tr>
                        <td>a:active</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the anchor tag or the link when the link is in active state</td>
                    </tr>
                    <tr>
                        <td>h1,h2....</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the to h1 and h2 tags</td>
                    </tr>
                    <tr>
                        <td>p</td>
                        <td> Element Selector </td>
                        <td> this applies the changes and styles to the to p tags</td>
                    </tr>
                    <tr>
                        <td>.sidebar</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to the to sidebar which holds all the navigation links ato the whole app</td>
                    </tr>
                    <tr>
                        <td>.lunchtime</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to cells of lunch time in timetable in lab 2</td>
                    </tr>
                    <tr>
                        <td>.classes</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to cells of classes time in classes in lab 2</td>
                    </tr>
                    <tr>
                        <td>.logocell</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to the to the image which is the logo on the website, it is unifirm and responsive</td>
                    </tr>
                    <tr>
                        <td>.imagewidth</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to the to the image in the table which devides the title and image</td>
                    </tr>
                    <tr>
                        <td>.headerwidth</td>
                        <td> Class Selector </td>
                        <td> this applies the changes and styles to the to the image in the table which devides the title and image</td>
                    </tr>
                </table>
<?php 
include("./footer.php");
?>