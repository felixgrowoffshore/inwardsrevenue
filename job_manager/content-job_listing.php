<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
?>
<li <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">
		<?php the_company_logo(); ?>
		<div class="position">
			<h3><?php wpjm_the_job_title(); ?></h3>
			<div class="company">
				<?php the_company_name( '<strong>', '</strong> ' ); ?>
				<?php the_company_tagline( '<span class="tagline">', '</span>' ); ?>
			</div>
		</div>
		<div class="location">
			<?php the_job_location( false ); ?>
		</div>
		<ul class="meta">
			<?php do_action( 'job_listing_meta_start' ); ?>

      <li class="view"><a class="btn" href="<?php the_job_permalink(); ?>">View Job</a></li>



			<?php do_action( 'job_listing_meta_end' ); ?>
		</ul>
</li>
