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

<div class="container-fluid home-bg">
		<div class="row hero clear">
			<div class="estimate col-md-6 container">
				<div class="col-md-12" style="text-align: center;"><img src="<?php bloginfo ('template_directory'); ?>/css/images/icon-ana.png"/></div>
				<h2>House Analysis</h2>
					<br/>
				<p>Cras mattis consectetur purus sit amet fermentum.<br />Donec ullamcorper nulla non metus auctor fringilla.</p>
						<button class="btn h-btn btn-primary">Find House Value</button>
			</div>		
	
			<div class="reports col-md-6 container">

							<div class="col-md-12" style="text-align: center;"><img src="<?php bloginfo ('template_directory'); ?>/css/images/house.png"/></div>
				<h2>Search Homes</h2>

					<br/>
				<p>Donec ullamcorper nulla non metus auctor fringilla.<br />Donec id elit non mi porta gravida at eget metus.</p>
						<button class="btn h-btn btn-success">Search for Homes</button>	
				</div>
			</div>		
</div>
<!-- Blog Section -->												
<div class="container" style="padding-top: 75px; padding-bottom: 120px;">
	<div class="row">
		<div class="blog col-md-7 pull-right">
			<h3 class="latest">Latest From The Blog!</h3>
		</div>	

			<?php if ( have_posts() ): ?>
			<!--<ol>-->	
			<?php while ( have_posts() ) : the_post(); ?>
			<!--<li>-->
			<?php if (++$count > 1) break; ?>

	<article class="home_post container">
		<div class="row">
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
				<div style="margin-top: 95px;" class="col-md-4">
					<?php if(has_post_thumbnail()){the_post_thumbnail();}else{echo 'not';} ?>
			</div>	
	</article>
	
	<!--</li>-->
	<a href="http://localhost:8888/askbryan/?p=1"><button style="margin-left: 15px; margin-top: -64px;" class="read_more">Read More</button></a>
		<?php endwhile; ?>
		<!--</ol>-->
		<?php else: ?>
			<h2>No posts to display</h2>
		<?php endif; ?>
	</div>
</div>
<!-- End Blog Section --> 
<!-- Testimonials -->
<?php layerslider(3) ?>			
<!-- End Testimonials -->

<!-- Meet Bryan Section -->
<div class="meet_bryan container" style="padding-top: 150px; padding-bottom: 200px;">
	<div class="row">
	<div class="col-md-6">				
				<img src="<?php bloginfo ('template_directory'); ?>/css/images/bryan.png" alt="Bryan Vasquez" style="margin-top: -35px; margin-left: 55px;" />
	</div>		
		<div class="col-md-6">
				<h1>Meet Bryan</h1>		
				<p>Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. 
				</p>
		</div>
	</div>
</div>
<!-- End Meet Bryan Section -->
<!-- Contact Section -->
	<div class="contact container-fluid" style="width: 100%; padding-top: 100px; padding-bottom: 250px;">
		<div class="row"> 
			<div class="col-md-6 contact_form">
				<h2 style="margin-left: 50px;">Let's Get in Touch</h2>

				<form method="POST" action="https://www.thewiseagent.com/secure/webcontactAllFields.asp" name="myForm" onSubmit="return chkForm(this);">
				<input type="hidden" name="ID" value="67,183,209,24,89,205,24,70,226">
				<input type="hidden" name="responsePage" value="http://www.AskBryanRealtyGroup.com">
				<input type="hidden" name="ProgramID" value="0">
				<input type="hidden" name="Source" value="Website">
				<input type="hidden" name="Categories" value=""><!-- semicolon;delimited no spaces -->
				<input type="hidden" name="currentUser" value="Bryan Vasquez"><!-- internal team member -->
				<input type="hidden" name="noMail" value="0"><!-- 0/1 if set to 1, no reply to the visitor is sent. -->
				<textarea name="replyMessage" style="display:none;"><p>[vistorname],</p>
				
				<p><br />
				I will be in contact with you soon.<br />
				<br />
				Thank you for visiting my site.</p>
				</textarea>
				<input type="hidden" name="replySubject" value="Contact from Bryan Vasquez website">
				<input type="hidden" name="replySenderEmail" value="askbryanrealtygroup@gmail.com">
				<input type="hidden" name="notifySubject" value="New Contact From Website!">
				<input type="hidden" name="notifyFields" value="">
				<input type="hidden" name="notifyCc" value=""><!-- comma, delimited -->
				<input type="hidden" name="notifyBcc" value=""><!-- comma, delimited -->
				<script language=javascript>
				<!--
				function chkForm(theForm) {
				    if(theForm.CFirst.value=="") {
				        alert("Please fill in your name.")
				        theForm.CFirst.focus();
				        return false;
				    }
				    var email = theForm.CEmail.value;
				    if(email.indexOf("@")<1){
				        alert("Please fill in your email address.");
				        theForm.CEmail.focus();
				        return false;
				    }
				return true;
				}
				-->
				 </script>
				<table width="500px" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
				<div id="previewPane" class="waui_wrapper">
				<table width="100%" border="0" cellspacing="0" cellpadding="2" align="center"> 
				<tr><td colspan="2"><div id="previewTopSection" class="waui_top"></div></td></tr>
				<tr><td class="waui_td_left">Name</td>
				<td class="waui_td_right"><input type="text" name="CFirst" id="CFirst" placeholder="Name" class="waui_input contact" value="" /> *</td></tr>
				<tr><td class="waui_td_left">Email</td>
				<td class="waui_td_right"><input type="text" name="CEmail" id="CEmail" placeholder="Email" class="waui_input contact" value="" /> *</td></tr>
				<tr><td class="waui_td_left">Phone</td>
				<td class="waui_td_right"><input type="text" name="Phone" id="Phone" placeholder="Phone" class="waui_input contact" value="" /></td></tr>
				<tr><td class="waui_td_left">Comments</td>
				<td class="waui_td_right"><input type="text" name="Message" id="Message" placeholder="Message" class="waui_input contact" value="" /></td></tr>
				<tr><td class="waui_td_left">&nbsp;</td>
				<td class="waui_td_right"><button type="submit" value="Submit" class="waui_submit submit">Submit</button></td></tr>
				<tr><td colspan="2"><div id="previewBottomSection" class="waui_bottom"></div></td></tr>
				</table>
				</div>
				</td></tr></table>
				<input type="hidden" name="CommaDelimitedFormFields" value="">
				</form>
			</div>
		<div class="col-md-6" style="text-align: center; margin-top: 265px;" >
				<h3 style="color: white;">Click the cards to download my info!</h2>
			<img src="<?php bloginfo ('template_directory'); ?>/css/images/contact_info.png" alt="contact info" />
		</div>	
	</div>	
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>