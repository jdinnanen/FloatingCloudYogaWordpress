<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FloatingCloudYoga
 */

get_header(); ?>
    <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    
                    <div class="entry-content">
                    <?php while ( have_posts() ) : the_post();?>
                       
                    <?php
                        if(has_post_thumbnail()){
                        the_post_thumbnail('hero-wide');
                        }
                    ?>

                    <?php endwhile; // End of the loop. ?>
                    
                        <div class="front-buttons">

                        <?php get_template_part( 'register' );?>
                        <button id="myBtn"><a href="<?php echo get_permalink( 18 ); ?>">Check The Schedule</a></button>

                        </div>
                    
	                </div><!-- .entry-content -->
                  
                      <?php
                                include('testimonials.php');
                                ?>
                   
                    <?php                  
                                $params = array(
                                    'posts_per_page' => 1,
                                    'post_type'       => 'post',
                                    
                                );
                                query_posts($params);

                                $content = get_the_content();

                                while(have_posts()): the_post();?>

                                <div class="featured-post">

                                    
                                        <?php
                                        if(has_post_thumbnail()){
                                        the_post_thumbnail('medium');
                                        }
                                        ?>
                                    
                                        <strong><h3><?php the_title() ?></h3></strong>
                                        <?php the_excerpt(); ?>
                                    
                                </div>                    
                                <?php endwhile;?>
                                
                                
    
                </main><!-- #main -->
        </div><!-- #primary -->

<?php
get_footer();