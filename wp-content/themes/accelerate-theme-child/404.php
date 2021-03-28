<?php
/**
 * The template for displaying 404 error page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="error-page">
		<div class="main-content" role="main">
			<div class="error-message">
				<h2>Welp, Something's Not Looking Right...</h2>
				<p>The page you were looking for no longer exists, never existed or has been moved. So sorry, friends!</p>
				<p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p>
			</div>
			
			<div class="photo-credit">
				<p>Photo by <a href="https://unsplash.com/@braydona?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Braydon Anderson</a> on <a href="https://unsplash.com/collections/1949513/error-404?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
			</div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
