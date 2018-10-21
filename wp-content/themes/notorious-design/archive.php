<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$archive_name = post_type_archive_title( '', false );
// var_dump($archive_name);
get_header(); ?>

<div class="grid-container full">
	<main class="grid-x Archive-wrapper">
	<?php if ( have_posts() ) : ?>

		
		<?php if ( $archive_name === 'Videos' || $archive_name === 'Photos' ) { ?>
			<div class="Archive-header cell small-12">
				<h2><?php echo get_post_type(); ?></h2>
			</div>
		<?php } ?>
		
		
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) { 
			the_post(); 
			
			if ( $archive_name === 'Videos' ) {
				get_template_part( 'template-parts/archive-videos', get_post_format() ); 
			} elseif ( $archive_name === 'Photos' ) {
				get_template_part( 'template-parts/archive-photos', get_post_format() ); 
			} elseif ( $archive_name === 'Print' ) {
				get_template_part( 'template-parts/archive-print', get_post_format() ); 
			} else {
				get_template_part( 'template-parts/content', get_post_format() ); 
			}
		
		} ?>

		<?php
			if ( $archive_name === 'Videos' ) {
				get_template_part( 'template-parts/archive-filter', get_post_format() ); 
			}
		?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</main>
</div>

<?php get_footer();
