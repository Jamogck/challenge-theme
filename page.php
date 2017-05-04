<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package challenge-conference
 */

get_header(); ?>
<section class="page-title">
	<h2><?php echo get_the_title(); ?></h2>
</section>
<?php if( have_rows('featured_media') ): ?>
<section id="hero">
	<div class="featured">
		<?php while( have_rows('featured_media') ): the_row();
            $featured_vid = get_sub_field('featured_video');
            $featured_img = get_sub_field('featured_image');
        
            if ($featured_vid) {
                echo '<div class="video-container">';
	        	echo $featured_vid;
                echo '</div>';
	        } else {
	        	?> <img src="<?php echo $featured_img; ?>" alt="Challenge Conference Downloads"> 
	        	<?php
	        }
        ?>
    </div>
    <?php endwhile; ?> 
</section>
<?php endif; ?>

 
</section>

<div class="section-inner">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
	?>

	<?php if( have_rows('detail_section') ): ?>
    <div class="detail-node">
    	<?php while( have_rows('detail_section') ): the_row();
            $detail_heading = get_sub_field('detail_heading');
            $detail_body    = get_sub_field('detail_body');
        ?>
        <div class="single-detail group">
            <div class="detail-text">
                <h3><?php echo $detail_heading ?></h3>
                <?php echo $detail_body ?> 
            </div>
        </div>
        <?php endwhile; ?> 
    </div>
</div>
    <?php endif; ?>
    <?php $value = get_field('closing_copy');
    if($value) { ?>
        <div class="detail-node closing-cta">
            <div class="single-detail group">
                <div class="detail-text">
                    <?php the_field( 'closing_copy' ); ?>
                </div>
            </div>
        </div>
    <? } ; ?>

<?php get_footer(); ?>
