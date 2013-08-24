<?php

$flavors = array("Vanilla","Chocolate","Strawberry","Cookie Dough");

?><html>
<body>
<?php echo $flavors[0] . "\n" . $flavors[1] . "\n" . $flavors[2]; ?>



	<p><?php echo "We have " . count($flavors) . " flavors available.  Here's a list:\n"; ?></p>

	<?php
	foreach ($flavors as $flavor) { ?>
		
		<div><?php echo $flavor; ?></div>

	<?php } ?>

	<?php

		$flavors = array("Vanilla", "Chocolate", "Strawberry");

		$flavors[] = "Cookie Dough"; ?>

		<div><?php echo count($flavors); ?></div>

	?>

	<?php

	$flavors = array("Vanilla", "Chocolate", "Strawberry");

	$flavors = array("Cookie Dough"); ?>

	<div><?php echo count($flavors); ?></div>

	

</body>
</html>