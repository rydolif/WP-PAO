<?php get_header(); ?>

	
	<section class="hero--page hero">
		<?php get_template_part( 'parts/video' ); ?>
	</section>

	<section class="news section">
		<div class="container">

			<div class="section__header">
				<h2>Новости</h2>
			</div>

			<div class="news__list">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="news__item section__item">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
					<?php } ?>

					<h3><?php the_title(); ?></h3>
					<time datetime="1969-07-16">
						<?php echo get_the_date('Y-m-d'); ?>
					</time>
					<?php the_excerpt(); ?>
				</a>
				
				<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<?php wptuts_pagination(); ?> 

		</div>
	</section>


<?php get_footer(); ?>