<?php 

$pageTitle = "Unique t-shirts designed by a frog";
$section = "home";
include('inc/header.php'); 

?>
		

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">
 
			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php 

					/* This is the technique for displaying only the 4 latest shirts in the array, regardless of 
					how many shirts we add or subtract in the future */
					$total_products = count($products);
					$position = 0;
					$list_view_html = "";
					foreach ($products as $product_id => $product) {
						$position = $position + 1;
						if ($total_products - $position < 4) {
                        	/*this technique will make sure the order of the last 4 shirts will display in 
                        	reverse order making sure the latest are displayed first on the page */
                        	$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
                        }
                    }
                    echo $list_view_html;
                   
                ?>	
				</ul>

			</div>

		</div>

	</div>

<?php include('inc/footer.php'); ?>