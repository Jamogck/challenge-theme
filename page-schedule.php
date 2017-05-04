<?php /* Template Name: Schedule */
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
<nav id="nav" class="secondary-navigation">
        <ul class="group" role="navigation">
            <li><a href="#day1">Sun</a></li>
            <li><a href="#day2">Mon</a></li>
            <li><a href="#day3">Tues</a></li>
            <li><a href="#day4">Wed</a></li>
            <li><a href="#day5">Thurs</a></li>
        </ul>
    </nav>
<?php if( have_rows('day_1_timeframe') ): ?>
	<section id="day1">
    	<div class="section-inner">
    		<h2>Sunday, July 3</h2>
    <?php while( have_rows('day_1_timeframe') ): the_row();
        $time = get_sub_field('time');
        $title   = get_sub_field('title');
        $description   = get_sub_field('description');
    ?>
		    <div class="detail-node">
		        <div class="single-detail group">
		            <div class="detail-text">
		                <div class="time">
		                	<h4><?php echo $time; ?></h4>
		                </div>
		                <div class="description">
			                <h3><?php echo $title; ?></h3>
			                <?php echo $description ?>
			            </div>
		            </div>
		        </div>
		    </div>
<?php endwhile; ?> 
	    </div>
	</section>
<?php endif; ?>

<?php if( have_rows('day_2_timeframe') ): ?>
	<section id="day2">
    	<div class="section-inner">
    		<h2>Monday, July 4</h2>
    <?php while( have_rows('day_2_timeframe') ): the_row();
        $time = get_sub_field('time');
        $title   = get_sub_field('title');
        $description   = get_sub_field('description');
    ?>
		    <div class="detail-node">
		        <div class="single-detail group">
		            <div class="detail-text">
		                <div class="time">
		                	<h4><?php echo $time; ?></h4>
		                </div>
		                <div class="description">
			                <h3><?php echo $title; ?></h3>
			                <?php echo $description ?>
			            </div>
		            </div>
		        </div>
		    </div>
<?php endwhile; ?> 
	    </div>
	</section>
<?php endif; ?>

<?php if( have_rows('day_3_timeframe') ): ?>
	<section id="day3">
    	<div class="section-inner">
    		<h2>Tuesday, July 5</h2>
    <?php while( have_rows('day_3_timeframe') ): the_row();
        $time = get_sub_field('time');
        $title   = get_sub_field('title');
        $description   = get_sub_field('description');
    ?>
		    <div class="detail-node">
		        <div class="single-detail group">
		            <div class="detail-text">
		                <div class="time">
		                	<h4><?php echo $time; ?></h4>
		                </div>
		                <div class="description">
			                <h3><?php echo $title; ?></h3>
			                <?php echo $description ?>
			            </div>
		            </div>
		        </div>
		    </div>
<?php endwhile; ?> 
	    </div>
	</section>
<?php endif; ?>

<?php if( have_rows('day_4_timeframe') ): ?>
	<section id="day4">
    	<div class="section-inner">
    		<h2>Wednesday, July 6</h2>
    <?php while( have_rows('day_4_timeframe') ): the_row();
        $time = get_sub_field('time');
        $title   = get_sub_field('title');
        $description   = get_sub_field('description');
    ?>
		    <div class="detail-node">
		        <div class="single-detail group">
		            <div class="detail-text">
		                <div class="time">
		                	<h4><?php echo $time; ?></h4>
		                </div>
		                <div class="description">
			                <h3><?php echo $title; ?></h3>
			                <?php echo $description ?>
			            </div>
		            </div>
		        </div>
		    </div>
<?php endwhile; ?> 
	    </div>
	</section>
<?php endif; ?>

<?php if( have_rows('day_5_timeframe') ): ?>
	<section id="day5">
    	<div class="section-inner">
    		<h2>Thursday, July 7</h2>
    <?php while( have_rows('day_5_timeframe') ): the_row();
        $time = get_sub_field('time');
        $title   = get_sub_field('title');
        $description   = get_sub_field('description');
    ?>
		    <div class="detail-node">
		        <div class="single-detail group">
		            <div class="detail-text">
		                <div class="time">
		                	<h4><?php echo $time; ?></h4>
		                </div>
		                <div class="description">
			                <h3><?php echo $title; ?></h3>
			                <?php echo $description ?>
			            </div>
		            </div>
		        </div>
		    </div>
<?php endwhile; ?> 
	    </div>
	</section>
<?php endif; ?>


<?php get_footer(); ?>