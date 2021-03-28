<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content hero-wrapper" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services_tagline = get_field('services_tagline');
			?>
				<h3 class="about-hero-text"><?php echo $services_tagline; ?></h3>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="site-content">
		<div class="main-content" role="main"><!-- may need to change classes? -->
			<?php while ( have_posts() ) : the_post(); 
				$services_page_heading = get_field('services_page_heading');
				$services_page_desc = get_field('services_page_desc');
				$service_1_title = get_field('service_1_title');
				$service_1_desc = get_field('service_1_desc');
				$service_1_icon = get_field('service_1_icon');
				$service_2_title = get_field('service_2_title');
				$service_2_desc = get_field('service_2_desc');
				$service_2_icon = get_field('service_2_icon');
				$service_3_title = get_field('service_3_title');
				$service_3_desc = get_field('service_3_desc');
				$service_3_icon = get_field('service_3_icon');
				$service_4_title = get_field('service_4_title');
				$service_4_desc = get_field('service_4_desc');
				$service_4_icon = get_field('service_4_icon');
				$contact_tagline = get_field('contact_tagline');

				$size = "thumbnail";
			?>
				<div class="content-wrapper">
					<div class="featured-services-intro">
						<h3><?php echo $services_page_heading; ?></h3>
						<p><?php echo $services_page_desc; ?></p>				
					</div>
				</div>

				<section class="featured-services-group">
					<article class="featured-service-item">
						<p class="featured-service-icon"><?php echo wp_get_attachment_image( $service_1_icon ); ?></p>
						<div class="featured-service-text">
							<h4><?php echo $service_1_title; ?></h4>
							<p><?php echo $service_1_desc; ?></p>
						</div>
					</article>

					<article class="featured-service-item">
						<div class="featured-service-text">
							<h4><?php echo $service_2_title; ?></h4>
							<p><?php echo $service_2_desc; ?></p>						
						</div>
						<img src="" alt="atom icon">
					</article>

					<article class="featured-service-item">
						<img src="" alt="thumbs up icon">
						<div class="featured-service-text">
							<h4><?php echo $service_3_title; ?></h4>
							<p><?php echo $service_3_desc; ?></p>						
						</div>
					</article>

					<article class="featured-service-item">
						<div class="featured-service-text">
							<h4><?php echo $service_4_title; ?></h4>
							<p><?php echo $service_4_desc; ?></p>
						</div>
						<img src="" alt="magic wand icon">
					</article>
				</section>

				<section class="contact-link">
					<div class="content-wrapper">
						<p><?php echo $contact_tagline; ?></p>
						<p><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></p>
					</div>
				</section>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>

<?php get_footer(); ?>
