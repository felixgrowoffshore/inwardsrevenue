<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inward-revenue
 */

?>

		</div><!-- #content -->
	</div><!-- #page -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="navbar navbar-inverse">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
							'menu_class'					 => 'nav navbar-nav'
						) );
					?>
					</nav>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<p>Inward Revenue Consulting Ltd</p>
						<p>Round Foundry Media Centre</p>
						<p>Foundry Street</p>
						<p>Leeds, LS11 5QP</p>
					</div>
					<div class="col-sm-12 col-md-4">
						<p><span>T:</span>0113 394 4304</p>
						<p><span>E:</span>info@inwardrevenue.co.uk</p>
					</div>
					<div class="col-sm-12 col-md-4 social-list">
						<p>Social</p>
						<ul class="">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<p>Copyright - Inward Revenue Consulting Ltd</p>
					</div>
					<div class="col-md-6 col-sm-12">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'footer-menu',
								'menu_class'					 => 'footer-menu navbar-right'
							) );
						?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
