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
				$job_type = get_field();
				$general_description = get_field('general_description');
				$responsibilities = get_field('responsibilities');
				$qualifications = get_field('qualifications');
				$to_apply = get_field('to_apply');
			?>
				<div class="basic-info">
					<h1 class="job-title">Lead Designer</h1>
					<h2 class="location" style="text-align: left;">New York</h2>
					<h3 class="job-type" style="text-align: left;">Full Time</h3>
				</div>
				<div class="job-details">
				<p class="general-description">Cake croissant caramels sugar plum jelly chocolate cake. Gummi bears sweet roll jelly-o sweet roll lemon drops biscuit. Sugar plum cake shortbread tart cake dragée cotton candy. Pastry jelly beans bonbon bonbon liquorice gummies cake. Danish marshmallow gingerbread cookie candy sweet roll chocolate cake pie chocolate cake. Jujubes tootsie roll cheesecake sesame snaps donut pudding powder sugar plum. Candy canes biscuit muffin halvah cake fruitcake sugar plum marshmallow dragée.</p>

				<h4 class="you-will">You will:</h4>
				<ul>
					<li>Lollipop dragée chocolate cake apple pie chocolate cheesecake halvah. Carrot cake croissant pie cupcake croissant jelly-o donut. Muffin chupa chups chocolate cake gummi bears danish chocolate cake. Pastry apple pie toffee cotton candy sesame snaps.</li>
					<li>Pastry oat cake lollipop cake danish apple pie danish ice cream. Sweet toffee gingerbread sugar plum marzipan topping caramels. Cake bonbon gummi bears shortbread cake macaroon dragée. Jelly beans icing danish tart ice cream cookie gummies dessert.</li>
					<li>Bonbon tootsie roll muffin toffee sugar plum cake toffee jelly-o caramels. Pastry ice cream soufflé sugar plum macaroon. Pie liquorice danish marzipan carrot cake.</li>
					<li>Cookie carrot cake croissant sugar plum muffin chupa chups soufflé. Wafer wafer halvah shortbread lollipop. Chocolate bar marzipan tart sweet roll muffin pie apple pie. Bear claw pastry cotton candy wafer apple pie.</li>
				</ul>
				<h4 class="you-may-fit">You may be a fit if you:</h4>
				<ul>
					<li>Marzipan bonbon chocolate cake pudding powder chocolate cake. Fruitcake wafer bear claw cupcake chocolate cake pudding. Cookie icing dragée sesame snaps jelly-o fruitcake sweet roll lemon drops sesame snaps.</li>
					<li>Halvah cheesecake oat cake croissant pie bonbon cake tiramisu apple pie. Cupcake sesame snaps tart marzipan cheesecake apple pie tart. Lollipop pudding sweet roll jujubes donut pastry gingerbread cheesecake.</li>
					<li>Muffin jelly beans croissant carrot cake candy chocolate bar. Jelly-o lollipop liquorice lollipop candy canes pudding. Powder chupa chups oat cake wafer lemon drops lollipop pudding dessert.</li>
					<li>Tootsie roll pastry bear claw jelly-o gummi bears tart. Halvah donut sesame snaps fruitcake soufflé bear claw danish liquorice. Sweet gummi bears gummi bears powder gummi bears carrot cake. Apple pie powder bear claw ice cream danish.</li>
					<li>Bonbon chupa chups candy canes bear claw cookie muffin ice cream cupcake. Wafer dragée sugar plum chupa chups ice cream marzipan pastry cake lollipop. Cupcake soufflé cake gummi bears candy canes wafer topping pudding. Bonbon lollipop marshmallow fruitcake brownie gingerbread jelly beans.</li>
				</ul>
				<h4 class="to-apply">To apply:</h4>
				Toffee pie brownie brownie marzipan pie. Cake sweet jelly-o gingerbread marzipan brownie. Cake tootsie roll lemon drops cookie macaroon chocolate chocolate muffin gummies.

				</div>
			<?php endwhile; ?>

		</div>
	</div>
</section>

<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
</nav>

<?php get_footer(); ?>
