<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-control" content="max-age=0">  
  <title>IIUM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
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
            <i class="fa fa-bars"></i>
        </div>
        
        <div class="show-menu">
        <?php  wp_nav_menu(array( 'theme_location' => 'primary' )); ?>
        </div>
       
    </div>
    </div>
			
	</header>
	<div id="content" class="site-content">