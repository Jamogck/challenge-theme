<?php
/*
 * This template calls header and the details page content
 */

get_header(); ?>

<style>
.inner-hero {
    background: url('<?php the_field('hero_image_large'); ?>') no-repeat;
    background-size: cover;
}

@media only screen and (max-width : 495px) {
    .inner-hero {
    background: url('<?php the_field('hero_image_small'); ?>') no-repeat;
    background-size: cover;
}

}

</style>

<section id="hero">
        <div class="inner-hero group">
            <div class="hero-copy">
                <h2>Kansas City, Missouri</h2>
                <h3>July 2-6, 2018</h3>
            </div>
        </div>
    </section>

    <nav id="nav" class="secondary-navigation">
        <ul class="group" role="navigation">
            <!-- <li><a href="#theme">Theme</a></li> -->
            <!-- <li><a href="#speakers">Voices</a></li> -->
            <li><a href="#schedule">Schedule</a></li>
            <li><a href="#afternoons">Afternoons</a></li>
        </ul>
    </nav>

    <section id="about">
        <div class="section-inner">
            <div class="detail-node">
                <div class="single-detail group">
                    <h3><?php the_field( 'title' ); ?></h3>
                    <?php the_field( 'about_content' ); ?>
                </div>
            </div>
        </div>
    </section>

   <!--  <section id="theme">
        <div class="section-inner">
            <h2>Theme</h2>
    </div>
    <img src="<?php the_field( 'theme_image' ); ?>" alt="Live Sent">
    <div class="section-inner">
            <div class="detail-node">
                <div class="single-detail group">
                    <h3><?php the_field( 'theme_title' ); ?></h3>
                    <?php the_field( 'theme_content' ); ?>
                </div>
            </div>
        </div>
    
    </section> -->

    <!-- <section id="speakers">
        <div class="section-inner">
            <h2>Speakers &amp; Artists</h2>
                
            <?php if( have_rows('speaker_node') ): ?>

                <div class="detail-node">

                    <?php while( have_rows('speaker_node') ): the_row();
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

            <?php endif; ?>
        </div>
    </section> -->

         <section id="schedule">
        <div class="section-inner">
            <h2>Schedule</h2>
            <div class="detail-node">
                <div class="single-detail group">
                    <div class="detail-text">
                        <h3>Your Week at a Glance</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Mon, July 2</th>
                                    <th colspan="2">Tues-Fri</th>
                                </tr>
                                <tr alt="7-9:00 a.m.">
                                    <td>7-9:00 a.m.</td>
                                    <td rowspan="6" class="na"></td>
                                    <td>Breakfast</td>
                                </tr>
                                <tr alt="8:30 a.m. Monday &amp; Wednesday">
                                    <td>8:30 a.m.</td>
                                    <td>Youth Worker Update (Monday &amp; Wednesday)</td>
                                </tr>
                                <tr alt="9:00 a.m. Thursday">
                                    <td>9:00 a.m.</td>
                                    <td>Gathering &amp; Super Huddle (Thursday)</td>
                                </tr>
                                <tr alt="9:30 a.m.">
                                    <td>9:30 a.m.</td>
                                    <td>Morning Gathering</td>
                                </tr>
                                <tr alt="11:00 a.m.">
                                    <td>11:00 a.m.</td>
                                    <td>The Huddle (time to meet with just your group)</td>
                                </tr>
                                <tr alt="11:00 a.m.-1:00 p.m.">
                                    <td>11:00 a.m.-1:00 p.m.</td>
                                    <td>Lunch</td>
                                </tr>
                                <tr alt="1:00 p.m.-5:00 p.m.">
                                    <td>1:00 p.m.-5:00 p.m.</td>
                                    <td>Registration</td>
                                    <td rowspan="2"><strong>Afternoon Options</strong><br>
                                    - Outreach</br>
                                    - Equipping Labs</br>
                                    - Rec Sports </br>
                                    - Love Moves </br>
                                    - Free Time</td>
                                </tr>
                                <tr alt="5:30 p.m.">
                                    <td>5:30 p.m.</td>
                                    <td rowspan="2">Prayer Moves</td>
                                </tr>
                                <tr alt="4:45-6:30 p.m.">
                                    <td>4:45-6:30 p.m.</td>
                                    <td colspan="2">Dinner</td>
                                </tr>
                                <tr alt="7:00 p.m.">
                                    <td>7:00 p.m.</td>
                                    <td colspan="2">Evening Gathering</td>
                                </tr>
                                <tr alt="9:00-9:45 p.m.">
                                    <td>9:00-9:45 p.m.</td>
                                    <td colspan="2">The Huddle</td>
                                </tr>
                                <tr alt="9:45-11:00 p.m.">
                                    <td>9:45-11:00 p.m.</td>
                                    <td colspan="2">Evening Options</td>
                                </tr>
                                <tr alt="11:30 p.m.">
                                    <td>11:30 p.m.</td>
                                    <td colspan="2">In hotels</td>
                                </tr>
                                <tr alt="midnight">
                                    <td>Midnight</td>
                                    <td colspan="2">In rooms and quiet</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="to-top" href="#top">Back to top.</a>
                </div>
            </div>
        </div>
    </section>

    <section id="afternoons">
        <div class="section-inner">
            <h2>Afternoon Options</h2>
            <div class="detail-node">
                <div class="single-detail group">
                    <div class="detail-text">
                        <h3>Outreach</h3>
                        <?php the_field('outreach_content'); ?>
                
                        <?php if( have_rows('outreach_button') ): ?>

                            <?php while( have_rows('outreach_button') ): the_row();
                                $button_label = get_sub_field('button_label');
                                $button_url   = get_sub_field('button_url');
                            ?>

                            <a class="btn" href="<?php echo $button_url; ?>"><?php echo $button_label; ?></a>

                            <?php endwhile; ?>
                            <?php endif; ?>
                     </div>
                </div>


                <div class="single-detail group">
                    <div class="detail-text">
                        <h3>Equipping Labs</h3>
                        <?php the_field('equipping_labs_content'); ?>
                
                        <?php if( have_rows('equipping_labs_button') ): ?>

                            <?php while( have_rows('equipping_labs_button') ): the_row();
                                $button_label = get_sub_field('button_label');
                                $button_url     = get_sub_field('button_url');
                            ?>

                            <a class="btn" href="<?php echo $button_url; ?>"><?php echo $button_label; ?></a>

                            <?php endwhile; ?>
                            <?php endif; ?>
                     </div>
                </div>

                <div class="single-detail group">
                    <div class="detail-text">
                        <h3>Rec Sports</h3>
                        <?php the_field('rec_sports_content'); ?>
                
                        <?php if( have_rows('rec_sports_button') ): ?>

                            <?php while( have_rows('rec_sports_button') ): the_row();
                                $button_label = get_sub_field('button_label');
                                $button_url     = get_sub_field('button_url');
                            ?>

                            <a class="btn" href="<?php echo $button_url; ?>"><?php echo $button_label; ?></a>

                            <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                </div>

                <div class="single-detail group">
                    <div class="detail-text">
                        <h3>Love Moves</h3>
                        <?php the_field('love_moves_content'); ?>
                
                        <?php if( have_rows('love_moves_button') ): ?>

                            <?php while( have_rows('love_moves_button') ): the_row();
                                $button_label = get_sub_field('button_label');
                                $button_url     = get_sub_field('button_url');
                            ?>

                            <a class="btn" href="<?php echo $button_url; ?>"><?php echo $button_label; ?></a>

                            <?php endwhile; ?>
                            <?php endif; ?>
                     </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>