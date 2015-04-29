<?php
/*
 * Template Name: Two Column Template
 */
?>
<div id="container">
    <div class="row" id="content">
    <?php get_header(); ?>

                <div class="col-lg-9">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article class="post page">
                                <?php
                                if (has_children() OR $post->post_parent >0){ ?>
                                    <nav class="site-nav children-links clearfix">
                                 <span class="parent-link">
                                    <a href="<?php echo get_the_permalink(get_top_ancestor_id());?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a>
                                 </span>
                                        <ul>
                                            <?php
                                            $args = array(
                                                'child_of' => get_top_ancestor_id(),
                                                'title_li' => '',
                                            );
                                            ?>

                                            <?php wp_list_pages($args); ?>
                                        </ul>
                                    </nav>
                                <?php } ?>

                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile;
                    else :
                        echo 'No content found';
                    endif;
                    ?>

                </div>

                    <div class="col-lg-3">
                        <!--sidebar widget area -->
                        <div class="secondary-column">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('2column-template-sidebar') ) :

                            endif; ?>
                        </div>
                    </div>
         </div>
    <?php get_footer(); ?>

</div>