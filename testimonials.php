<div class="testimonials-body">
<h3>Testimonials</h3>
<div class="testimonials">

<?php                  
$params = array(
    'posts_per_page' => -1,
    'post_type'       => 'testimonials',
   
);
query_posts($params);

while(have_posts()): the_post();?>
        
        <blockquote><?php the_field('testimonial_text') ?>
        <cite><?php the_title() ?></cite>
        </blockquote>
                   
<?php endwhile;?>
                               
</div>
</div>
                                
                            
                                        
                        