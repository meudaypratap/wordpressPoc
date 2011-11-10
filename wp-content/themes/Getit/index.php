<?php 
get_header();
?>
<div id="topAddons">
<?php
    get_template_part('content', 'top');
    ?>
</div>
<div id="wrapper" class="clearfix">
    <div class="contentbox clearfix">
        <div id="leftPanel">
            <div class="content-box">
                <div id="breadcrumb">
                    <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/">Home</a>
                    <img src="<?php get_image_uri('arrow.jpg') ?>" align="absmiddle"/>
                    Blogs
                    <span class="register">&nbsp;|&nbsp;<a href="/wp-login.php?action=register"
                                                           target="_blank">Register</a></span>
                    <span class="register"><a href="/wp-admin/" target="_blank">Login</a></span>
                </div>

                <div id="homeMain" class="clearfix">

                    <!-- Start of Content-->

                    <?php if (have_posts()
                ) :

                    /**
                     * Show posts
                     */ while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>" style="padding-bottom: 40px;">

                        <div class="posthead">

                            <div id="pageName">
                                <p>
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
                                        <?php the_title()?>
                                    </a>
                                </p>
                                <span class="ratings"> <?php if (function_exists('the_ratings')) {
                                    the_ratings();
                                } ?> </span>

                            </div>


                            <div class="postauthor">
                                Posted by <?php the_author();?> on
                                <small class="month"> <?php the_time('M'); ?> </small>
                                <small class="day"> <?php the_time('j'); ?></small>
                                &nbsp;&nbsp;<?php edit_post_link('Edit'); ?>
                            </div>

                        </div>


                        <div class="content">
                            <?php the_content('Read the rest of this entry'); ?>
                            <div class="clearer"></div>
                        </div>
                        <!-- .postcontent -->

                        <div class="postinfo">
                            <div class="postcomments">
                                <a href="<?php the_permalink()?>#comments"><?php echo get_comments_number() ?>
                                    response(s)</a>
                            </div>
                            <!-- .postcomments -->
                            <div class="postcat">
                                | &nbsp; <a href="<?php the_permalink() ?>#respond"
                                            alt="Leave a comment on <?php echo the_title() ?>">Leave a comment</a>
                            </div>
                            <!-- .postcat -->
                            <div class="clearer"></div>
                        </div>
                        <!-- .postinfo -->

                    </div><!-- .post -->
                    <div class="clearer"></div>
                    <?php endwhile; ?>
                    <?php  else :
                    /**
                     * Show when no post is found
                     */
                    ?>
                    <h2>
                        <?php _e('Not Found', 'morning_coffee'); ?>
                    </h2>
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.', 'morning_coffee'); ?>
                    </p>
                    <?php endif; ?>

                    <div class="Nav" style="margin: 0 0 10px 50px; font-size: 11px;">
                        <?php if (function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                    } else {
                        posts_nav_link(' &#8212; ', __('&laquo; Go Back'), __('View more posts &raquo;'));
                    } ?>
                    </div>
                    <!-- .Nav -->
                </div>
            </div>
            <div id="left-content">
<?php
                                            get_template_part('content', 'left');
    ?>
            </div>
        </div>
<?php
    get_sidebar();
        ?>
    </div>
</div>

<!--close container in header -->
<?php
    get_footer();
?>