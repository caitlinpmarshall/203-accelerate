<?php
/**
 * The Template for displaying a single job posting
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="single-page">
	<div class="site-content">
		<div class="main-content">
			<?php while ( have_posts() ) : the_post(); 
				$job_title = get_field('job_title');
				$location = get_field('location');
				$job_type = get_field('job_type');
				$general_description = get_field('general_description');
				$responsibilities = get_field('responsibilities');
				$qualifications = get_field('qualifications');
				$to_apply = get_field('to_apply');
			?>
				<div class="basic-info">
					<h1 class="job-title"><?php echo $job_title ?></h1>
					<h2 class="location" style="text-align: left;"><?php echo $location ?></h2>
					<h3 class="job-type" style="text-align: left;"><?php echo $job_type ?></h3>
				</div>
				<div class="job-details">
				<p class="general-description"><?php echo $general_description ?></p>

				<h4 class="you-will">You will:</h4>
				<p><?php echo $responsibilities ?></p>
				<h4 class="you-may-fit">You may be a fit if you:</h4>
				<p><?php echo $qualifications ?></p>
				<h4 class="to-apply">To apply:</h4>
				<p><?php echo $to_apply ?></p>

				</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>

<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
</nav>

<?php get_footer(); ?>
