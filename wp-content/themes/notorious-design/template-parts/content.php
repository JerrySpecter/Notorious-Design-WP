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
	// var_dump($post_array);
	// $post_id = the_ID();
	$link = get_field('video_url', $post_id);
	$featured_image = get_the_post_thumbnail_url();
	$big_text = $post_array->post_excerpt;
	$small_text = $post_array->post_title;

?>


	<div class="Video-item" data-open="myModal-<?php the_ID(); ?>">
		<h3 class="Video-item-title" style="background-image: url('<?php echo $featured_image; ?>')"><?php echo $big_text; ?></h3>
		<div id="myModal-<?php the_ID(); ?>" class="large reveal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" data-animation-in="fade-in" data-animation-out="fade-out">
			<div class="Modal-content">
				<h2 class="Modal-title"><?php echo $small_text; ?></h2>
				<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<iframe src="<?php echo $link; ?>" frameborder="0"></iframe>
		</div>
	</div>

