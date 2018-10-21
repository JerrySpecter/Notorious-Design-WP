<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

	$post_array = $post;
	// // var_dump($post_array);
	// // $post_id = the_ID();
	// $link = get_field('video_url', $post_id);
	$featured_image = get_the_post_thumbnail_url();
	// $big_text = $post_array->post_excerpt;
	$small_text = $post_array->post_title;
	$content = $post_array->post_content;
?>


	<div <?php echo post_class('Print-item'); ?>>
		<div class="Print-item-image-wrap">
			<img class="Print-item-image" src="<?php echo $featured_image; ?>" alt="<?php echo $small_text; ?>">
		</div>
		<div class="Print-item-body">
			<h3 class="Print-item-title"><?php echo $small_text; ?></h3>
			<p class="Print-item-content"><?php echo $content; ?></p>
			<a class="Print-item-button" href="<?php echo get_permalink(); ?>">Saznaj više</a>
		</div>
	</div>