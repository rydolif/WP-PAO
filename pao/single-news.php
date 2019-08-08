
<?php get_header(); ?>

	<section class="hero--page hero">
		<?php get_template_part( 'parts/video' ); ?>
	</section>

	<section class="about section" id="about">
		<div class="container">

			<div class="section__header">
				<h2><?php the_title(); ?></h2>
			</div>

			<div class="about__container">
				<div class="section__item news">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>

						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>