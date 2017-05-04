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
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
			<form action="//efca.us8.list-manage.com/subscribe/post?u=df1fb05918e860e50d5981bba&amp;id=47c2e54259" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address </label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_df1fb05918e860e50d5981bba_47c2e54259" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Get Your Copy" name="subscribe" id="mc-embedded-subscribe" class="btn"></div>
			    </div>
			</form>
			</div>
			<!--End mc_embed_signup-->
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
</div>

</section>



<?php get_footer(); ?>