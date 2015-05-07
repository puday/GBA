<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-top">
        	<div class="footer-top-container">
            <div class="row">
              <div class="col-md-7"><h2>Sign up to receive our newletter</h2></div>
              <div class="col-md-5">
                <div class="newsletter-area"><input name="" type="email" />
                <button class="btn" id="ACTION_SUBMIT_SURVEY_RESPONSE" type="submit"><span class="icon-paper-plane"><span class="hide-text">submit</span></span></button>
                </div>
              </div>
        	</div>
            </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="links">
              <ul>
                <li><a href="#">The Approach</a></li>
                <li><a href="#">The Opportunity</a></li>
                <li><a href="#">What We Do</a></li>
                <li><a href="#">What You Can Do</a></li>
                </ul>
            </div>
            <p>Global Banking Alliance for Women 540 President Street Brooklyn NY 11215</p>
            <p>© Copyright 2015 Global Banking Alliance, All rights reserved.</p>
            <div>
              <ul class="social-networks">
                <li class="facebook"><a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook-icon.png"></a></li>
                <li class="twitter"><a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/twitter-icon.png"></a></li>
                <li class="google"><a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/linkedin-icon.png"></a></li>
              </ul>
            </div>
          </div>
      </div>
			<?php // get_sidebar( 'main' ); ?>
			

			<!--<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div>--><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>