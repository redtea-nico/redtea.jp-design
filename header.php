<?php
/**
 * Version    : 1.2.1
 * Author     : redtea.jp
 * Author URI : https://redtea.jp
 * Created    : April 17, 2015
 * Modified   : April 7, 2020
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div id="container">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header <?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
		<?php do_action( 'habakiri_before_header_content' ); ?>
		<div class="container">
			<div class="row header__content">
				<div class="col-xs-10 <?php echo esc_attr( $site_branding_size ); ?> header__col">
					<?php get_template_part( 'modules/site-branding' ); ?>
				<!-- end .header__col --></div>
				<div class="col-xs-2 <?php echo esc_attr( $gnav_size ); ?> header__col global-nav-wrapper clearfix">
					<?php get_template_part( 'modules/gnav' ); ?>
				<!--	<div id="responsive-btn"></div>-->
				<!-- end .header__col --></div>
				<div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div><div class="overlay" id="overlay"><nav class="overlay-menu">
						<ul>
							<li><a href="https://redtea.jp">Home</a></li>
							<li><a href="https://redtea.jp/about">About</a></li>
							<li><a href="https://redtea.jp/blog">Blog</a></li>
							<li><a href="https://redtea.jp/accounts">Account</a></li>
							<li><a href="https://redtea.jp/contacts">Contact</a></li>
						</ul>
					</nav>
				</div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script id="rendered-js">$('#toggle').click(function () {$(this).toggleClass('active');$('#overlay').toggleClass('open');$('#toggle').toggleClass('open');});</script>
			<!-- end .row --></div>
		<!-- end .container --></div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
	<!-- end #header --></header>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>
