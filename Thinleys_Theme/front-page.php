

<div id="container">
    <div class="row" id="content">
    <?php get_header(); ?>
        <div class="col-lg-8">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p> No contents Found</p>';
            endif;
            ?>
        </div>

        <div class="col-lg-4">
            <p>Ancient Bhutanese History<iframe src='http://player.vimeo.com/video/85067909?title=0&amp;byline=0&amp;portrait=0&amp;color=' width='350'
                                                height='200' frameborder='0'></iframe><br />


            <p>Punakha the Wonderful<iframe src='http://player.vimeo.com/video/117891866?title=0&amp;byline=0&amp;portrait=0&amp;color=' width='350'
                                            height='200' frameborder='0'></iframe><br />


            <p> The Last Dragon Kingdom <iframe src='http://player.vimeo.com/video/27420886?title=0&amp;byline=0&amp;portrait=0&amp;color=' width='350'
                                                height='200' frameborder='0'></iframe></p>

        </div>
    </div>
        <?php get_footer(); ?>
</div>
</body>




