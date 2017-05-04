
<?php /* Template Name: FAQ Template */
/**
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
<?php if( have_rows('faq') ): ?>
    <div class="section-inner">
    <?php while( have_rows('faq') ): the_row();
        $id       = get_sub_field('id');
        $question = get_sub_field('question');
        $answer   = get_sub_field('answer');
        $spkr     = get_sub_field('spkr');
        $date     = get_sub_field('date');
    ?>
    <div class="detail-node" id="<?php echo $id; ?>">
        <div class="single-detail group">
            <div class="detail-text expandable">
                <h4 class="question"><?php echo $question; ?></h4>
                <?php echo $spkr; ?>
                <?php echo $date; ?>
                <p class="answer"><?php echo $answer; ?></p>
            </div>
        </div>
    </div>
<?php endwhile; ?> 
<?php endif; ?>
</div>

<?php get_footer(); ?>
