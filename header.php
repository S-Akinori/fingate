<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:locale" content="ja_JP"  />
  <link rel="icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri() .'/assets/images/logo.png' ?>" alt="<?= get_option('company_name'); ?>" /></a></div>
      <div class="flex">
        <nav class="c-nav">
          <ul class="c-nav__list">
            <li class="c-nav__list__item"><a href="">ABOUT</a></li>
            <li class="c-nav__list__item"><a href="">FACILITY</a></li>
            <li class="c-nav__list__item"><a href="">INCUBATION</a></li>
            <li class="c-nav__list__item"><a href="">COMMUNITY</a></li>
            <li class="c-nav__list__item"><a href="">EVENT</a></li>
            <li class="c-nav__list__item"><a href="">NEWS</a></li>
            <li class="c-nav__list__item"><a href="">BLOG</a></li>
            <li class="c-nav__list__item"><a href="">CONTACT</a></li>
          </ul>
        </nav>
        <button class="js-menu-button flex items-center justify-center">
          <span class="material-icons">
            menu
          </span>
        </button>
      </div>
    </div>
  </header>
  <!-- <div id="jsNav" class="l-nav-container">
    <button class="js-menu-button absolute right-16 top-16 flex items-center justify-center">
    <span class="material-icons text-gray-400">close</span>
    </button>
    <nav>
      <ul>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
      </ul>
    </nav>
  </div> -->
  <main>