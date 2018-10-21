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

?>

	<div class="cell medium-6">
		<div class="Photo-item" data-open="modalPhoto-<?php the_ID(); ?>">
			<img src="<?php echo $featured_image ;?>" alt="<?php echo $small_text ;?>">
			<div id="modalPhoto-<?php the_ID(); ?>" class="reveal modal-photo" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" data-animation-in="fade-in" data-animation-out="fade-out">
				<div class="Modal-content">
					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
					<img src="<?php echo $featured_image ;?>" alt="<?php echo $small_text ;?>">
				</div>
			</div>
		</div>
	</div>

