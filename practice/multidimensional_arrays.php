<?php


/* Start with a regular array

$countries = array();
$countries["US"] = "United States";
$countries["DE"] = "Germany";

*/

// Change into a Multidimensional array

$countries = array();
$countries[0] = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washington, D.C.",
	"population" => 225000000,
	"anthem" => "The Star-Spangled Banner"
);
$countries[1] = array(
	"code" => "DE",
	"name" => "Germany",
	"capital" => "Berlin",
	"population" => 8179960,
	"anthem" => "Song Of The Germans"
);

?>



<?php foreach($countries as $country) { ?>
<h1><?php echo $country["name"]; ?></h1>
<dl>
	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
	<dt>Capital</dt>
	<dd><?php echo $country["capital"]; ?></dd>
	<dt>Population</dt>
	<dd><?php echo $country["population"]; ?></dd>
</dl>
<?php } ?>



<pre>



	
Accessing the Whole Array:</br>
<?php var_dump($countries); ?></pre>

Accessing the 1st Array:</br>
?><pre><?php var_dump($countries[0]); ?></pre>

Looking in the 1st Array for a key with the value "code"
?><pre><?php var_dump($countries[0]["code"]); ?></pre>


<?php

$movies[] = array(

        "title" => "The Empire Strikes Back",

        "year" => 1980

    );

$movies[] = array(

        "title" => "Back to the Future",

        "year" => 1985

    );

foreach($movies as $item) {

    echo $item["year"];

}

?>

<?php

$books["978-0743261690"] = "Gilgamesh";
$books["978-0060931957"] = "The Odyssey";
$books["978-0192840509"] = "Aesop's Fables";
$books["978-0520227040"] = "Mahabharta";
$books["978-0393320978"] = "Beowulf";

?>

 <h1>Five Great Books</h1>
    <ul>
        <?php foreach($books as $isbn => $book) {
        	echo "<li>";
        	echo $book . " "."(" . $isbn . ")";
        	echo "</li>";
        	} 
        ?>
    </ul>