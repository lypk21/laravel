<?php

/* 
Template Name: Special Layout 
*/

get_header();

if(have_posts()):
    while (have_posts()):the_post() ?>
    
    <div class="post page">
        <h2><?php the_title(); ?></h2>
        
        <div class="info-box">
            <h4>Contact Title</h4>
            <p>about usabout usabout usabout usabout usabout usabout usabout usabout usabout usabout usabout usabout usabout usabout us</p>
        </div>
        
        <?php the_content(); ?>
    </div> 
       
    <?php 
        endwhile;
        else :
            echo '<p>No content found</p>';



endif;
get_footer();
?>