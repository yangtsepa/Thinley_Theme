<div id="container">
    <div class="row" id="content">
        <?php get_header(); ?>

                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h3>
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h5>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h5>
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h5>Archive for <?php the_time('F jS, Y'); ?>:</h5>
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h5>Archive for <?php the_time('F, Y'); ?>:</h5>
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h5>Archive for <?php the_time('Y'); ?>:</h5>
                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h5>Author Archive</h5>
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h5>Blog Archives</h5>
                <?php } ?>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

                <div class="post">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="entry">
                            <?php the_content(); ?>

                            <p class="postmetadata">
                                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                            </p>
                        </div>
                </div>

            <?php endwhile; ?>

            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>

        <?php endif; ?>

    </div>
    <?php get_footer(); ?>
    </div>
