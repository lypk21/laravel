<?php
get_header();

if(have_posts()):
    while (have_posts()):the_post() ?>
    
    <div class="post page">
        <div class="column-container clearfix">
            <div class="column_title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="column_text">
                <?php the_content(); ?>
            </div>
        </div>
        
    </div> 
       
    <?php 
        endwhile;
        else :
            echo '<p>No content found</p>';



endif;
get_footer();
?>