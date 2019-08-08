<?php get_header(); ?>


<section class="hero">
	<div class="hero__container">
		<div class="container">
			
<!-- 			<h1><?php the_title(); ?></h1>

			<div class="click"><a href="#contacts" class="btn">Связаться с нами</a></div>
			<a href="tel:<?php the_field('tel', 'option'); ?>" class="hero__tel btn"><?php the_field('tel', 'option'); ?></a>
 -->
		</div>
	</div>

	<?php get_template_part( 'parts/video' ); ?>

</section>

<section class="about section" id="about">
	<div class="container">

		<div class="section__header">
			<h2>О компании</h2>
			<a href="<?php echo get_home_url(); ?>/o-nas/">ПОДРОБНЕЕ <img src="<?php echo get_template_directory_uri(); ?>/assets/img/more.svg" alt=""></a>
		</div>

		<div class="about__container">
			<div class="about__col  section__item">
				<p>
					Компания ПАО-8, в прошлом АЕКОМ, была создана в 2014 году в рамках группы компаний, занимавшихся поставкой и установкой холодильного и вентиляционного оборудования. Компания специализировалась на обследованиях инженерных систем зданий, а так же на строительном контроле за работами по демонтажу и установке инженерного оборудования.
				</p>
				<p>
					Тогда же компания начала оказывать услуги по комплексному управлению реализации строительных проектов (так называемый Технический заказчик).
				</p>
				<p>
					В 2016 году так же в рамках группы компаний, в соответствии с запросами заказчиков, был создан проектно-сметный отдел, позволявший успешно решать вопросы разработки проектов инженерных систем и не только, а так же детально рассчитывать стоимость.
				</p>
				<p>
					В 2018 году была создана компания ПАО-8, объединившая в себе специалистов по управлению проектами, строительному контролю, а так же отдел проектирования и сметный отдел.
				</p>
				<p>
					Подобный структурный состав компании позволяет комплексно либо по частям реализовывать инвестиционные строительные проекты, грамотно управляя стоимостью и сроками, и в результате получая именно то, что необходимо заказчику.
				</p>
			</div>
			<div class="about__col section__item">
				<p><b>В части работы с заказчиками, ПАО-8 практикует несколько основных принципов:</b></p>
				<ul>
					<li>
						Работаем на результат
						<span>Мы понимаем, что заказчику нужен не строительный процесс, а результат, поэтому прикладываем все усилия для завершения проекта. Мы не выполняем лишних задач и не затягиваем процесс.</span>
					</li>
					<li>
						Передаем информацию в полном объеме
						<span>Мы всегда регулярно информируем заказчика о ходе реализации проекта. Мы не задерживаем и не скрываем информацию, а передаем ее в полном объеме с нашим экспертным анализом.</span>
					</li>
					<li>
						Приходим с ответами, а не с вопросами
						<span>В любой сложной ситуации мы сначала прорабатываем пути ее решения, а затем обращаемся к заказчику.</span>
					</li>
					<li>
						Работаем с упреждением
						<span>Мы всегда выстраиваем работу так, чтобы нештатных ситуаций на проекте просто не было.</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</section>

<section class="services section" id="services">
	<div class="container">

		<h2>Услуги</h2>

		<div class="services__list">

			<?php
				$args = array(
				'post_type' => 'services',
				'posts_per_page' => -1,
			);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ): $query->the_post();
			?>

				<a href="<?php the_permalink(); ?>" class="services__item section__item">

					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg" alt="<?php the_title(); ?>"/>
					<?php } ?>

					<h3><?php the_title(); ?></h3>
					<p>
						<?php the_excerpt(); ?>
					</p>
				</a>
					
			<?php
				endwhile; wp_reset_postdata();
			?>

		</div>

	</div>
</section>

<section class="project section" id="project">
	<div class="container">

		<div class="section__header">
			<h2>Наши проекты</h2>
			<a href="<?php echo get_home_url(); ?>/project/">ВСЕ ПРОЕКТЫ <img src="<?php echo get_template_directory_uri(); ?>/assets/img/more.svg" alt=""></a>
		</div>

		<div class="project__list">

			<?php
				$args = array(
				'post_type' => 'project',
				'posts_per_page' => 4,
			);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ): $query->the_post();
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

			<?php
				endwhile; wp_reset_postdata();
			?>

		</div>

	</div>
</section>

<section class="info section" id="contacts">
	<div class="info__container container">

		<div class="info__text">

			<div class="info__text_block">
				<h2>Контакты</h2>
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info--place.svg" alt="">
						<b>Адрес:</b>
						<?php the_field('place', 'option'); ?>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info--tel.svg" alt="">
						<b>Телефон:</b>
						<a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info--mail.svg" alt="">
						<b>Электронная почта:</b>
						<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
					</li>
				</ul>
			</div>

			<div class="info__text_block">
				<h2>Напишите нам</h2>
				<form action="sendmail.php" class="info__form form" method="post">
					<input type="hidden" name="subject" value="Узнать подробнее!">

					<div class="">
						<input type="text" name="name" placeholder="Ваше имя" required>
					</div>
					<div class="">
						<input type="email" name="mail" required placeholder="Электронная почта">
					</div>
					<div class="">
						<input type="text" name="text" placeholder="Ваше сообщение.." required>
					</div>
					<div class="">
						<button type="submit" class="btn info__btn" name="submit">Отправить</button>
					</div>
				</form>
			</div>
		</div>

		<div class="info__map">
			<?php the_field('map', 'option'); ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>