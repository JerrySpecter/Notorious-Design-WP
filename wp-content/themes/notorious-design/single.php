<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

	$post_array = $post;
	$small_text = $post_array->post_title;
	$content = $post_array->post_content;
	$post_id = get_the_ID();
	$gallery = acf_photo_gallery(acf_gallery, $post_id );

get_header(); ?>

<div class="grid-container full print-single">
	<main class="grid-x">
		<div class="Archive-header cell small-12">
			<h2><?php echo $small_text; ?></h2>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>	
			<div class="cell small-12">
				<div class="grid-x">
					<?php foreach($gallery as $image) { ?>
						<div class="Print-gallery-item cell small-12 medium-4 large-3">
							<img src="<?php echo $image['full_image_url']; ?>" data-open="modalPrint-<?php the_ID(); ?>">
							<div id="modalPrint-<?php the_ID(); ?>" class="reveal modal-print" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" data-animation-in="fade-in" data-animation-out="fade-out">
								<div class="Modal-content">
									<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">&times;</span>
									</button>
									<img src="<?php echo $image['full_image_url'];?>">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>		
		<?php endwhile; ?>
	</main>
</div>
<?php get_footer();
