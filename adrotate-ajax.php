<?php
/*
Plugin Name: AdRotate Ajax
Description: Ajax Wrapper for AdRotate
Author: KOMATSU Shinichiro
Version: 3.10.19-1.0
*/

if(!is_admin()) {
	add_action("wp_enqueue_scripts", 'adrotate_ajax_scripts');
}

function adrotate_ajax_scripts() {
	wp_enqueue_script('adrotate-ajax', plugins_url('/js/adrotate-ajax.js', __FILE__), array('clicktrack-adrotate'), '0.1', true);
	wp_localize_script('adrotate-ajax', 'adrotate_ajax', array(
		'group_url' => plugins_url('/ajax/adrotate-group.php', __FILE__),
		'banner_url' => plugins_url('/ajax/adrotate-ad.php', __FILE__),
	));
}

?>
