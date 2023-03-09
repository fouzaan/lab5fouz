
<?php 
/**
 * This is the Lab 1 page for Web Development - Fundamentals (INFT1206).
 *
 * PHP version 7.1
 *
 * course: INFT1206
 * @author fouzaan ahmed shaik nissar <shaik.nissar@dcmail.ca>
 * @version 1.0 (March, 6, 2023)
 */
$title = "Lab1";
$file = "iLab1.php";
$description = "This is the Lab 1 page for Web Development - Fundamentals (INFT1206)";
$date = "February 15, 2023";
$banner = '<h1>Lab1</h1>';
include("./header.php");
?>
<h3> Einstein's Relativity</h3>
                        <p> This is Einstein's relativity equation, this equation connects mass, energy and light together. We can write this equation in html using super-script &lt;sub/&gt; and italic&lt;i/&gt;. </p>
                <h2>
                   <i>E=mc<sup>2</sup></i> 
        
                </h2>
                <hr/>
                
        
                        <h3> Currency convertion (use of special charectors)</h3>
                        <p> Here we are converting diffrent national currencies like euro to pound etc. We are doing this in HTML by using entites like &amp;pond etc.)</p>
                        <h2>$1.00CDN = $0.703USD = &pound;0.487 = &euro; 0.651 = &yen; 82.77</h2>
                    
        
            <hr/>
            <h3>Code Snippet</h3>
            <p>Here we are writing some java or c++ code, we wrote this using &lt;code/&gt; tag  and we also used &lt;br/&gt; to make some spacces snippetsand other tags. </p>
            <code>
                # include  &lt;iostream.h&gt;>
                <br/>
                    int main()
            <br/>
                    {
                        <br/>
                       &nbsp; count &lt;&lt;'Hello World' &lt;&lt; end1; 
                       <br/>
                      &nbsp; return 0;
                        <br/>
                    }
            </code>
            <hr/>
       
        
            <h3> Chemistry Equation</h3>
            <p>Here we are writing some chemistry equations on hydrogen and oxygen which intern releasses water. We write this by using &lt;sub/&gt; tags</p>
            2H<sub>2</sub> + O<sub>2</sub> => 2H<sub>2</sub>O + heat
            <hr/>
        
        
            <h3>List Example (order importent)</h3>
            <p>Here we are writing a list on, How to start a car. Here we are using ordered list which is &lt;ol/&gt; and &lt;li/&gt;</p>
            <h3>How to start a car</h3>
            <ol>
                <li>Place key in the ignition</li>
                <li>Depress the brake pedal</li>
                <li>Turn the ignition key</li>
            </ol>
            <hr/>
      
        
            <h3>List Example (order unimportent) </h3>
            <p>Here we are building an unordered list using tags such as &lt;ul&gt; and  &lt;li/&gt;</p>
            <h3>Things to do before my trip </h3>
            <ul>
                <li> Re-new passport</li>
                <li> Convert currency</li>
                <li> Print out reservations &amp; itineraies</li>
                <li> Verify vaccinations are up-to-date</li>
            </ul>
<?php 
include("./footer.php");
?>

