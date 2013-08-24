<?php

function mimic_count($array) {

	$count = 0;
	foreach($array as $element) {
		$count = $count + 1;
	}

	return $count;
}



$flavors = array("Vanilla","Chocolate","Strawberry","Cookie Dough");
$count = mimic_count($flavors);
echo $count;



?>

<?php

$numbers = array(1,5,8);

$sum = 0;
foreach($numbers as $number) {
    $sum = $sum + $number;
}

echo $sum;

?>


<p><?php echo $sum ?></p>



<?php

$x = 1;

function sum_two_numbers($x,$y) {

    $z = $x + $y;

    return $z;

}

$y = sum_two_numbers(2,3);

echo $x;

?>


<?php
/*
$numbers = array(1,2,3,4);

$total = count($numbers);

$sum = 0;

$output = "";

$i = 0;

foreach($numbers as $number) {

    $i = $i + 1;

    if ($i < $total) {

        $sum = $sum + $number;
        echo $number;

    }

}


?>

<?php

$numbers = array(1,2,3,4);

$total = count($numbers);

$sum = 0;

$output = "";

$i = 0;

foreach($numbers as $number) {

    $i = $i + 1;

    if ($i < $total) {

        $output = $number . $output;

    }

}

echo $output;
?>
 */