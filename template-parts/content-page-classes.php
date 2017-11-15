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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<div class="schedule-content">
			
			<div class="class-container">
			<?php

            // check if the repeater field has rows of data
            if( have_rows('class') ):

                // loop through the rows of data
                while ( have_rows('class') ) : the_row();

                    // display a sub field value
                    echo "<div class='single-class'>";
                    echo "<h1>";
                    the_sub_field('class_name');
                    echo "</h1>";
                    echo "<p>";
                    the_sub_field('class_description');
                    echo "</p>";
                    echo "</div>";

                endwhile;

                else :

                    // no rows found

                endif;

                ?>
			</div><!-- .class-container -->
			
			<div class="front-buttons">
                        
                    <?php get_template_part( 'register' );?>
                    <button id="myBtn"><a href="<?php echo get_permalink( 21 ); ?>">Check Out Our Blog</a></button>
                        
            </div>

			<div class="schedule-container">
			
				<div class="schedule-entry schedule-entry--4cols">
                <div class="schedule-cell"><h3>Date</h3></div>
                    <div class="schedule-cell"><h3>Time</h3></div>
                    <div class="schedule-cell"><h3>Class</h3></div>
                    <div class="schedule-cell"><h3>Location</h3></div>
                <?php
            
            // check if the repeater field has rows of data
            if( have_rows('schedule') ):
                    ?>
                    
                    <?php
                // loop through the rows of data
                while ( have_rows('schedule') ) : the_row();
                    echo "<div class='schedule-cell'>";
                    the_sub_field('date');
                    echo "</div>";
                    echo "<div class='schedule-cell'>";
                    the_sub_field('time');
                    echo "</div>";
                    echo "<div class='schedule-cell'>";
                    the_sub_field('class');
                    echo "</div>";
                    echo "<div class='schedule-cell'><a href='/contact' style='text-decoration: underline;'>";
                    the_sub_field('location');
                    echo "</a></div>";
                    
                endwhile;

                else :

                    ?>
                    <p>Schedule has not been posted yet. If you have any questions, please <a href="contact">contact me</a>.</p>
                    <?php
                    

                endif;

                ?>
                
				</div><!-- .schedule-entry -->
			</div><!-- .schedule-container -->

		</div><!-- .schedule-content -->

    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->