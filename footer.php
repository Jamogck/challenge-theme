<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package challenge-conference
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="section-inner group">
            <div class="section-right">
                <nav class="footer-navigation">
                    <ul class="group" role="navigation">
                        <li><a href="<?php bloginfo( 'url' ) ?>/downloads">Downloads</a></li>
                        <li><a href="mailto:challenge@efca.org">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-links">
                    <ul class="group">
                        <li><a href="http://twitter.com/EFCAchallenge">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="http://instagram.com/EFCAchallenge">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://vimeo.com/album/3630384">
                                <i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
                        <li><a href="http://fb.com/EFCAchallenge">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>     
            </div>
            <div class="partner-logos">
                <span>Strategic Partner</span>
                <a target="_blank" href="http://www.tiu.edu/"><img src="<?php bloginfo( 'url' ) ?>/wp-content/uploads/2015/08/TIU1.gif"></a>
            </div>
            <div class="efca-section">
                <a href="http://efca.org/explore"><img id="efca-logo" src="<?php bloginfo( 'url' ) ?>/wp-content/uploads/2015/04/efca-logo.svg" alt="Evangelical Free Church of America"></a>
                <p class="copyright">&copy; <?php echo date('Y'); ?>. The Evangelical Free Church of America. </br>
                All Rights Reserved.</p>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){$(".tab-content div").hide(),$(".active").fadeIn(),$(".motive-tabs li").click(function(){var t=$(this),a="."+$(t).attr("class");$(a).addClass("active").siblings().removeClass("active"),$(".active").fadeIn(),$(".tab-content div:not(.active)").hide()})});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-4296305-23', 'auto');
  ga('send', 'pageview');
 
</script>

</body>
</html>
