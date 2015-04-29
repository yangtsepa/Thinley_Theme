<?php
function learningWordPress_resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learningWordpress_resources');

//navigation menus
register_nav_menus( array(
    'primary'   => __( 'Header Menu'),
    'footer' => __( 'Footer Menu'),
) );

//get top ancestor
function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];


    }
    return $post->ID;
}

/*does page have children*/
function has_children()
{
    global $post;
    $pages = get_pages('child_of=' .$post->ID);
    return count($pages);
}
?>

<?php
/**
 * Register Widget Area.
 *
 */
function wpgyan_widgets_init() {

    register_sidebar( array(
        'name' => '2column-template Sidebar',
        'id' => '2column-template-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="rounded">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => 'single-page sidebar',
        'id' => 'single-page sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="rounded">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => 'Blog page sidebar',
        'id' => 'Blog page sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="rounded">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'wpgyan_widgets_init' );


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);
?>

<?php
// adding post format support
add_theme_support( 'post-formats',      // post formats
array(
'link',    // quick link to other site
'image',   // an image
'quote',   // a quick quote
'video', // video
'aside',//aside format
'gallery'//gallery format
)
);

?>