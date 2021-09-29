<?php
/**
 * The template for displaying the careers archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
            <div class="careers-header">
                <h1>Current Job Openings</h1>
                <h3>Come join our team!</h3>
            </div>
			<?php while ( have_posts() ) : the_post(); 
				$job_title = get_field('job_title');
				$location = get_field('location');
				$job_type = get_field('job_type');
            ?>
                <article class="case-study-archive">
					<aside class="case-study-sidebar-archive">
						<h2 class="archive-job-title"><a href="<?php the_permalink(); ?>"><?php echo $job_title; ?></a></h2>
                        <h4><span><?php echo $location; ?></span></h4>
						<h4><span><?php echo $job_type; ?></span></h4>
					</aside>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
