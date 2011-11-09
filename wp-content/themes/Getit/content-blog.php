<div id="topAddons">
    <?php
        get_template_part('content', 'top');
    ?>
</div>
<div id="wrapper" class="clearfix">
    <div class="contentbox clearfix">
        <div id="leftPanel">
            <div class="content-box">
                <div id="breadcrumb"><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/">Home</a>
                    <img src="<?php get_image_uri('arrow.jpg') ?>" align="absmiddle"/>
                    <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/blog/">Blogs</a>
                    <img src="<?php get_image_uri('arrow.jpg') ?>" align="absmiddle"/>
                    <?php the_title(); ?>
                    <span class="register">&nbsp;|&nbsp;<a href="wp-login.php?action=register"
                                                           target="_blank">Register</a></span>
                    <span class="register"><a href="wp-admin/" target="_blank">Login</a></span>
                </div>
                <!--    <div id="inner-banner">-->
                <!--        <img src="http://-->
                <?php //echo $_SERVER['HTTP_HOST'] ?><!--/images/puja-aboutus-pic.jpg"/>-->
                <!--    </div>-->
                <div id="homeMain" class="clearfix">

                    <div id="content">
                    <div class="postwrap">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <div class="posthead">

                                    <div id="pageName">
                                        <p>
                                            <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"
                                               rel="bookmark">
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

                                <div class="postinfo">
                                    <div class="postcat">
                                        <a href="#comments"><?php echo get_comments_number() ?> response(s)</a>
                                    </div>
                                    <div class="postcat">
                                        &nbsp; |
                                        &nbsp; <?php post_comments_feed_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post')); ?>
                                    </div>
                                    <?php if (pings_open()) : ?>
                                    <div class="postcat">
                                        &nbsp; | &nbsp;<a href="<?php trackback_url() ?>"
                                                          rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- #notewrap -->

                                <!-- .postcat -->
                                <div class="clearer"></div>
                            </div>
                            <!-- .postinfo -->
                    </div><!-- .post -->

                            <br clear="all"/>

                            <?php
                                             /**
                             * Related Posts
                             */
                            if (function_exists('similar_posts')): ?>
                                <div id="related-posts-wrap">
                                    <h4>Related Posts</h4>

                                    <div class="rel-posts">
                                        <?php similar_posts(); ?>
                                    </div>
                                </div><!-- #related-posts-wrap -->
                                <?php endif; ?>

                            <?php
                                             /**
                             * Get the comments and comment form (comments.php)
                             */
                            comments_template(); ?>

                            <?php endwhile; ?>
                        <?php else : ?>
                        <h2><?php _e('Not Found', 'dussehra'); ?></h2>
                        <p><?php _e('Sorry, but the page you requested cannot be found.', 'dussehra'); ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- .postwrap -->

                </div>
                <!-- #content -->
            </div>
            <div id="left-content">
    <?php
                                                get_template_part('content', 'left');
        ?>
            </div>
        </div>
        <div id="rightPanel">
    <?php
                                                get_sidebar();
        ?>
        </div>
    </div>
</div>