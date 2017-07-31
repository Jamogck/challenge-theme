
<?php /* Template Name: Voices template */

/**
 * This is the template that displays all speakers and artists.
 *
 * @package challenge-conference
 */

get_header(); ?>
<section class="page-title">
    <h2><?php echo get_the_title(); ?></h2>
</section>
            
    <?php if( have_rows('the_speakers') ): ?>
    <div class="section-inner">
        <div class="detail-node">

            <?php while( have_rows('the_speakers') ): the_row();
                $speaker_name = get_sub_field('speaker_name');
                $twitter      = get_sub_field('speaker_twitter');
                $speaker_bio  = get_sub_field('speaker_bio');
                $image        = get_sub_field('headshot');
                ?>

                <div class="single-detail group">
                    <div class="detail-img">
                        <img class="circle" src="<?php echo $image ;?>" alt="<?php echo $speaker_name; ?>">
                    </div>
                    <div class="detail-text">
                        <h3><?php echo $speaker_name . " "; ?><a href="http://twitter.com/<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></h3>
                        
                        <?php echo $speaker_bio; ?>

                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
    <?php endif; ?>
    

<?php get_footer(); ?>
