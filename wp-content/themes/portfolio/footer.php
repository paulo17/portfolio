<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package portfolio
 */
?>

	</div>
	<!-- div.container -->
	<footer class="footer-bottom">
		<div class="container">
			<nav class="footer">
				<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
				<div class="logo">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.png" height="65" width="200" alt="">
				</div>
			</nav>
		</div>
	</footer>
</div>
<!-- div#page -->

<?php wp_footer(); ?>

</body>
</html>
