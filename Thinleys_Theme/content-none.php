<?php
/**
 * The template for displaying a "No posts found" message
 */
?>


<div id="container">
    <div class="row" id="content">
        <?php get_header(); ?>
        <?php if(have_posts()) :
            while(have_posts()) : the_post();

            endwhile;
        else :
            echo '<p>No contents found, Please try again with different index.</p>';
            get_search_form();
        endif;
        ?>
    </div>
    <?php get_footer();?>
</div>