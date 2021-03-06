<?php get_header(); ?>

<?php
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$category_link = get_category_link( $category_id );
?>

<!-- =================================================
	section content
================================================== -->
<section class="content">

	<div class="container shadow">

		<div class="row-tight">

			<div class="span8 main">

				<main>

					<div class="container">

						<div class="row">

							<!-- =================================================
								module breadcrumbs
							================================================== -->
							<?php get_template_part("partials/module", "breadcrumbs"); ?>


							<!-- =================================================
								article/page content
							================================================== -->
							<article>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php

									$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
									$title = get_the_title();

								?>

									<?php if( !empty($title) && is_single() ): ?>

										<h2><?php echo $title; ?></h2> <br />

									<?php endif; ?>


									<?php if( !empty($thumbnail) && is_single() ): ?>

										<div class="full-width-wrapper b-lazy" data-src="<?php echo $thumbnail[0]; ?>"></div>

									<?php endif; ?>

									<!-- content -->
									<?php the_content(); ?>

									<?php if($category_id == 4){ ?>

										<?php
											$value = get_field('value');
											$description = get_field('description');
										?>

										<div class="inner-wrap-deals">

											<span class="value"><?php echo $value; ?></span>
											<span class="description"><?php echo $description; ?></span>

										</div>
										<!-- END inner-wrap-deals -->

									<?php }?>


								<?php endwhile; endif; ?>

								<?php if( is_single() ){ ?>

									<a href="<?php echo $category_link; ?>" class="btn btn-transparent btn-back">Wróć</a>

								<?php } ?>

							</article>

						</div>

					</div>

				</main>

			</div>
			<!-- END span8 main -->


			<!-- =================================================
				aside
			================================================== -->
			<?php get_template_part("partials/aside"); ?>


		</div>

	</div>

</section>
<!-- END section content -->



<!-- =================================================
	section info-page
================================================== -->
<?php get_template_part("partials/section", "info_page"); ?>


<?php get_footer(); ?>
