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

        <div class="masonry">
            <?php 

                $images = get_field('gallery');

                if( $images ): ?>

                <?php foreach( $images as $image ): ?>
                    <div class="item">
                        <a class="swipebox" href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>
        </div>

    </div>
</article>