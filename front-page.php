<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zilele-nordului
 */

get_header();
?>

	<main id="primary" class="site-main">

	<h1>Zilele Nordului 2021</h1>
	<?php 

		$homepagePosts = new WP_Query(array(
			'posts_per_page' => 2
		));

		while ($homepagePosts->have_posts()) {
			$homepagePosts->the_post(); ?>
			<div class="event-summary">
				<a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink() ?>">
					<span class="event-summary__month"><?php the_time('M') ?></span>
					<span class="event-summary__day"><?php the_time('d') ?></span>
				</a>
				<div class="event-summary__content">
				<h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
				<p><?php 
				if (has_excerpt()) {
					echo get_the_excerpt();
				} else {
					echo wp_trim_words(get_the_content(), 18);
				}
				?> <a href="<?php the_permalink() ?>" class="nu gray">Read more</a></p>
				</div>
			</div>
			<?php
		}
		wp_reset_postdata();
	?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
