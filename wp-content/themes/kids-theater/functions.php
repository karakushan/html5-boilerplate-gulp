<?php

// данная функция включает дополнительные опции вашей темы
function custom_theme_setup()
{
  // включаем поддержку языков
  load_theme_textdomain('kids-theater');
  // включаем авто добавление тега title в секцию HEAD
  add_theme_support('title-tag');
  // включаем поддержку миниатюр для темы
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size( 825, 510, true );
  // регистрируем меню
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'kids-theater'),
    'bottom' => __('Bottom Menu', 'kids-theater'),
  ));
  // включаем HTML5 разметку для некоторых видов контента
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
  // включаем поддержку собственного логотипа
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 100,
    'flex-height' => true,
  ));
  // подключаем стили в визуальный редактор
  add_editor_style(array('style.css'));
}

add_action('after_setup_theme', 'custom_theme_setup');

/**
 * подключаем скрипты и стили в шаблон
 */
function theme_scripts_and_styles()
{
  $theme_uri = get_stylesheet_directory_uri();
  $prefix = 'kids-theater-';

  wp_enqueue_style($prefix . 'montserrat', $theme_uri . '/fonts/Montserrat/stylesheet.css');
  wp_enqueue_style($prefix . 'museo', $theme_uri . '/fonts/Museo/stylesheet.css');
  wp_enqueue_style($prefix . 'normalize', $theme_uri . '/css/normalize.css');
  wp_enqueue_style($prefix . 'sprite', $theme_uri . '/css/sprite.css');
  wp_enqueue_style($prefix . 'slick', $theme_uri . '/bower_components/slick-carousel/slick/slick.css');
  wp_enqueue_style($prefix . 'datepicker', $theme_uri . '/bower_components/air-datepicker/dist/css/datepicker.min.css');
  wp_enqueue_style($prefix . 'main', $theme_uri . '/css/main.css');

  wp_enqueue_script($prefix . 'modernizr', $theme_uri . '/js/vendor/modernizr-3.7.1.min.js', array('jquery'), false, true);
  wp_enqueue_script($prefix . 'plugins', $theme_uri . '/js/plugins.js', array('jquery'), false, true);
  wp_enqueue_script($prefix . 'slick', $theme_uri . '/bower_components/slick-carousel/slick/slick.min.js', array('jquery'), false, true);
  wp_enqueue_script($prefix . 'datepicker', $theme_uri . '/bower_components/air-datepicker/dist/js/datepicker.min.js', array('jquery'), false, true);
  wp_enqueue_script($prefix . 'parallax', $theme_uri . '/bower_components/parallax/deploy/parallax.js', array('jquery'), false, true);
  wp_enqueue_script($prefix . 'main', $theme_uri . '/js/main.js', array('jquery'), false, true);
}


add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
