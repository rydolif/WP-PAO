
<?php get_header(); ?>

	<section class="hero--page hero">
	</section>

	<section class="about section" id="about">
		<div class="container">

			<div class="section__header">
				<h2><?php the_title(); ?></h2>
			</div>

			<div class="about__container">
				<div class="about__col section__item">
					<?php the_field('left'); ?>
				</div>
				<div class="about__col section__item">
					<?php the_field('right'); ?>
				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>