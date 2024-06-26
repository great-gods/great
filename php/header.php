<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">


  <header id="header">
    <div>
      <a href="/" class="logo"><img src="./images/apple-touch-icon.png" alt="LOGO"><?php bloginfo('name'); ?></a>
      <div class="headNav">
        <nav>
          <a href="/epccase">EPC実績</a>
          <a href="/news">ニュース</a>
          <a href="/contact">お問い合わせ</a>
        </nav>

        <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <?php wp_nav_menu(array(
              'container' => false,                           // remove nav container
              'container_class' => 'menu cf',                 // class of container (should you choose to use it)
              'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
              'menu_class' => 'nav top-nav cf',               // adding custom nav class
              'theme_location' => 'main-nav',                 // where it's located in the theme
              'before' => '',                                 // before the menu
              'after' => '',                                  // after the menu
              'link_before' => '',                            // before each link
              'link_after' => '',                             // after each link
              'depth' => 0,                                   // limit the depth of the nav
              'fallback_cb' => ''                             // fallback function (if there is one)
          )); ?>
        </nav>

        <div class="menuOpen">
          <span></span>
        </div>
      </div>
    </div>
  </header><!-- header -->
  <menu id="menu">
    <div>
      <div class="menuClose">
        <span></span>
      </div>
      <nav>
        <a href="/epccase">EPC実績</a>
        <a href="/news">ニュース</a>
        <a href="/contact">お問い合わせ</a>
      </nav>
    </div>
  </menu><!-- menu -->