<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zilele-nordului
 */

?>


<div id="post-<?php the_ID(); ?>" class="muzica-item" <?php post_class(); ?>>

	<?php zilele_nordului_post_thumbnail(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="description-container">
		<p class="title"><?php echo get_the_title(); ?></p>
		<p class="date">
			<i class="fa fa-calendar-alt"></i>
			<?php echo get_field( "date" ); ?>
		</p>
		<p class="location">
			<i class="fa fa-map-marker"></i>
			<?php echo get_field( "location" ); ?>
		</p>
	</div>	
	</a>	

</div><!-- #post-<?php the_ID(); ?> -->