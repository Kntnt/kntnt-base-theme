<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kntnt_base
 */

?>

		<?php do_action( 'kntnt_base_after_content' ); ?>
	</div><!-- #content -->
	<?php do_action( 'kntnt_base_before_footer' ); ?>
<?php if ( class_exists( 'FLThemeBuilderLayoutData' ) && FLThemeBuilderLayoutData::get_current_page_footer_ids() ) {
	FLThemeBuilderLayoutRenderer::render_footer();
}
else { ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kntnt_base' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kntnt_base' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kntnt_base' ), 'kntnt_base', '<a href="https://www.kntnt.se/">Kntnt Sweden AB</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php } ?>
	<?php do_action( 'kntnt_base_after_footer' ); ?>
</div><!-- #page -->
<?php do_action( 'kntnt_base_after_page' ); ?>

<?php wp_footer(); ?>

</body>
</html>
