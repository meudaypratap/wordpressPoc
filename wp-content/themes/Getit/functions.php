<?php
function puja_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    switch ($comment->comment_type) :
        case 'pingback' :
        case 'trackback' :
            ?>
	<li class="post pingback">
		<p><?php _e('Pingback:', 'dussehra'); ?> <?php comment_author_link(); ?><?php edit_comment_link(__('(Edit)', 'dussehra'), ' '); ?></p>
                <?php
                            break;
        default :
            ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php
                                            $avatar_size = 50;
                    if ('0' != $comment->comment_parent)
                        $avatar_size = 39;

                    echo get_avatar($comment, $avatar_size);

                    /* translators: 1: comment author, 2: date and time */
                    printf(__('%1$s on %2$s <span class="says">said:</span>', 'dussehra'),
                           sprintf('<span class="fn">%s</span>', get_comment_author_link()),
                           sprintf('<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
                                   esc_url(get_comment_link($comment->comment_ID)),
                                   get_comment_time('c'),
                               /* translators: 1: date, 2: time */
                                   sprintf(__('%1$s at %2$s', 'dussehra'), get_comment_date(), get_comment_time())
                           )
                    );
                    ?>

                    <?php edit_comment_link(__('[Edit]', 'dussehra'), ' '); ?>
                </div>
                <!-- .comment-author .vcard -->


            </footer>

            <div class="comment-content"><?php comment_text(); ?></div>

            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply &darr;', 'dussehra'), 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
            <!-- .reply -->
            <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'dussehra'); ?></em>
            <br/>
            <?php endif; ?>
        </article><!-- #comment-## -->

                    <?php
                                break;
    endswitch;
}

function login_head_change()
{
    echo '<style type="text/css">';
    echo 'h1 a { background:url(http://' . $_SERVER['HTTP_HOST'] . '/images/getit-logo-admin.png) 0 0 no-repeat; width:415px; height:70px;}';
    echo '</style>';

}

function login_headerurl_change()
{
    return home_url('/');
}

function login_headertitle_change()
{
    return "getit - Celebrating Diwali";
}

function get_image_uri($file_name)
{
    $file_path = get_stylesheet_directory_uri();
    echo "{$file_path}" . "/images/{$file_name}";
}

function get_js_uri($file_name)
{
    $file_path = get_stylesheet_directory_uri();
    echo "{$file_path}" . "/js/{$file_name}";
}

function get_css_uri($file_name)
{
    $file_path = get_stylesheet_directory_uri();
    echo "{$file_path}" . "/{$file_name}";
}

add_filter('login_headerurl', 'login_headerurl_change');
add_action('login_head', 'login_head_change');
add_filter('login_headertitle', 'login_headertitle_change');
// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// This theme uses post thumbnails
add_theme_support('post-thumbnails');
define('HEADER_TEXTCOLOR', '000');

// By leaving empty, we allow for random image rotation.
define('HEADER_IMAGE', 'banner1.jpg');

// The height and width of your custom header.
// Add a filter to twentyeleven_header_image_width and twentyeleven_header_image_height to change these values.
define('HEADER_IMAGE_WIDTH', apply_filters('twentyeleven_header_image_width', 945));
define('HEADER_IMAGE_HEIGHT', apply_filters('twentyeleven_header_image_height', 243));
add_image_size('large-feature', HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true); // Used for large feature (header) images
add_image_size('small-feature', 500, 300); // Used for featured posts if a large-feature doesn't exist

// Turn on random header image rotation by default.
add_theme_support('custom-header', array('random-default' => true));

// Add a way for the custom header to be styled in the admin panel that controls
// custom headers. See twentyeleven_admin_header_style(), below.
add_custom_image_header('twentyeleven_header_style', 'twentyeleven_admin_header_style', 'twentyeleven_admin_header_image');

// Add default posts and comments RSS feed links to head
add_theme_support('automatic-feed-links');
add_custom_background();
register_nav_menu('primary', __('Primary Menu', 'twentyeleven'));
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// Load up our theme options page and related code.
require(dirname(__FILE__) . '/inc/theme-options.php');

// Grab Twenty Eleven's Ephemera widget.
require(dirname(__FILE__) . '/inc/widgets.php');
function twentyeleven_widgets_init()
{
    register_sidebar(array(
                          'name' => __('Main Sidebar', 'twentyeleven'),
                          'id' => 'sidebar-1',
                          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                          'after_widget' => "</aside>",
                          'before_title' => '<h3 class="widget-title">',
                          'after_title' => '</h3>',
                     ));

    register_sidebar(array(
                          'name' => __('Showcase Sidebar', 'twentyeleven'),
                          'id' => 'sidebar-2',
                          'description' => __('The sidebar for the optional Showcase Template', 'twentyeleven'),
                          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                          'after_widget' => "</aside>",
                          'before_title' => '<h3 class="widget-title">',
                          'after_title' => '</h3>',
                     ));

    register_sidebar(array(
                          'name' => __('Footer Area One', 'twentyeleven'),
                          'id' => 'sidebar-3',
                          'description' => __('An optional widget area for your site footer', 'twentyeleven'),
                          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                          'after_widget' => "</aside>",
                          'before_title' => '<h3 class="widget-title">',
                          'after_title' => '</h3>',
                     ));

    register_sidebar(array(
                          'name' => __('Footer Area Two', 'twentyeleven'),
                          'id' => 'sidebar-4',
                          'description' => __('An optional widget area for your site footer', 'twentyeleven'),
                          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                          'after_widget' => "</aside>",
                          'before_title' => '<h3 class="widget-title">',
                          'after_title' => '</h3>',
                     ));

    register_sidebar(array(
                          'name' => __('Footer Area Three', 'twentyeleven'),
                          'id' => 'sidebar-5',
                          'description' => __('An optional widget area for your site footer', 'twentyeleven'),
                          'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                          'after_widget' => "</aside>",
                          'before_title' => '<h3 class="widget-title">',
                          'after_title' => '</h3>',
                     ));
}

add_action('widgets_init', 'twentyeleven_widgets_init');
function wp_db_connect($server = DB_HOST, $username = DB_USER, $password = DB_PASSWORD, $database = DB_NAME)
{
    return new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}

function get_n_latest_posts($number_of_posts)
{
    $posts = array();
    $sql = "select * from wp_posts where post_status = 'publish' and post_type = 'post' order by post_date desc limit " . $number_of_posts;
    $link = wp_db_connect();
    if (!$link->connect_errno) {
        if ($res = $link->query($sql)) {
            while ($row = $res->fetch_assoc()) {
                $posts[] = $row;
            }
            $res->free();
        }
    }
    $link->close();
    return $posts;
}

?>
