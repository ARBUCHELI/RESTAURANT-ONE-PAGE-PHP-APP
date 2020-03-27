<?php
	define("TITLE", "Menu | Franklin's Fine Dining"); //Titl of the Website.

	include('includes/header.php'); //Code used to include de header.
?>
	<!--html section-->
	<div id="menu-items"> <!--Container with the menu section-->

		<h1>Our Delicious Menu</h1> <!--Title of the menu section-->
		<p>Like our team, our menu is very small &mdash; but dang, does it every pack a punch!</p> <!--Slogan-->
		<p><em>Click any menu item to learn more about it.</em><p> <!--Invitation to make click-->

		<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;"> <!--Decorative detail-->

		<ul> <!--Unordered list made pulling the elements from arrays.php file-->
			<?php foreach ($menuItems as $dish => $item) { ?>

			<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a><sup>$</sup><?php echo $item['price']; ?></li>

			<?php } ?>

		</ul>

	</div><!-- menu-items -->

<?php include('includes/footer.php'); //Code used to include the footer.

			
