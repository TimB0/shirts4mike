<?php

$countries = array();
$countries["US"] = "United States";
$countries["DE"] = "Germany";

echo $countries["DE"];

////////////////////////////////////////////

/*
$country = array();
$country["code"] = "US";
$country["name"] = "United States";
$country["capital"] = "Washington, D.C.";
$country["population"] = 225000000;
$country["anthem"] = "The Star-Spangled Banner";
*/

$country = array(
	"code" => "US",
	"name" => "United States",
	"capital" => "Washington, D.C.",
	"population" => 225000000,
	"anthem" => "The Star-Spangled Banner"
);
?>

<h1><?php echo $country["name"]; ?></h1>
<dl>
	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
	<dt>Capital</dt>
	<dd><?php echo $country["capital"]; ?></dd>
	<dt>Population</dt>
	<dd><?php echo $country["population"]; ?></dd>
</dl>

<?php
$movie = array(
		"title" => "The Empire Strikes Back",
    "year" => "1980",
    "director" => "Irvin Kershner",
    "imdb_rating" => "8.8",
    "imdb_ranking" => "11"
);
?>

<h1><?php echo $movie["title"] . " (" . $movie["year"] . ")"; ?></h1>

<table>
<tr>
<th>Director</th>
<td><?php echo $movie["director"]; ?></td>
</tr>
<tr>
<th>IMDB Rating</th>
<td><?php echo $movie["imdb_rating"]; ?></td>
</tr>
<tr>
<th>IMDB Ranking</th>
<td><?php echo $movie["imdb_ranking"]; ?></td>
</tr>
</table>