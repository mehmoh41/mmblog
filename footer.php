<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmblog
 */

?>

<footer id="colophon" class="site-footer bg-white pt-5">
	<div class="site-info">
		<?php
		if (!is_active_sidebar('sidebar-1')) {
			return;
		}
		?>
		<aside id="secondary" class="widget-area container">
			
			<div class="row p-0">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
			
		</aside>
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'mmblog')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'mmblog'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		// TODOS: REMOVE THIS
		printf(esc_html__('Theme: %1$s by %2$s.', 'mmblog'), 'mmblog', '<a href="https://codenawis.com/">CodeNawis.com</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>