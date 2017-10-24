<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inward-revenue
 */

?>
<div class="container home-con">
	<div class="row">
		<div class="col-md-8 first-con">
			<h2>We take sales talent recruitment seriously</h2>
			<p>Our approach is to find the right people for the right companies every time. We do it by digging deeper and building relationships that truly drive both our partner's and candidate's futures forward.</p>
		</div>

	</div>
</div>
<div class="second-content">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 first-col">
			<h2>CLIENTS</h2>
			<p>Matching talented individuals with talent companies takes work. Our proven process makes that work go away.</p>
			<a href="" class="btn">FIND OUT MORE</a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 second-col">
			<h2>CANDIDATES</h2>
			<p>Next steps aren't always simple to. So we go further to understand where you want to be and how we can help you there, simply.</p>
			<a href="" class="btn">FIND OUT MORE</a>
		</div>
	</div>
</div>
<div class="container third-content">
	<div class="row">
		<div class="col-md-12 third-col">
			<h2>Currently recruiting for</h2>
			<p>Here a just few of the job roles we are currently recruiting for.</p>
		</div>
		<div class="col-md-12">
			<?php echo do_shortcode('[jobs per_page="12"]');?>
		</div>
	</div>
</div>
