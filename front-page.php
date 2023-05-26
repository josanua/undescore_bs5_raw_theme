<?php
/**
 * The main template fron-page file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpforpro_main_theme
 */

get_header();
const USEFUL_RESOURCES_BLOCK_NAME = 'Start Here: Useful WordPress Resources & Guides';
$useful_resources_block_data = [
	[
			'title'         => 'Some Header Text 1',
			'link'          => '',
			'thumbnail_url' => IMAGE_PLACEHOLDER_350,
			'card_text'     => 'Note that you will probably want to test this page in conjunction with the&nbsp;Blog&nbsp;page. To...'
	],
	[
			'title'         => 'Some Header Text 2',
			'link'          => '',
			'thumbnail_url' => IMAGE_PLACEHOLDER_350,
			'card_text'     => 'Note that you will probably want &nbsp;Blog&nbsp;page. To...'
	],
	[
			'title'         => 'Some Header Text 3',
			'link'          => '',
			'thumbnail_url' => IMAGE_PLACEHOLDER_350,
			'card_text'     => 'Note this small <b>Bold</b> text'
	],
];

?>

	<main id="primary" class="container site-main">
		<div class="row">
			<div class="col-12">
				
				<div class="accordion my-5" id="frontPageAccordion">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Summary about this site.
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#frontPageAccordion">
							<div class="accordion-body">
								<div class="p-4 p-md-5 my-5 text-white rounded bg-dark">
									<div class="col-md-12 px-0">
										<h2 class="fst-italic">WordPress Tutorials and Resources for the next level</h2>
										<p class="lead my-3">On the net we find a lot of general information about WordPress but I want to discuss about projects on this CMS at a more advanced level, namely I am interested in business projects and its problems, how large projects are developed and their subsequent maintenance, the developer issues with. 
											I hope that here I will collect the answers to my questions for to make our lives easier in the future.</p>
										<p class="lead mb-0">
											<a href="<?php echo get_bloginfo('url') ?>/about-this-site/" class="text-white fw-bold">Continue reading...</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- #frontPageAccordion -->
				
				<div id="resources-and-guides" class="py-4 my-5">
  				<h4 class="text-center pb-3"><?= USEFUL_RESOURCES_BLOCK_NAME ?></h4>
  				<div class="row">
						<?php for ( $n = 0; $n <= (count($useful_resources_block_data) - 1); $n++ ) : ?>
							<div class="col-md-4">
      					<div class="card mb-4 p-2 text-center">
									<a href="<?php the_permalink() ?>" class="post-preview-link link-dark" >
										<h5 class="py-3"><?= $useful_resources_block_data[$n]['title'] ?></h5>
										<img src="<?= $useful_resources_block_data[$n]['thumbnail_url'] ?>" class="card-img-top" alt="..."  style="height: 200px">
										<div class="card-body">
            					<!-- <h5 class="card-title"><?php the_title() ?></h5> -->
											<p class="card-text text-dark">
												<?= $useful_resources_block_data[$n]['card_text'] ?>
											</p>
										</div>
									</a>
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div><!-- #resources-and-guides -->

				<?php include get_template_directory() . '/template-blocks/recent-posts.php'; ?>
				
			</div><!-- .row -->
		</div><!-- .col -->
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
