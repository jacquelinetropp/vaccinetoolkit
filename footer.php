<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vaccine_toolkit
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer">
		<div class="footer__copyright">
			© Doctors For America | 2021
		</div>
		<div class="footer__logo">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/logo.jpg" alt="Doctors For America Logo">
		</div>
		<div class="footer__socials">
			Social Meida
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>