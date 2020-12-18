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
	<p class="date"><?php echo get_field( "date" ); ?></p>
	<p class="title"><?php echo get_the_title(); ?></p>	
	<p class="location"><?php echo get_field( "location" ); ?></p>	

</div><!-- #post-<?php the_ID(); ?> -->
