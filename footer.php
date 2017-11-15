<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FloatingCloudYoga
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	    <div class="container">
            <div class="site-info">
                <p>Floating Cloud Yoga <i class="fa fa-heart" aria-hidden="true"></i> 2017</p>
                
                <?php get_template_part( 'social-media' );?> 
                
            </div><!-- .site-info -->
        </div><!-- .container -->
        
        
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
