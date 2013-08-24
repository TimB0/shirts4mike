<?php

	$name = "Mike the Frog"

?>
<h1>My name is <?php echo $name; ?>.</h1>

<?php

	$flavor = "cookie dough";
?>

	<?php if($flavor == "cookie dough") { ?>
		<p><?php echo "Your favorite flavor of ice cream is the same as mine!"; ?></p>
	<?php } ?>