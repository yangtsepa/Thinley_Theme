<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" >
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
    <!--site-header -->
    <div class="row" id="header">
        <div id="image">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.jpeg" height="140px" width="150px"/>
        </div>
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
    </div>

            <header class="site-header">
                <div class="row" id="background1">
                <nav class="site-nav">
                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    ?>
                    <?php wp_nav_menu($args);?>
                </nav>
                </div>
            </header>

</body>
</html>