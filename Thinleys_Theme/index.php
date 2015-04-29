
<div id="container">
    <div class="row" id="content">
    <?php get_header(); ?>

        <div class="col-lg-8">


                    <?php if(have_posts()) :
                        while(have_posts()) : the_post();
                            get_template_part('content', get_post_format());

                        endwhile;
                    else :
                        echo '<p> No contents found in the index.php</p>';
                    endif;
                    ?>
        </div>

        <div class="col-lg-4">
            <!--sidebar widget area -->
            <div class="secondary-column">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog page sidebar') ) :

                endif; ?>
            </div>
        </div>


    </div>
    <?php get_footer();?>
</div>