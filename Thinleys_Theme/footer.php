
<html>
<body>
<div class="row" id="footer">
    <fooetr class="site-footer">
    <nav class="site-nav">
        <?php
        $args = array(
            'theme_location' => 'footer'
        );
        ?>
        <?php wp_nav_menu($args);?>
    </nav>

    <p><?php bloginfo('name');  ?>
    <p>
        <strong>Copyright April 2015. All Rights Reserved @ Selise.ch. Thimphu Bhutan</strong>
    </p>
    <p>Designed by Thinley Jamtsho. B Sc Computer Science </p>
    </fooetr>
</div>
<?php wp_footer(); ?>
</body>
</html>