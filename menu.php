<?php
	define("TITLE", "Menu | Franklin's Fine Dining");

	include('includes/header.php');
?>

	<div id="menu-items">

		<h1>Our Delicious Menu</h1>
		<p>Like our team, our menu is very small &mdash; but dang, does it every pack a punch!</p>
		<p><em>Click any menu item to learn more about it.</em><p>

		<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;">

		<ul>
			<?php foreach ($menuItems as $dish => $item) { ?>

			<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a><sup>$</sup><?php echo $item['price']; ?></li>

			<?php } ?>

		</ul>

	</div><!-- menu-items -->

<?php include('includes/footer.php');

			