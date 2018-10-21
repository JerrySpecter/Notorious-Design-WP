<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

	// $post_array = $post;
	// // var_dump($post_array);
	// // $post_id = the_ID();
	// $link = get_field('video_url', $post_id);
	// $featured_image = get_the_post_thumbnail_url();
	// $big_text = $post_array->post_excerpt;
    // $small_text = $post_array->post_title;
    
    $categories = get_terms( 'category', array(
		'orderby'    => 'count',
		'hide_empty' => 1
    ) );

    ?>

    <?php if(!empty($categories)) { ?>
        <div class="Archive-filter">
            <ul class="Archive-filter-list">
                <?php foreach ( $categories as $category ) { ?>
                    <li class="Archive-filter-item">
                        <a class="Archive-filter-link" href="http://localhost:3002/notorious-design/videos?category_name=<?php echo $category->slug ;?>"><?php echo $category->name ;?></a>
                    </li>
                <?php } ?>
                <li class="Archive-filter-item">
                    <a class="Archive-filter-link" href="http://localhost:3002/notorious-design/<?php echo get_post_type(); ?>">Sve</a>
                </li>
            </ul>
        </div>
    <?php } ?>

