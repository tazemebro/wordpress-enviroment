<?php
/**
* The main template file
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file 
*
* Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
*
* @package 	WordPress
* @subpackage 	Starkers
* @since 		Starkers 4.0
*/

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="container-fluid">
		<div class="row hero clear">
			<div class="estimate col-md-6 container">
				<h2>Home Estimate</h2>
					<br/>
				<p>Cras mattis consectetur purus sit amet fermentum.<br />Donec ullamcorper nulla non metus auctor fringilla.</p>
	
			<div class="row">
				<div class="col-md-10 sub-sect">
					<div class="col-md-7">
						<button class="btn h-btn">Estimate My Home</button>
					</div>				
					<div class="col-md-5">
						<img src="<?php bloginfo ('template_directory'); ?>/css/images/coins_photo.png" alt="home esitmate" />
					</div>
				</div>
			</div>					
		</div>		
	
		<div class="reports col-md-6">
			<h2>Get Reports</h2>
				<br/>
			<p>Donec ullamcorper nulla non metus auctor fringilla.<br />Donec id elit non mi porta gravida at eget metus.</p>
	
			<div class="row">
				<div class="col-md-10 sub-sect">
					<div class="col-md-5">
						<img src="<?php bloginfo ('template_directory'); ?>/css/images/papers_photo.png" alt="get reports" />
					</div>
					<div class="col-md-7">	
						<button class="btn h-btn pull-right">Stay In The Loop</button>
					</div>	
				</div>
			</div>		
		</div>	
	</div>
<!-- Blog Section -->												
<div class="container" style="padding-top: 75px; padding-bottom: 120px;">
	<div class="row">
		<div class="blog col-md-6 pull-right">
			<h3 class="latest">Latest From The Blog!</h3>
		</div>	

			<?php if ( have_posts() ): ?>
			<!--<ol>-->	
			<?php while ( have_posts() ) : the_post(); ?>
			<!--<li>-->

	<article>
	
		<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p>
				<?php the_content(); ?>
			</p>	
	</article>
	
	<!--</li>-->
	<button class="read_more">Read More</button>
		<?php endwhile; ?>
		<!--</ol>-->
		<?php else: ?>
			<h2>No posts to display</h2>
		<?php endif; ?>
	</div>
</div>
<!-- End Blog Section -->

<!-- Meet Bryan Section -->
<div class="meet_bryan container" style="padding-bottom: 200px;">
	<div class="row">
		<div class="col-md-12">
			<h1>Meet Bryan</h1>
				<p>Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
				</p>
					<img src="<?php bloginfo ('template_directory'); ?>/css/images/bryan.png" alt="Bryan Vasquez" style="margin-top: -90px;"/>
		</div>		
	</div>
</div>
<!-- End Meet Bryan Section -->
<!-- Contact Section -->
	<div class="contact container-fluid" style="width: 100%; padding-top: 100px; padding-bottom: 250px;">
		<div class="row"> 
			<div class="col-md-6">
				<h1 style="margin-left: 50px;">Let's Get in Touch</h1>

				<form method="post" action="contact">
					<input type="text" name="cf_name" placeholder="Name" />
						<br />
						<br />
					<input type="text" name="cf_email" placeholder="Email" />
						<br />
						<br />
					<input type="text" name="cf_service" placeholder="What Can I Do For You?" style="padding-bottom: 90px;" />
						<br />
						<br />
					<button>Submit</button>
				</form>
			</div>
		<div class="col-md-6">
				<h2>Click the cards to download my info!</h2>
			<img src="<?php bloginfo ('template_directory'); ?>/css/images/contact_info.png" alt="contact info" />
		</div>	
	</div>	
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>