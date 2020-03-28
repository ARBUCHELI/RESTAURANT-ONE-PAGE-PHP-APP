 <?php
 	define("TITLE", "Team | Franklin's Fine Dining"); //Title of the website.//

 	include('includes/header.php'); //Code used to include the header.//
 ?>
	<!--html section-->
	<div id="team members" class="cf"> <!--Container with the team section-->

		<h1>Our Team at Franklin's</h1> <!--Title of the team section-->
		<p>We're small, but mighty.  Franklin's Fine Dining has been a family-owned and run business since the dirty thirties, and we are proud of it! When you get these three together, you never know what can happen.  But you can count on one thing: <strong>The best food you've ever had. Ever.</strong></p> <!--Slogan-->

		<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;"> <!--Decorative detail-->

		<?php //This php section generates the cards with the Picture, the name and the biography of the team members//
			foreach ($teamMembers as $member) { //The information is pulled from arrays.php file//
		?>
 			<!--html section-->
			<div class="member">
					<img src="img/<?php echo $member['img']; ?>.jpg" alt="<?php echo $member['name']; ?>"> <!--Code used to include the picture, pulling elelments from arrays.php file-->
					<h2><?php echo $member['name']; ?></h2> <!--Code used to include the name, pulling the information from arrays.php file-->
					<p><?php echo $member['bio']; ?></p> <!--Code used to include the biography, pulling the information from arrays.php file-->
			</div><!--member -->

		<?php
			}
		?>

	</div><!-- team-members -->

	<hr style="border: none; height: 18px; width: 114px; background: url('assets/img/hr.png') center center no-repeat; margin: 20px auto;"> <!--Decorative detail-->

 <?php include('includes/footer.php'); ?> <!--Code used to include the footer.
