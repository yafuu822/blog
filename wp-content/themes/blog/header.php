<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<script type='text/javascript' src='http://34.213.180.39/blog/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='http://34.213.180.39/blog/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='http://34.213.180.39/blog/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>

	<?php wp_head(); ?>
	<link rel='stylesheet' id='genericons-css'  href='http://34.213.180.39/blog/wp-content/themes/blog/css/style.css?ver=40' type='text/css' media='all' />
	<link rel='stylesheet' id='genericons-css'  href='http://34.213.180.39/blog/wp-content/themes/blog/css/sp.css?ver=40' type='text/css' media='screen and (max-width: 640px)' />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88793149-2"></script>


	<script>
	jQuery(function($){
		$('.navToggle').click(function() {
	        $(this).toggleClass('active');
	        if ($(this).hasClass('active')) {
	            $('.globalMenuSp').addClass('active');
	        } else {
	            $('.globalMenuSp').removeClass('active');
	        }
	    });
		$('#header #menu-btn').click(function() {
	    	$(this).toggleClass('open');
	    	$('#header #menu').slideToggle();
	    	$('#nav-bg').fadeToggle();
	  	});
	  
	  	$('#header .close-btn, #nav-bg').click(function() {
	    	$('#header #menu-btn').removeClass('open');
	    	$('#header #menu').slideToggle();
	    	$('#nav-bg').fadeToggle();
	  	});
	  
	  	$('#header .nav-ul li a').click(function() {
	    	if ($('#header #menu-btn').hasClass('open')) {
	      		$('#header #menu-btn').removeClass('open');
	      		$('#header #menu').hide();
	      		$('#nav-bg').hide();
	    	}
	  	});
	});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<header>
			<div class="navToggle sp">
			    <span></span>
			    <span></span>
			    <span></span>
			</div>

				<nav class="globalMenuSp">
				    <?php
											/*wp_nav_menu( array(
												'theme_location' => 'テスト',
												'container'      => false,
												'menu_class'     => 'social-links-menu',
												//'depth'          => 0,
												'link_before'    => '<span>',
												'link_after'     => '</span>',
												'items_wrap'     =>'<ul>%3$s</ul>'
											) );*/
											
											wp_nav_menu( array(
												'theme_location' => 'primary',
												'menu_class'     => 'primary-menu',
											 ) );
										
										?>
				
				</nav>
	
		</header>
		
		<div id="content" class="site-content">
