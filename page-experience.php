<?php
/*
 * This template calls header and the Experience page content. Includes featured media and blog posts.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="section-inner">
				<div class="featured-media">
					<?php the_field('featured_media'); ?>
				</div>

				<?php if( have_rows('media_node') ): ?>

				<div class="experience-content group">

					<?php while( have_rows('media_node') ): the_row();
						$media_title   = get_sub_field('media_title');
						$media_content = get_sub_field('media_content');
						?>

						<div class="media_node">
							<h3><?php echo $media_title; ?></h3>
							<?php echo $media_content; ?>
						</div>
					<?php endwhile; ?>
				</div>

				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>