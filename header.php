<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mmblog'); ?></a>

		<header id="masthead" class="site-header bg-light shadow">
			<div class="site-branding">
				<?php
				// the_custom_logo();
				// if ( is_front_page() && is_home() ) :
				?>
				<!-- <h1 class="site-title"><a href="<?php
														// echo esc_url( home_url( '/' ) ); 
														?>" rel="home"><?php
																		//  bloginfo( 'name' ); 
																		?></a></h1> -->
				<?php
				// else :
				?>
				<!-- <p class="site-title"><a href="
				 <?php
					//   echo esc_url( home_url( '/' ) );
					?>
				 " rel="home"><?php
								//  bloginfo( 'name' ); 
								?></a></p> -->
				<?php
				// endif;
				// $mmblog_description = get_bloginfo( 'description', 'display' );
				// if ( $mmblog_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php
													// echo $mmblog_description;
													// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p> -->
				<?php
				//  endif; 
				?>
			</div><!-- .site-branding -->
			<!-- 
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 'menu_id'        => 'primary-menu',
			// )
			// );
			?>
		</nav> -->


			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light p-0">
					<a class="navbar-brand text-dark" href=<?php echo esc_url(home_url('/')); ?>><?php esc_html_e('Primary Menu', 'mmblog'); ?></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'list_item_class'  => 'nav-item',
								'link_class'   => 'nav-link'
							)
						);
						?>
						<div style="margin-left: auto;">
							<?php get_search_form(); ?>
						</div>
					</div>
				</nav>
			</div>


			<!-- #site-navigation -->
		</header><!-- #masthead -->