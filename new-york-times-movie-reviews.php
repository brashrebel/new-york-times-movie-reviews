<?php
/*
Plugin Name: New York Times Movie Reviews
Description: A practice API plugin.
Version: 1.0
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/
function nyt() {
$url = 'http://api.nytimes.com/svc/movies/v2/reviews/search.json?query=comedy&api-key=7656ddcf87bf10c6685098da58fd2490%3A12%3A69048850';

	$response = wp_remote_get($url);
	print_r($response);
}

add_shortcode('nyt', 'nyt');
?>