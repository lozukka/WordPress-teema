<?php
get_header();
?>
<div id="content">
    
    <div id="news-box">
        <?php

            $the_query = new WP_Query(array(
                'category_name' => 'uutiset',
                'orderby' => 'date',
                'order' => 'desc',
                'posts_per_page' => '3'
            ));

    if ($the_query->have_posts()) :

    while($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="news">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="date"><?php echo get_the_date(); ?> 
                <?php the_excerpt(); ?>
            </div>
        <?php 
            endwhile;
            wp_reset_postdata();
        else: ?>
        <p> Ei kirjoituksia. </p>
        <?php
        endif; ?>
    </div>
    


</div> <!-- content -->

<?php get_footer(); ?>