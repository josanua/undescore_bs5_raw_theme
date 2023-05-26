<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpforpro_main_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'wpforpro' ); ?>
	</a>

	<header>
  	<!-- Right navbar solution https://www.codeply.com/p/zzFC5XoyUm -->
    <nav class="navbar navbar-expand-lg mt-2 md-lg-0">
      <div class="container">
        <div class="d-flex flex-grow-1 justify-content-between">
          <!-- hidden spacer to center brand on mobile -->
          <!-- <span class="w-100 d-lg-none d-block"></span> -->
          <a class="navbar-brand d-none d-lg-inline-block" href="<?php echo get_bloginfo('url') ?>">
						<img 	src="<?php echo get_stylesheet_directory_uri(); ?>/images/wpforpro-logo.png"  
									alt="<?php echo get_bloginfo('name')?>" 
									class="main-logo"
									width="" 
									height="" 
									/>
          </a>
          <a class="navbar-brand-two d-lg-none d-inline-block" href="<?php echo get_bloginfo('url') ?>">
            <img 	src="<?php echo get_stylesheet_directory_uri(); ?>/images/wpforpro-logo.png"  
									alt="<?php echo get_bloginfo('name')?>" 
									class="main-logo"
									width="" 
									height="" 
									/>
          </a>
          <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <span class="navbar-toggler-icon"></span> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi" fill="currentColor"
                   viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
              </svg>
            </button>
          </div>
        </div>
				
				<?php if (has_nav_menu('primary_navigation')) : ?>
					<div class="collapse navbar-collapse flex-grow-1 text-right mt-3 mt-lg-0" id="mainNavbar">
						<?php 
							wp_nav_menu([
								'theme_location'    => 'primary_navigation',
                'menu_class'        => 'nav',
                'container'         => '',
                'menu_class'        => 'navbar-nav ms-auto flex-nowrap',
                'depth'             => 2,
                'walker'            => new bootstrap_5_wp_nav_menu_walker(),
							]) 
						?>
					</div>
				<?php endif; ?>
				
      </div><!-- .container -->
    </nav><!-- .navbar -->
</header><!-- #masthead -->

