<?php
	/**
		* Template name: profile
	*/
?>


<?php get_header(); ?>


	<section class="hero--page hero">
		<?php get_template_part( 'parts/video' ); ?>
	</section>

	<section class="profile section">
		<div class="container">

			<h2>Обращение к гендиректору</h2>

			<div class="profile__container">
				<div class="profile__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.jpg" alt="">
					<p><b>Редькин Сергей Сергеевич</b></p>
					<p>Генеральный директор</p>
				</div>
				<div class="profile__content section__item">
					<p><b>Приветствую Вас на корпоративном сайте компании ПАО-8!</b></p>
					<p>
						ПАО-8 – Ваш надежный партнер по комплексному управлению реализации строительных проектов. Наша команда полностью возьмет на себя все процессы, касающиеся обследования инженерных систем зданий, а также за строительный контроль за работами по демонтажу и установке инженерного оборудования.
					</p>
					<p>
						Мы уважаем наших партнеров и дорожим репутацией. Поэтому в самом начале бизнес-пути установили несколько ключевых ценностей:
					</p>
					<ul>
						<li>
							Внимательное отношение
							<span>Понимание целей и полное погружение в задачу – это залог здорового и успешного взаимодействия.</span>
						</li>
						<li>
							Сроки
							<span>Мы ценим Ваше время и понимаем, как важно их соблюдать. Поэтому работаем профессионально и оперативно.</span>
						</li>
						<li>
							Синергия
							<span>Объединение практических навыков и теоретических знаний позволяет нам разрабатывать проекты нового поколения.</span>
						</li>
						<li>
							Серьезное отношение к нюансам
							<span>Ведь именно детали формируют единую картину, говорят о качестве услуг.</span>
						</li>
					</ul>
					<p>
						Мы стремимся к партнерским отношениям и укреплению долговременных связей. Делаем упор на высокое качество и расширение сферы деятельности. 
					</p>
					<p>
						Ваша прибыль и развитие в наших интересах. Ведь мы рассчитываем, что для работы над следующим проектом Вы снова выберете ПАО-8.
					</p>
					<p>
						У Вас остались вопросы или пожелания? 
						<br>
						Обращайтесь ко мне напрямую, буду рад помочь.
					</p>
					<p><b>
						С уважением,
						<br>
						Генеральный директор ООО «ПАО-8»
						<br>
						Редькин Сергей Сергеевич
					</b></p>
				</div>
			</div>

		</div>
	</section>

	<section class="profile section">
		<div class="container">
			
			<h2>Написать генеральному директору</h2>

			<div class="profile__form section__item">

				<form action="sendmail.php" method="post" class="form">
					<div class="profile__form_line">
						<div class="profile__form_input">
							<input type="text" name="name" placeholder="Ваше имя" required>
						</div>
						<div class="profile__form_input">
							<input type="text" name="lastname" placeholder="Ваша фамилия">
						</div>
					</div>
					<div class="profile__form_input">
						<input type="mail" name="mail" required placeholder="Электронная почта">
					</div>
					<div class="profile__form_input">
						<input type="tel" name="phone" required placeholder="Телефон">
					</div>
					<div class="profile__form_input">
						<input type="text" name="text" required placeholder="Ваше сообщение..">
					</div>
					<div class="">
						<button type="submit" class="btn" name="submit">Отправить</button>
					</div>
				</form>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-form.svg" alt="">

			</div>

		</div>
	</section>

<?php get_footer(); ?>