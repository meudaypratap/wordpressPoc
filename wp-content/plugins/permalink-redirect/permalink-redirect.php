<?php
/*
Plugin Name: Permalink Redirect
Version: 1.0.1
Plugin URI: http://yoast.com/wordpress/permalink-redirect/
Description: Redirects all crap away from the end of the URL
Author: Joost de Valk
Author URI: http://yoast.com/

Copyright 2008 Joost de Valk (email: joost@joostdevalk.nl)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function clean_permalink() {
	global $post, $cat, $tag_id;
	if ($_GET || $_SERVER['QUERY_STRING'] != "" || substr($_SERVER['REQUEST_URI'],-1) == "?") {
		if (!is_search() && !is_preview()) {
			if (is_single() || is_page()) {
				$url = get_permalink($post->ID);
			} else if (is_category()) {
				$url = get_category_link($cat);
			} else if (is_tag()) {
				$url = get_tag_link($tag_id);
			} else {
				$url = get_bloginfo('url');
			}
			wp_redirect($url,301);
		}		
	}
}

add_action('get_header','clean_permalink',0);	

?>
