<?php 

	define("TITLE", "Menu Item | Franklin's Fine Dining");

	include('includes/header.php');



	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-z0-9_-]/", "", $input );
		return $output;
	}

	if (isset($_GET['item'])) {

		$menuItem = strip_bad_chars( $_GET['item'] );

		$dish = $menuItems[$menuItem];
	}



	function suggestedTip($price, $tip) {

		$totalTip = $price * $tip;
		echo $totalTip;

	}

?>

<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;">

<div id="dish">

	<h1><?php echo $dish['title']; ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?></span></h1>
	<p><?php echo $dish['blurb']; ?></p>

	<br>

	<p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
	<p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish['price'], 0.20); ?></em></p>

</div><!-- dish -->

<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;">

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>

