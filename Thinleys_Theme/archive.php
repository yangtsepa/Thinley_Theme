<div id="container">
    <div class="row" id="content">
    <?php get_header(); ?>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php get_template_part('content', get_post_format()); ?>
                By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>
                in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?>
            <?php endwhile;
        else :
            echo 'No content found';
        endif;
        ?>
    </div>

    <?php get_footer();?>
</div>