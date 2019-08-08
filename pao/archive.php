<?php get_header(); ?>

	
	<section class="hero--page hero">
		<?php get_template_part( 'parts/video' ); ?>
	</section>

	<section class="project section">
		<div class="container">

			<div class="section__header">
				<h2>Проектирование</h2>
			</div>

			<div class="project__list">

				<?php
					$args = array( 'post_type'=> 'project', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
					array(
							'taxonomy' => 'project-cat',
							'field' => 'slug',
							'terms' => array( 'proektirovanie' )
						)
					)
					);
					$sposts = get_posts($args);
					foreach($sposts as $post) :setup_postdata($post);
					?>

						<div class="project__item section__item">
							<?php if ( has_post_thumbnail() ) {
								?>
									<div class="project__item_img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php
							} else { ?>
								<div class="project__item_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								</div>
							<?php } ?>


							<p><b><?php the_title() ?></b></p>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.svg" alt="">
									<b>Расположение:</b>
									<?php the_field('place'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/square.svg" alt="">
									<b>Площадь объекта:</b>
									<?php the_field('square'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/year.svg" alt="">
									<b>Год реализации:</b>
									<?php the_field('year'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.svg" alt="">
									<b>Услуги:</b>
									<?php the_field('services'); ?>
								</li>
							</ul>
						</div>

				<?php endforeach; ?>
			</div>

		</div>
	</section>
	
	<section class="project section">
		<div class="container">

			<div class="section__header">
				<h2>Строительно-монтажные работы</h2>
			</div>

			<div class="project__list">

				<?php
					$args = array( 'post_type'=> 'project', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
					array(
							'taxonomy' => 'project-cat',
							'field' => 'slug',
							'terms' => array( 'stroitelno-montazhnye-raboty' )
						)
					)
					);
					$sposts = get_posts($args);
					foreach($sposts as $post) :setup_postdata($post);
					?>

						<div class="project__item section__item">
							<?php if ( has_post_thumbnail() ) {
								?>
									<div class="project__item_img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php
							} else { ?>
								<div class="project__item_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								</div>
							<?php } ?>


							<p><b><?php the_title() ?></b></p>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.svg" alt="">
									<b>Расположение:</b>
									<?php the_field('place'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/square.svg" alt="">
									<b>Площадь объекта:</b>
									<?php the_field('square'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/year.svg" alt="">
									<b>Год реализации:</b>
									<?php the_field('year'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.svg" alt="">
									<b>Услуги:</b>
									<?php the_field('services'); ?>
								</li>
							</ul>
						</div>

				<?php endforeach; ?>
			</div>

		</div>
	</section>
	
	<section class="project section">
		<div class="container">

			<div class="section__header">
				<h2>Строительный контроль</h2>
			</div>


			<div class="project__list">

				<?php
					$args = array( 'post_type'=> 'project', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
					array(
							'taxonomy' => 'project-cat',
							'field' => 'slug',
							'terms' => array( 'stroitelnyj-kontrol' )
						)
					)
					);
					$sposts = get_posts($args);
					foreach($sposts as $post) :setup_postdata($post);
					?>

						<div class="project__item section__item">
							<?php if ( has_post_thumbnail() ) {
								?>
									<div class="project__item_img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php
							} else { ?>
								<div class="project__item_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								</div>
							<?php } ?>

							<p><b><?php the_title() ?></b></p>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.svg" alt="">
									<b>Расположение:</b>
									<?php the_field('place'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/square.svg" alt="">
									<b>Площадь объекта:</b>
									<?php the_field('square'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/year.svg" alt="">
									<b>Год реализации:</b>
									<?php the_field('year'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.svg" alt="">
									<b>Услуги:</b>
									<?php the_field('services'); ?>
								</li>
							</ul>
						</div>

				<?php endforeach; ?>
			</div>

		</div>
	</section>
	
	<section class="project section">
		<div class="container">

			<div class="section__header">
				<h2>Технический заказчик</h2>
			</div>


			<div class="project__list">

				<?php
					$args = array( 'post_type'=> 'project', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
					array(
							'taxonomy' => 'project-cat',
							'field' => 'slug',
							'terms' => array( 'tehnicheskij-zakazchik' )
						)
					)
					);
					$sposts = get_posts($args);
					foreach($sposts as $post) :setup_postdata($post);
					?>

						<div class="project__item section__item">
							<?php if ( has_post_thumbnail() ) {
								?>
									<div class="project__item_img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php
							} else { ?>
								<div class="project__item_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								</div>
							<?php } ?>

							<p><b><?php the_title() ?></b></p>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.svg" alt="">
									<b>Расположение:</b>
									<?php the_field('place'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/square.svg" alt="">
									<b>Площадь объекта:</b>
									<?php the_field('square'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/year.svg" alt="">
									<b>Год реализации:</b>
									<?php the_field('year'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.svg" alt="">
									<b>Услуги:</b>
									<?php the_field('services'); ?>
								</li>
							</ul>
						</div>

				<?php endforeach; ?>
			</div>


		</div>
	</section>
	
	<section class="project section">
		<div class="container">

			<div class="section__header">
				<h2>Обследование инженерных систем</h2>
			</div>

			<div class="project__list">

				<?php
					$args = array( 'post_type'=> 'project', 'posts_per_page' => -1,  'orderby'=> 'rand', 'tax_query' => array(
					array(
							'taxonomy' => 'project-cat',
							'field' => 'slug',
							'terms' => array( 'obsledovanie-inzhenernyh-sistem' )
						)
					)
					);
					$sposts = get_posts($args);
					foreach($sposts as $post) :setup_postdata($post);
					?>

						<div class="project__item section__item">
							<?php if ( has_post_thumbnail() ) {
								?>
									<div class="project__item_img">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php
							} else { ?>
								<div class="project__item_img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>" />
								</div>
							<?php } ?>

							<p><b><?php the_title() ?></b></p>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/place.svg" alt="">
									<b>Расположение:</b>
									<?php the_field('place'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/square.svg" alt="">
									<b>Площадь объекта:</b>
									<?php the_field('square'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/year.svg" alt="">
									<b>Год реализации:</b>
									<?php the_field('year'); ?>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.svg" alt="">
									<b>Услуги:</b>
									<?php the_field('services'); ?>
								</li>
							</ul>
						</div>

				<?php endforeach; ?>
			</div>


		</div>
	</section>

<?php get_footer(); ?>