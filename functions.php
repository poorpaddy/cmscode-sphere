<?php

function my_myme_types($mime_types){
    $mime_types['mxp'] = 'application/octet-stream';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

function register_my_menus() {
	register_nav_menus(
		array(
			'cms-menu' => __('CMS Menu'),
			'plugin-menu' => __('Plugin Menu')
		)
	);
}
add_action('init', 'register_my_menus');

?>