<?php 

	define("TITLE", "Menu Item | Franklin's Fine Dining"); //Title of the Website.//

	include('includes/header.php'); //Code used to include de header.//



	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-z0-9_-]/", "", $input );
		return $output;
	}

	if (isset($_GET['item'])) {

		$menuItem = strip_bad_chars( $_GET['item'] );

		$dish = $menuItems[$menuItem];
	}



	function suggestedTip($price, $tip) {

		$totalTip = $price * $tip; //This function calculates the tip//
		echo $totalTip;

	}

?>

<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;"> <!--Decorative detail-->

<div id="dish"> <!--html that includes the dishes, pulling the information from arrays.php file-->

	<h1><?php echo $dish['title']; ?> <span class="price"><sup>$</sup><?php echo $dish['price']; ?></span></h1>
	<p><?php echo $dish['blurb']; ?></p>

	<br>

	<p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p> <!--This information pulled from arrays.php file too-->
	<p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish['price'], 0.20); ?></em></p>

</div><!-- dish -->

<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;"> <!--Decorative detail-->

<a href="menu.php" class="button previous">&laquo; Back to Menu</a> <!--Button that sends back to menu-->

<?php include('includes/footer.php'); ?> //Code used to include the footer.

