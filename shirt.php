<?php 
include("inc/products.php"); 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];		
	}
}


if(!isset($product)) {
	header("Location: shirts.php");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php");
?>

	<div class="section page">

		<div class="wrapper">

			<div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?></div>

			<div class="shirt-picture">
				<span>
					<img src=<?php echo $product["img"]; ?> alt=<?php echo $product["name"]; ?>
				</span>	
			</div>

			<div class="shirt-details">

				<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
					<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
					<table>
					<tr>
						<th>
							<input type="hidden" name="on0" value="Size">
							<label for="os0">Size</label>
						</th>
						<td>
							<select name="os0" id="os0">
								<?php foreach($product["sizes"] as $size) { ?>
								<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
								<?php } ?>
							</select> 
						</td>
					</tr>
					<tr>
						<th>
							<input type="hidden" name="on1" value="Style">
							<label for="os1">Style</label>
						</th>
						<td>
							<select name="os1" id="os1">
								<?php foreach($product["styles"] as $style) { ?>
								<option value="<?php echo $style; ?>"><?php echo $style; ?> </option>
								<?php } ?>
							</select> 
						</td>
					</tr>
					<tr>
						<th>
							<input type="hidden" name="on2" value="Embroidery">
							<label for="os2">Embroidery</label>
						</th>
						<td>
							<input type="text" name="os2" maxlength="200">
						</td>
					</tr>
					</table>
					<input type="submit" value="Add to Cart" name="submit">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				<p class="note-designer">*All shirts are designed by Mike The Frog.</p>
			</div>
		



		</div>
	</div>

<?php include("inc/footer.php"); ?>







<!-- TEST CODE ---------------------------------------------------------

<pre>

<?php
/*
echo $product_id . "\n";
var_dump($product);
*/
?>

</pre>

-->
