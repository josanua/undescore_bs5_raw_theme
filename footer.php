<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpforpro_main_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpforpro' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'wpforpro' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpforpro' ), 'wpforpro', '<a href="http://underscores.me/">Josanu Andrei</a>' );
							?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
 <!-- 'footerMenu' => array(
                'theme_location'    => 'footer_navigation',
                'menu_class'        => 'nav',
                // 'walker'            =>  new wp_bootstrap4_navwalker(),
                'walker' => new \App\wp_bootstrap5_navwalker()
            ), -->
</body>
</html>
