<?php 
/**
 * This is the Lab 2 page for Web Development - Fundamentals (INFT1206), here we are building and playing with tables like nesting then merging them etc.
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Lab2";
$file = "Lab2.php";
$description = 'This is the Lab 2 page for Web Development - Fundamentals (INFT1206), here we are building and playing with tables like nesting then merging them etc.';
$date = "February 15, 2023";
$banner = '<h1>Lab2</h1>';
include("./header.php");
?>
<p> In this lab we are playingh with HTML tables and creating diffrent layouts with it, we created tables of HTML elements, we created table of favroite books and we also did nested tables </p>
            <table width="90%">
                    <caption>  HTML Table Tags</caption>
                <tr align="center">
                    <th> Tag  </th>
                    <th> Description </th>
                </tr>
                <tr align="center">
                    <td>
                        &lt;table&gt;
                    </td>
                    <td> This tags creats a new table in html </td>
                </tr>
                <tr align="center">
                    <td>&lt;tr&gt;</td>
                    <td> it is a start of a row in an HTML table, this tags must exists under  &lt;table&gt;  &lt;/table&gt; tag </td>
                </tr>
                <tr align="center">
                    <td>&lt;td&gt;</td>
                    <td> td is  cell in HTML table it shoud exixts inside &lt;tr&gt; ... &lt;/tr&gt; </td>
                </tr>
                <tr align="center">
                    <td>&lt;th&gt;</td>
                    <td> it is same as &lt;th&gt; but the text iside it is bold and centered, it can be used as &lt;th&gt;...&lt;/th&gt; </td>
                </tr>
                <tr align="center">
                    <td>&lt;caption&gt;</td>
                    <td> this will place a indroductory caption for the table. it can be used as &lt;caption&gt; ...... &lt;/caption&gt; </td>
                </tr>
        
            </table> 
            <hr/>
            <table align="center" width="90%">
                <tr align="center">
                    <th> Title </th>
                    <th> Author </th>
                    <th> Year of publication </th>
                    <th> description </th>
                </tr>
                <tr align="center">
                    <td> The Greate cannon </td>
                    <td>  James D Web </td>
                    <td>  2002 </td>
                    <td> This books deals with the world canons and its damages, and history of cannos, and who invented it.</td>
                </tr>
                <tr align="center">
                    <td> What is every body saying </td>
                    <td>  Joe Navaro </td>
                    <td>  2001 </td>
                    <td> This book is about body language and how to communicate with body language, and how we can catch lie using body languages. </td>
                </tr>
                <tr align="center">
                    <td> the google book </td>
                    <td>  Lary Page </td>
                    <td>  2012 </td>
                    <td> this books tells everything about how google was born and, what went inside when creating google, challenges and how they overcome challenges </td>
                </tr>
            </table>
            <hr/>
            <table align="center" width="90%">
                <tr>
                    <th></th>
                    <th> Monday </th>
                    <th> Tuesday </th>
                    <th> Wednesday </th>
                    <th> Thrusday </th>
                    <th> Friday </th>
                </tr>
                <tr valign="top">
                    <td>8:10-<br/> 9:00am</td>
                    <td class="classes" rowspan="2"> WEBD <br/> 12006 <br/> 12234 </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="classes" rowspan="2"> WEBD <br/> 12006 <br/> 12234 </td>
                </tr>
                <tr valign="top">
                    <td>9:10-<br/> 10:00am</td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                </tr>
                <tr valign="top" >
                    <td>10:10-<br/> 11:00am</td>
                    <td></td>
                    <td></td>
                    <td class="lunchtime" align="center"  colspan="2"> Lunch <br/></td>
                    <td class="classes" rowspan="2"> Testing <br/> 1208 <br/> 1267 </td>
                    
                </tr>
                <tr valign="top" >
                    <td>11:10-<br/> 12:00pm</td>
                    <td></td>
                    <td></td>
                    <td class="classes" rowspan="2"> Math <br/> MT4569 <br/> 98721 </td>
                    <td></td>
                    
                </tr>
                <tr valign="top" >
                    <td>12:10-<br/> 1:00pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr valign="top" >
                    <td>1:10-<br/> 2:00pm</td>
                    <td class="lunchtime" align="center"  colspan="2"> Lunch <br/></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr valign="top" >
                    <td>2:10-<br/> 3:00pm</td>
                    <td class="classes" rowspan="2"> Math <br/> MT4569 <br/> 98721 </td>
                    <td class="lunchtime" align="center"  colspan="2"> Lunch <br/></td>
                    <td class="classes" rowspan="2"> OOP <br/> JA007 <br/> 18764 </td>
                    <td></td>
                </tr>
                <tr valign="top">
                    <td>3:10-<br/> 4:00pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr valign="top">
                    <td>4:10-<br/> 5:00pm</td>
                    <td></td>
                    <td></td>
                    <td class="classes" rowspan="2"> OOP <br/> JA007 <br/> 18764 </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr valign="top">
                    <td>5:10-<br/> 6:00pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
<?php 
include("./footer.php");
?>
