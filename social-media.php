<ul id="social-buttons">

		<?php

        // check if the repeater field has rows of data
        if( have_rows('social_media', 'option') ):

 	      // loop through the rows of data
            while ( have_rows('social_media', 'option') ) : the_row();

                // display a sub field value
                ?>
        <li><a target="_blank" href="<?php the_sub_field('link', 'option'); ?>"><?php the_sub_field('social_network', 'option'); ?></a></li>
        <?php
        endwhile;

        else :

        // no rows found

        endif;

?>

</ul>