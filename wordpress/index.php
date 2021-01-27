<?php
    get_header();
    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post(); 
            // Display post content
            the_tittle('<h1 class="titulo">', '</h1>');
    ?>
    <!-- <php marcodm_post_meta(); ?>  -->
    <main><?php the_content(); ?></main>
    <?php
        endwhile; 
    endif;
    get_footer();
?>