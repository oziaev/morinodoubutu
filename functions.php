<?php

add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
  wp_register_style(	
	'google-fonts_style',
	'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kiwi+Maru&display=swap',
	array(),
	'1.0'
); 	
// reset styleの読み込み	
wp_register_style(	
	'reset_style',
	'https://unpkg.com/ress@4.0.0/dist/ress.min.css',
	array(),
	'1.0'
);
//slick styleの読み込み 

wp_register_style(
        'slick.min.css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.0'
    );

wp_register_style(
  'slick_style',
  'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
  array(),
  '1.0'
);
// main.css
wp_enqueue_style(	
	'main_style',
	get_template_directory_uri() . '/css/main.css',
	array('reset_style', 'google-fonts_style', 'slick.min.css', 'slick_style'),
	'1.0'
);
}	


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{

  // デフォルトのjQueryを削除
    wp_deregister_script('jquery');


// jquery
wp_register_script(
  'jquery_script',
  'https://code.jquery.com/jquery-3.7.1.min.js',
  array(),
  '1.0',
  true
);

// slick
wp_register_script(
  'slick_script',
  'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
  array(),
  '1.0',
  true
);

// main.js
wp_enqueue_script(
  'main_script',
  get_template_directory_uri() . '/js/main.js',
  array('jquery_script', 'slick_script'),
  '1.0',
  true
);
}

add_theme_support('post-thumbnails');

?>	