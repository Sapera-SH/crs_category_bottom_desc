<?php
/*
Plugin Name: Cloud Retail Systems A/S - Category bottom description
Plugin URI: http://cloudretailsystems.dk
Description: Category bottom description: [crs_vis_cbd].
Author: Cloud Retail Systems A/S - Søren Højby
Version: 1.0
Author URI: http://cloudretailsystems.dk
*/
function crs_vis_cbd( $atts ) {
	return the_field('seo_beskrivelse');
}


add_shortcode('crs_vis_cbd', 'crs_vis_cbd');

