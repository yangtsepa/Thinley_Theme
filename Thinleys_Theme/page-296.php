<div id="container">
    <div class="row" id="content">
    <?php get_header(); ?>

        <div class="col-lg-4">
            </br>
            </br>
            </br>
            </br>
            <iframe width="350" height="300" src="//www.cincopa.com/media-platform/iframe.aspx?fid=A0IAcdMSS7om"
                    frameborder="0" allowfullscreen scrolling="no"></iframe><noscript><span>information</span><span>originaldate
                </span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 640</span><span>height</span><span> 500</span>
                <span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 847</span><span>height</span>
                <span> 503</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 900</span>
                <span>height</span><span> 542</span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span>
                    640</span><span>height</span><span> 500</span><span>originaldate</span><span>
                    1/1/0001 6:00:00 AM</span><span>width</span><span> 880</span><span>height</span><span> 533</span></noscript>
        </div>

        <div class="col-lg-8">
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
    </div>
    <?php get_footer();?>
</div>