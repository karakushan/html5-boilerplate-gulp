<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="manifest" href="site.webmanifest">-->
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <meta name="theme-color" content="#008ca5">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--CONTENT-->
<header class="site-header">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <a href="/">
            <img src="/wp-content/themes/kids-theater/img/logo.png" alt="logo">
          </a>
        </div>
        <div class="col-lg-10">
          <div class="header-action">
            <nav class="main-nav">
              <ul>
                <li><a href="#">Лучшее </a></li>
                <li><a href="#">Афиша </a></li>
                <li><a href="#">Театры </a></li>
                <li><a href="#">Фестивали </a></li>
                <li><a href="#">Блог </a></li>
                <li><a href="#">О нас</a></li>
              </ul>
            </nav>
            <div class="social-icons">
              <a href="#"><i class="icon icon-facebook"></i></a>
              <a href="#"><i class="icon icon-instagram"></i></a>
            </div>
            <form action="" class="search-form">
              <input type="search" placeholder="Поиск">
              <button type="submit"><i class="icon icon-search"></i></button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="header-main">

    <div class="container">

      <div class="hero-parallax">
        <ul class="hero-parallax-scene scene unselectable" id="scene">
          <li data-depth=".05" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-1.png" alt=""></li>
          <li data-depth=".1" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-2.png" alt=""></li>
          <li data-depth=".2" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-3.png" alt=""></li>
          <li data-depth=".3" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-4.png" alt=""></li>
          <li data-depth=".4" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-5.png" alt=""></li>
          <li data-depth=".5" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-6.png" alt=""></li>
          <li data-depth=".6" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-7.png" alt=""></li>
          <li data-depth=".7" class="layer"><img src="/wp-content/themes/kids-theater/img/hb-8.png" alt=""></li>
        </ul>

        <h1>Ваш гид <br>
          по спектаклям <br>
          для детей и подростков <br>
          в Москве</h1>
        <div class="btn_wrapper">
          <a href="#" class="btn">Подобрать спектакль</a>
        </div>

      </div>
    </div>
  </div>
</header>
