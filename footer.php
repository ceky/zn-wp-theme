<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zilele-nordului
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top_menu',
				'menu_id'        => 'top_menu',
			)
		);
		?>

		<ul class="social-media-container">
			<li>
				<a href="https://www.facebook.com/ZileleNordului" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
			</li>
			<li>
				<a href="https://www.instagram.com/zilelenorduluioficial/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
			</li>
			<li>
				<a href="https://www.youtube.com/channel/UC5OGPMLPCMnX1kgFMdgpsQQ" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
			</li>
		</ul>
		
		<p class="copyright">Copyright © 2021 Zilele Nordului</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</body>
</html>
