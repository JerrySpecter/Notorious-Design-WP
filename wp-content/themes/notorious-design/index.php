<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container full">
	<div class="grid-x">
		<main class="main-content small-12">
			<?php if ( have_posts() ) : ?>
				<section class="Section-header">
					<div class="Section-header-body">
						<h2>Borna Hojsak</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi facere aliquam earum tempore eaque ducimus dolor debitis laboriosam, obcaecati magnam ipsa illum enim. Illo officiis rem accusamus et modi laboriosam!</p>
						<button>showreel</button>
					</div>
					<div class="Section-header-image">
						<img src="https://techflourish.com/images/marvel-character-clipart-on-transparent-background-14.jpg" alt="">
					</div>
				</section>
				<section class="Section-video">
					<div class="Section-video-image">
						<img src="https://techflourish.com/images/marvel-character-clipart-on-transparent-background-14.jpg" alt="">
					</div>
					<div class="Section-video-body">
						<h2>Video</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi facere aliquam earum tempore eaque ducimus dolor debitis laboriosam, obcaecati magnam ipsa illum enim. Illo officiis rem accusamus et modi laboriosam!</p>
					</div>
					<div class="Section-video-featured">
						<div class="Section-video-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-video-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-video-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
					</div>
				</section>
				<section class="Section-photo">
					<div class="Section-photo-body">
						<h2>Photo</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi facere aliquam earum tempore eaque ducimus dolor debitis laboriosam, obcaecati magnam ipsa illum enim. Illo officiis rem accusamus et modi laboriosam!</p>
					</div>
					<div class="Section-photo-image">
						<img src="https://techflourish.com/images/marvel-character-clipart-on-transparent-background-14.jpg" alt="">
					</div>
					<div class="Section-photo-featured">
						<div class="Section-photo-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-photo-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-photo-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
					</div>
				</section>
				<section class="Section-print">
					<div class="Section-print-image">
						<img src="https://techflourish.com/images/marvel-character-clipart-on-transparent-background-14.jpg" alt="">
					</div>
					<div class="Section-print-body">
						<h2>Print</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi facere aliquam earum tempore eaque ducimus dolor debitis laboriosam, obcaecati magnam ipsa illum enim. Illo officiis rem accusamus et modi laboriosam!</p>
					</div>
					<div class="Section-print-featured">
						<div class="Section-print-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-print-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
						<div class="Section-print-item">
							<img src="https://picsum.photos/400/250/?image=1033" alt="">
						</div>
					</div>
				</section>
			<?php endif; ?>
		</main>
	</div>
</div>
<?php get_footer();
