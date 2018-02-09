<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script>
			(function(d) {
				var config = {
						kitId: 'iep6lbb',
						scriptTimeout: 3000,
						async: true
					},
					h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
	</script>
<?php wp_head(); ?>

<?php the_field('google_tracking', 'option'); ?>

</head>

<body <?php body_class(); ?>>
<?php $logo = get_field( 'logo', 'option' );
if ( empty( $logo ) ) {
	$logo = get_template_directory_uri() . '/img/logo.png';
} ?>
<div class="overlay overlay-contentpush">
	<header id="masthead" class="site-header masthead" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-9 show-sm">
					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title" title="<?php bloginfo( 'name' ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo;?>"></a></h1>
						<?php else : ?>
							<p class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo;?>"></a></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-xs-3 col-xs-offset-9 col-sm-offset-0">
					<button type="button" class="overlay-close">Close</button>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<section id="header-nav-content">
		<div class="container-fluid">
			<div class="row">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<div class="header-contact-info show-sm">
					<div class="col-sm-4">
						<?php the_field('header_left_col', 'option');?>
					</div>
					<div class="col-sm-4">
						<?php the_field('header_mid_col', 'option');?>
					</div>
					<div class="col-md-4 col-sm-4">
						<?php the_field('header_right_col', 'option');?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<div id="masthead" class="site-header masthead" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-9">
					<div class="site-branding">
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title" title="<?php bloginfo( 'name' ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo;?>"></a></h1>
						<?php else : ?>
							<p class="site-title"><a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo;?>"></a></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-xs-3">
					<nav id="site-navigation" class="main-navigation" role="navigation">

						<button class="menu-toggle" id="nav-icon3" aria-controls="primary-menu" aria-expanded="false">
							<span></span><span></span><span></span><span></span>
						</button>
						<span class="menu-word">Menu</span>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</div><!-- #masthead -->


	<div id="content" class="site-content">
