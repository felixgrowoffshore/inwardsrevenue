<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CAP_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	$colour = get_field('colour');
	?>
<div id="page" class="site">
	<div class="header_wrap"><div class="container">
		<header id="masthead" class="site-header navbar-fixed-top colour-disabled <?=$colour?>">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-8 logo">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-10 col-sm-10 col-xs-4 flex-center nav-bar">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<div class="head-bar">
								<i class="fa fa-bars" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="true"></i>
							</div>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'					 => 'nav navbar-nav navbar-right'
								) );
							?>

						</div><!--/.nav-collapse -->

					</div>
					<!-- Secondary menu -->
					<div id="navbar-secondary" class="collapse">
						<div class="navbar-secondary">
							<i class="fa fa-times-circle-o secondary-close" data-toggle="collapse" data-target="#navbar-secondary" aria-expanded="true"></i>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'secondary-menu',
									'menu_class'					 => 'nav navbar-nav navbar-center'
								) );
							?>
						</div>
					</div>
					</div>
				</div>
			</header><!-- #masthead -->
	</div></div>
	<div id="content" class="">
