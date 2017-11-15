<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FloatingCloudYoga
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
      <div class="contact-content">
        <!-- <div class="information-container"> -->
        <h1><?php the_field('name') ?></h1>
        <p><b>Phone:</b> <a href="tel:<?php the_field('phone') ?>"><?php the_field('phone')?></a></p>
        <p><b>Email:</b> <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></p>
        
        <?php
            
            // check if the repeater field has rows of data
            if( have_rows('locations') ):
              ?>
              <p><b>Location(s):</b></p>
              <?php
                $loc = 0;
                // loop through the rows of data
                while ( have_rows('locations') ) : the_row();
                    $loc = $loc+1;
                    echo "<p>" . $loc . ") ";
                    the_sub_field('address');
                    echo "<p> ";
                    
                endwhile;

                else :

                    // no rows found

                endif;

                ?>
                
                <?php if( get_field('optional_information') ): ?>
                <b>Optional information:</b>
              <p><?php echo the_field('optional_information'); ?></p>
            <!-- </div> -->
		        <?php endif; ?> 

            <!-- MAP CONTAINER -->
        <?php if( have_rows('locations') ): ?>
        <div class="acf-map">
          <?php 
          while ( have_rows('locations') ) : the_row(); 
            $location = get_sub_field('location');
          ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
              <!-- <h4><?php the_sub_field('title'); ?></h4> -->
              <p class="address"><?php echo $location['address']; ?></p>
              <!-- <p><?php the_sub_field('description'); ?></p> -->
            </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
                   
      </div><!-- END CONTACT CONTENT -->

    <!-- CONTACT ME FORM -->
      <div class="contact-form-container">
        <h1>Contact Me:</h1>
          <?php echo do_shortcode( '[contact-form-7 id="95" title="Contact me Form"]' ); ?>
      </div>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->