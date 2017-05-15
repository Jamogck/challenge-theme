<?php /* Template Name: Freebie */
/**
 * This is the template that displays a special landing page for 
 * freebies. 
 * @package challenge-conference
 */

get_header(); ?>

<section class="freebie">

<div class="freebie_header">
	<div class="freebie_artwork">
		<img src="<?php the_field('freebie_artwork'); ?>">
	</div>
	<div class="freebie_copy">
		<h2><?php echo get_the_title(); ?></h2>
		<p class="freebie_lede">
			<?php echo the_field('freebie_lede'); ?>
		</p>
		<div class="freebie_subscribe">
			<a class="btn" href="#form">Get Your Copy</a>
		</div>
	</div>
</div>

<div class="freebie_body">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
	?>
	<div id="form" class="freebie_subscribe">
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="//reachstudents.us5.list-manage.com/subscribe/post?u=60508dbabbe450cb725fb6490&amp;id=6bb1277ebe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
		<div class="field-group_1of2">
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div>
		</div>
		<div class="mc-field-group">
			<label for="mce-JOBTITLE">Job Title </label>
			<input type="text" value="" name="JOBTITLE" class="" id="mce-JOBTITLE">
		</div>
		<div class="mc-field-group">
			<label for="mce-ORGNAME">Organization </label>
			<input type="text" value="" name="ORGNAME" class="" id="mce-ORGNAME">
		</div>
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_60508dbabbe450cb725fb6490_6bb1277ebe" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Get Your Copy" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>

		<!--End mc_embed_signup-->
	
	</div>
</div>

</section>



<?php get_footer(); ?>