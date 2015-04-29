
<div id="container">
    <div class="row" id="content">
        <?php get_header(); ?>
        <?php if(have_posts()) :
            while(have_posts()) : the_post();
                get_template_part('content', get_post_format());

            endwhile;
        else :
            echo '<p> no contents</p>';
        endif;
        ?>
    </div>
    <?php get_footer();?>
</div>