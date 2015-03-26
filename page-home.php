<?php
/*
 * This template calls header and the home page content
 */

get_header(); ?>

<style>
.inner-hero {
    background: url('<?php the_field('hero_image_large'); ?>') no-repeat;
}

@media only screen and (max-width : 495px) {
    .inner-hero {
    background: url('<?php the_field('hero_image_small'); ?>') no-repeat;
}

}

</style>

<section id="hero">
    <div class="inner-hero group">
        <div class="hero-copy">
            <h2>Louisville, Kentucky</h2>
            <h3>July 3-7, 2016</h3>
        </div>
    </div>
</section>

 <!-- Subscribe node -->
<section class="subscribe">
    <div class="section-inner group">
        <h3>Stay Informed</h3>
        <div id="mc-embed-signup">
            <form class="group">
                <div class="jvFloat mc-field-group">
                    <span class="placeHolder">Name</span>
                    <input type="text" value="" name="FNAME" class="labelFloat" id="mce-FNAME" placeholder="Your Name">
                </div>

                <div class="jvFloat mc-field-group">
                    <span class="placeHolder">Email</span>
                    <input type="email" value="" name="EMAIL" class="required email labelFloat" id="mce-EMAIL" placeholder="Email Address">
                </div>

                <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div> 

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_6f5e5465f865eb3c9921a4aad_e349f1a24f" tabindex="-1" value=""></div>

                <div class="jvFloat mc-field-group">
                    <span class="placeHolder">Submit</span>
                    <input class="submit-btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
            </form>
        </div>
    </div>
</section>

<!-- About Challenge -->
<section class="intro">
    <div class="section-inner">
        <p class="lede">
            Challenge Conference is a catalytic
            environment challenging students to
            live on mission with Jesus everyday,
            everywhere and with everyone.
        </p>

        <div class="motive-tabs icons group">
            <ul class="group">
                <li class="jesus active">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 107 101.5" enable-background="new 0 0 107 101.5" xml:space="preserve"><g>
                    <path d="M94.3 47.5c4.1-4.7 7.4-9.4 9.7-13.5l-10.8-5.9c-1.9 3.4-4.6 7.2-7.9 11C88.6 41.8 91.6 44.6 94.3 47.5z"/>
                    <path d="M47.3 26.6c-17.8 0-36.6 7.7-44.9 23.1c8.2 15.4 27 23.1 44.9 23.1c12.4 0 24.1-5.5 33.7-12.8 c-2.8-3-6-5.8-9.4-8.4c-7.5 5.2-15.9 8.9-24.3 8.9c-15.6 0-25.1-6.5-29.7-10.8c4.6-4.3 14.2-10.8 29.7-10.8 c19.2 0 38.8 19.3 46 32.4l10.8-5.9C95.8 50.4 73.1 26.6 47.3 26.6z"/></g></svg>
                    <span>Jesus Centered</span>
                </li>
                <li class="relational">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 105 106.6" enable-background="new 0 0 105 106.6" xml:space="preserve">
                        <g>
                            <path d="M98.2 29.4c2.4-6.5-4.6-7.6-6.3-3.6C89 33 85.8 42 83.1 47.7c-1.7 3.6-5.2 2.1-5.2-1.2 c0.1-6.1 2.5-15.8 3.6-34c0.3-4.6-7.1-6.4-8.2-1c-1.6 7.3-2.4 22.3-3.6 29c-1 5.8-4.9 3.8-4.7-0.3c-0.9-9.1-0.9-24.2-1-33.8 c-0.1-5.1-8.1-6.7-9 0.1c-0.4 10.6 0.6 21-0.1 33.7c0.1 3.2-2.8 6.2-5 1.4c-2.9-8-5.6-22.3-7.1-27.8c-1.8-7-10.5-3.9-8.7 2 c2.2 10.9 7.3 34.7 8.2 39c2.5-1.2 5.6-1.2 11.6 0.6c3.8 1.1 8.5 2.3 12.2 1.8c1.1-0.1 4-1.5 3.9 1.1c-0.1 1.7-4.4 5.1-11.6 3.1 c-4.5-1.2-5.2 2.8-2.6 5.6c2.6 2.8 4.8 3.7 4.8 3.7c2.2 1.4 8.3 4.7 12.4 7.5c2.4 1.3 0.7 5-2.1 3.4c-2.2-1.3-8-4.5-11.5-6.1 c-2.2-0.8-2.2 1-1.1 2c3.8 4.2 7.4 7.2 10.6 10.7c1.9 2.4-1.2 4.5-2.8 2.9c-3.1-3-7.8-7.8-11-10.4c-1.3-1.4-3.1-0.8-1.6 1.4 c1.7 2.5 6.2 7.5 8 10.3c1.3 2.1-1.5 3.8-2.9 2.3c-5.4-6.1-7.7-9.9-9.6-11.9c-1-1-2.6-0.4-2 1.3c0.9 2.6 2.8 6.5 4.1 9.7 c0.7 1.8-1.8 3.7-3.1 0.8c-2.2-3.8-5.6-12.1-7.3-14c-7.9-5.6-9.8-13.7-11.1-16.1C21.4 49.9 8.8 49.6 6 52.1 c-4.3 3.9 2.5 6.4 4.4 7.9C17 65 22.5 74.3 26.8 82.1c9.1 16.6 14.9 20.2 23.9 20.7c4.8 0.3 6-2.2 19.8 0 c20.7 3.2 16.9-31.2 17.1-39.6C87.8 57.5 95.6 39.1 98.2 29.4z"/>
                        </g>
                    </svg>
                    <span>Relationally Infused</span>
                </li>
                <li class="synergy">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 109 106.6" enable-background="new 0 0 109 106.6" xml:space="preserve">
                        <path d="M95.4 44.4c-5.3 0-9.6 4.2-9.6 9.5l-21.9 2.2c-0.5-2.4-1.6-4.6-3.2-6.3l10.2-11.3c1.6 1.1 3.5 1.8 5.6 1.8 c5.3 0 9.6-4.3 9.6-9.6c0-5.3-4.3-9.6-9.6-9.6c-5.3 0-9.6 4.3-9.6 9.6c0 2.4 0.9 4.7 2.4 6.4L59 48.3c-2.1-1.6-4.8-2.6-7.6-2.6 c-1.8 0-3.5 0.4-5 1l-14-26c2.5-1.7 4.1-4.6 4.1-7.9c0-5.3-4.3-9.6-9.6-9.6c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 c1.3 0 2.5-0.2 3.6-0.7l14 26c-3.4 2.3-5.7 6.1-5.7 10.6l-14.6 1.2c-0.9-4.4-4.8-7.7-9.4-7.7c-5.3 0-9.6 4.3-9.6 9.6 c0 5.3 4.3 9.6 9.6 9.6c5.2 0 9.5-4.2 9.6-9.3l14.6-1.2c0.4 2.1 1.3 4.1 2.6 5.7L19.3 87.2c-1.7-1.4-3.8-2.3-6.2-2.3 c-5.3 0-9.6 4.3-9.6 9.6c0 5.3 4.3 9.6 9.6 9.6c5.3 0 9.6-4.3 9.6-9.6c0-2.2-0.7-4.2-1.9-5.8l22.1-20.8c2.2 2 5.2 3.2 8.4 3.2 c2.3 0 4.4-0.6 6.2-1.7l12.2 17.8c-2 1.8-3.3 4.4-3.3 7.3c0 5.3 4.3 9.6 9.6 9.6s9.6-4.3 9.6-9.6c0-5.3-4.3-9.6-9.6-9.6 c-1.6 0-3.2 0.4-4.5 1.1L59.4 68.3c2.8-2.3 4.6-5.9 4.6-9.8c0-0.1 0-0.1 0-0.2L86 56.1c0.9 4.3 4.8 7.6 9.4 7.6 c5.3 0 9.6-4.3 9.6-9.6S100.7 44.4 95.4 44.4z M51.4 67.4c-4.9 0-8.9-4-8.9-8.9c0-4.9 4-8.9 8.9-8.9s8.9 4 8.9 8.9 C60.4 63.4 56.4 67.4 51.4 67.4z"/></svg>
                    <span>Synergistically Architected</span>
                </li>
                <li class="missional">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 109 106.6" enable-background="new 0 0 109 106.6" xml:space="preserve"><g>
                    <path d="M40.8 54.7c-3.3-4.5-7.4-9.3-12.5-14.4l0.4-0.4l4.6-5.6c1.2-1.4 0.6-2.6-1.2-2.5c0 0-26.1 0-26.6 0.6 c-0.5 0.6 4.6 26 4.6 26c0.3 1.8 1.6 2.1 2.7 0.7l4.5-5.5l0.8-0.9c10.7 7.7 20.5 16 26 27.6L40.8 54.7z"/>
                    <path d="M68.2 54.7c3.3-4.5 7.4-9.3 12.5-14.4l-0.4-0.4l-4.6-5.6c-1.2-1.4-0.6-2.6 1.2-2.5c0 0 26.1 0 26.6 0.6 c0.5 0.6-4.6 26-4.6 26c-0.3 1.8-1.6 2.1-2.7 0.7l-4.5-5.5l-0.8-0.9c-10.7 7.7-20.5 16-26 27.6L68.2 54.7z"/><g>
                    <path d="M38.5 27.1h7.2l0.9 0l3.1 50.3c1.9 0.1 3.6 0.7 4.9 1.3c1.1-0.5 2.4-1 3.9-1.2l4.2-50.4l0.8 0h7.2 c1.8 0 2.4-1.1 1.2-2.6c0 0-16.5-20.2-17.3-20.2c-0.8 0-17.2 20-17.2 20C36.1 26 36.6 27.1 38.5 27.1z"/>
                    <path d="M66.9 87.9c-1.2-4-4-4.9-6.6-5c-2.9-0.1-5.3 2-5.8 2c-0.5 0-2.9-2.1-5.8-2c-2.6 0.1-5.3 1.1-6.6 5 c-2.9 9.3 12.3 16.5 12.4 16.5C54.6 104.4 69.8 97.2 66.9 87.9z"/></g></g></svg>
                    <span>Missionally Driven</span>
                </li>
                <li class="prayer">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 109 106.6" enable-background="new 0 0 109 106.6" xml:space="preserve"><g>
                    <path d="M54.5 3.9c-11.6 29-34.4 47.8-34.4 66.8c0 19 15.4 34.4 34.4 34.4c19 0 34.4-15.4 34.4-34.4 C88.9 51.7 67 31.5 54.5 3.9z M54.5 94.4c-13.4 0-24.3-10.9-24.3-24.3c0-4.7 1.9-9.3 4.8-14.2c0 0.2-0.1 0.3-0.1 0.5 c0.1-0.2 0.3-0.4 0.4-0.6c-2.2 9.6 0.3 18.6 12.8 18.6c9.9 0 15.8-7.7 9.3-13.6c-0.2 0.7-0.5 1.4-0.8 2.1l-0.8-0.3 c0.4-0.8 0.7-1.6 0.9-2.4c-1-0.8-2.3-1.6-3.9-2.3c1.6-0.3 3.1-1.2 4.6-2.2c-0.1-1.7-0.6-3.1-1.4-4.1c-1-1.3-2.5-2.1-4.2-2.4 c-1.7-0.3-3.6-0.1-5.4 0.7c-5.6 2.3-8.5 9.3-6.6 14.5c2.1-4.1 4.9-5.5 8.7-4.5c-2.6 3.4-5.5 4.9-8.6 4.9c0.5 1.2 1.3 2.3 2.4 3.2 c2.5-3.1 5.1-3.7 8.1-2.2c-2.8 2.3-5.4 2.9-7.9 2.4c1.4 1.1 3.3 1.8 5.7 2.1c2.5-1.8 4.5-1.5 6.2 0c-2 2.5-4 2.3-6.1 0.2 c-13.5-1.4-11.8-16.5-3-21c-3 0.4-5.3-0.4-7-2c3.1-1.5 5.8-0.8 8.1 1.5c0.8-0.3 1.7-0.5 2.6-0.7c-2.2-0.7-3.7-1.9-4.7-3.6 c3.9-1.3 6.1 0.1 7.2 3.6c0.2 0 0.3 0 0.5 0.1c1.9 0.3 3.6 1.2 4.7 2.7c0.8 1 1.4 2.4 1.5 4c4.1-2.9 8.1-6.3 13.9-1 c4 3.7 6 8 6.4 12.4c0.2 1.2 0.4 2.4 0.4 3.6C78.8 83.5 67.9 94.4 54.5 94.4z"/>
                    <path d="M38.8 83.1c14.2 2 10.7-4.8 21.1-9.4C83.2 65.3 60.2 106.6 38.8 83.1z"/></g></svg>
                    <span>Prayer Saturated</span>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="jesus active">
                <h3>Jesus Centered</h3>
                <p>From start to finish, Challenge is about the glory of God in the face of Christ (2 Cor. 4:6). He’s the One we want students remembering and talking about when they go home.</p>
            </div>
            <div class="relational">
                <h3>Relationally Infused</h3>
                <p>We believe spiritual growth takes place best in the context of relationships. Therefore, we create intentional opportunities to strengthen the connections between students and leaders.</p>
            </div>
            <div class="synergy">
                <h3>Synergistically Architected</h3>
                <p>We work hard to create an intentionally integrated environment that bleeds the central message throughout each of the diverse components of Challenge in order to create a stronger learning environment.</p>
            </div>
            <div class="missional">
                <h3>Missionally Driven</h3>
                <p>We long to see a posture of “sentness” that moves students out toward others both locally and globally as disciples who make disciples. While at Challenge, we seek to join God in what He’s doing in the city by strengthening local partnerships that will last long after we’ve gone.</p>
            </div>
            <div class="prayer">
                <h3>Prayer Saturated</h3>
                <p>Transformation is a supernatural, God-dependent process. Therefore, prayer is not simply a tactic, it is our transformational strategy. When we pray we know God moves.</p>
            </div>
        </div>
    </div>
</section>

<section class="media">
                <div class="section-inner">
                    <h3>Check it out</h3>
                    <div class="video-container">
                        <?php the_field('video_block'); ?>
                    </div>
                    <h4><a href="#">Check out more videos</a></h4>
                </div>
            </section>

<?php get_footer(); ?>