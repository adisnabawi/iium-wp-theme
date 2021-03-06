<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="Cache-control" content="max-age=0">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<title>IIUM</title>
	<meta name="description" content="The International Islamic University Malaysia (IIUM) is the manifestation of one of the major aspirations of Muslim scholars in Malaysia to have an Islamic university in Malaysia to lead the Muslim ummah in all branches of knowledge">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead">
    <div class="mainmenu">
    <div class="menu-top container">
        <?php

        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
        ?>
    </div>
    <div class="menu-bottom">
        <div class="container">
        <?php  wp_nav_menu(array( 'theme_location' => 'primary' )); ?>
        </div>
    </div>
    <div class="menu-bottom-mobile">
        <div class="hamburger">
            <!-- <i class="fa fa-bars"></i> -->
						<button class="menu openanimate" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
				      <svg width="40" height="40" viewBox="0 0 100 100">
				        <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
				        <path class="line line2" d="M 20,50 H 80" />
				        <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
				      </svg>
				    </button>
        </div>

        <div class="show-menu">
        <?php  wp_nav_menu(array( 'theme_location' => 'primary' )); ?>
        </div>

    </div>
    </div>

	</header>
	<div id="content" class="site-content">
