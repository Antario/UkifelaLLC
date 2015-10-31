<?php
/*
Plugin Name: Show posts on Static Page
Plugin URI: http://blog.portal.kharkov.ua/
Description: Shortcode container for get_posts and small loop. For WP 2.5+
Author: Yuri 'Bela' Belotitski
Version: 1.4
Author URI: http://blog.portal.kharkov.ua/
*/

add_shortcode('get_posts','short_posts_on_page');
                                   
function short_posts_on_page($atts) {
	global $more, $id, $post;

###
	$pro = true;   // Set to 'false' for turn off external template
###

	$more_s = $more;
	$id_s = $id;
	$post_s = $post;

	$res = 	'<div id="posts_on_page">'."\n";

	$lastposts = get_posts($atts);
	foreach ($lastposts as $post) {
   		$id = $post->ID; 
    	setup_postdata($post);
   		$more = false;
		if ($pro and $atts['template'] and file_exists(TEMPLATEPATH .'/'.$atts['template'])) {
			ob_start();
			include (TEMPLATEPATH .'/'.$atts['template']);
			$res .= ob_get_contents();
			ob_end_clean();
		} else  {
			$res .= '<div id="post-'.$id.'"><h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>'."\n";
 			if ($atts['show_content']) $res .= apply_filters('the_content', get_the_content($atts['more_text']));
	 		$res .= "</div>\n";
		}
	}
	
	$res .= "</div>\n";
	$more = $more_s;
	$id = $id_s;
	$post = $post_s;
	return $res;
}

?>