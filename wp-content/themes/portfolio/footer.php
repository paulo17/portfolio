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
		<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
		<div class="logo">
			<a href="http://hetic.net/" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.png" height="65" width="200" alt="">
			</a>
		</div>
	</div>
</footer>
</div>
<!-- div#page -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
