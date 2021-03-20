<?php
/**
 * The template for displaying the case studies archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                $services = get_field('services');
                $image_1 = get_field('image_1');
                $size = "full";
            ?>
                <article class="case-study-archive">
					<aside class="case-study-sidebar-archive">
						<h2><?php the_title(); ?></h2>
						<h4><span><?php echo $services; ?></span></h4>
						<p><?php the_content(); ?></p>
						<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
					</aside>
                    <div>
                        <a href=""></a>
                        <?php echo wp_get_attachment_image( $image_1, $size ); ?>
                    </div>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
