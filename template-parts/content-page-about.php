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
	
	
	<div class="mission">
    
    
    <?php
    $image = get_field('mission_image');
    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
    echo wp_get_attachment_image( $image, $size );
    }
    ?>
    
    <h2>Mission</h2>
    <p><?php the_field('mission_text') ?></p>
    </div>
    
    <div class="bio">
    <h2>Kim's Bio</h2>
    
    <?php the_field('bio_text') ?>

    </div>
    </div>
</article>