<meta keywords="deepavali,Hindu festivals,diwali Lights,Diwali candles,lakshmi,ganesh,diwali safety tips,diwali arti,pooja Songs,Puja songs,Diwali puja,meaning of Diwali,significance of Diwali,diwali lanterns,diwali traditions,Diwali greetings,Diwali Facts,diwali celebration ideas,diwali calendar,diwali gift ideas,diwali sweets,diwali decoration ideas,diwali rangoli ideas,diwali craft ideas kids,diwali diyas,Diwali Recipes,Diwali Wallpapers,indian diwali sweets recipes,healthy sweet recipes,Pooja Thali Decorations,Diwali Songs,dhanteras puja,dhanteras 2011 calendar,dhanteras quotes,jewellery,gold ,silver"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '::', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " :: $site_description";
	?></title>
<meta property="og:image" content="http://diwali.getit.in/images/header-bg.png"/>
<meta property="og:description"
      content="Diwali or Deepawali or Dipawali is one the most important, hugely waited and immensely cherished festival celebrated across India and in parts of Nepal."/>
<meta property="og:title" content="Getit ::  Diwali"/>
<meta content="activity" property="og:type"/>
<meta content="http://diwali.getit.in/" property="og:url"/>
<meta content="http://diwali.getit.in/" property="og:site_name"/>
<meta itemprop="name" content="Getit Diwali :: Home"/>
<meta itemprop="description"
      content="Diwali or Deepawali or Dipawali is one the most important, hugely waited and immensely cherished festival celebrated across India and in parts of Nepal. Originally, the name was Deepawali, which has its origin from Sanskrit, meaning “rows of Deep”."/>
<meta itemprop="image" content="http://diwali.getit.in/images/header-bg.png"/>
<link href="<?php get_css_uri('style.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php get_css_uri('skin.css'); ?>" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php get_css_uri('prettyPhoto.css'); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php get_css_uri('anythingslider.css'); ?>" type="text/css"/>
<script type="text/javascript" src="<?php get_js_uri('jquery-1.6.2.min.js') ?> "></script>
<script type="text/javascript" src="<?php get_js_uri('jquery.anythingslider.js') ?>"></script>
<script type="text/javascript" src="<?php get_js_uri('jquery.lite-content-slider.js') ?>"></script>
<script type="text/javascript" src="<?php get_js_uri('jquery.prettyPhoto.js') ?>"></script>
<script type="text/javascript" src="<?php get_js_uri('theme.js') ?>"></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php get_image_uri('favicon.ico') ?>"/>
<input type="hidden" value="<?php get_image_uri('leftArrow.gif') ?>" name="leftArrow" id="leftArrow">
<input type="hidden" value="<?php get_image_uri('rightArrow.gif') ?>" name="rightArrow" id="rightArrow">
<?php
                   /**
 * Hook for showing elements in the <head> section
 */
wp_head();
?>