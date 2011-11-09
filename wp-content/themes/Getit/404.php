
<?php
get_header(); ?>

<div id="wrapper">
    <div class="contentbox clearfix">
        <div class="picture-box">
<?php
                // Check to see if the header image has been removed
    $header_image = get_header_image();
    if (!empty($header_image)) :
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php
                                // The header image
            // Check if this is a post or page, if it has a thumbnail, and if it's a big one
            if (is_singular() &&
                has_post_thumbnail($post->ID) &&
                ( /* $src, $width, $height */
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH))) &&
                $image[1] >= HEADER_IMAGE_WIDTH
            ) :
                // Houston, we have a new header image!
                echo get_the_post_thumbnail($post->ID, 'post-thumbnail');
            else : ?>
                <img src="<?php get_image_uri('banner1.jpg') ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>"
                     height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt=""/>
                <?php endif; // end check for featured image or standard header ?>
        </a>
        <?php endif; // end check for removed header image ?>

        </div>
        <div id="topAddons">
<?php
    get_template_part('content', 'top');
    ?>
        </div>
        <div id="leftPanel">
            <div class="content-box">
                <div id="breadcrumb"><a href="/">Home</a></div>
                <h2>Page Not Found</h2>
                 <div class="content">
                            Looks like you are trying to access a page that is not present or you are trying to access a page that existed before,
                            but is not available now. Click <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>">here</a> to go back to the home page.
                            <div class="clearer"></div>
                        </div>
            </div>
<?php
    get_template_part('content', 'left');
            ?>
        </div>
<?php
    get_sidebar();
        ?>
    </div>
</div>


<?php get_footer(); ?>
</div>

