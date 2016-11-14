<?php
get_header();
?>

<div class="site-content clearfix">

    <h3>Custom HTML Here!</h3>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile
            ;
         else :
            echo '<p>No content found</p>';
        

        endif;
        
        ?>
    <h3>Custom HTML Here!</h3>
    <div class="home-colums clearfix">
        <div class="one-half">
            <?php
                $opiniionPosts = new WP_Query('cat=1&posts_per_page=3&orderby=title&order=DSC');
                if ($opiniionPosts -> have_posts()) :
                    while ($opiniionPosts -> have_posts()) :
                    $opiniionPosts -> the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>   
           <?php     
                endwhile;
                else :
                 echo '<p>No content found</p>';

         endif;
            wp_reset_postdata();
           ?>
           <div class="btn">
                <button class="btn-a">View Button</button>
           </div>       
        </div>
        <div class="one-half last">
            <?php
                    $newposts = new WP_Query('cat=1&posts_per_page=3&orderby=title&order=DSC');
                    if ($newposts -> have_posts()) :
                        while ($newposts -> have_posts()) :
                        $newposts -> the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>     
               <?php     
                    endwhile;
                    else :
                     echo '<p>No content found</p>';
    
             endif;
                wp_reset_postdata();
               ?>
               <div class="btn">
                    <button class="btn-a">View Button</button>
               </div>     
        </div>
        
        
    </div>
     
   
<?php
get_footer();
?>