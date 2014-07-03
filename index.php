<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include ('includes/metas.php');
	include ('includes/css.php');
?>    
	<!--[if lt IE 9]>
	<script src="html5shiv.js"></script>
	<![endif]-->
	<title>Super Uni</title>
</head>
<body>
<?php 
	include ('includes/header.php');
?>
    <!-- Begin page content -->
    <div class="container">
		  <div class="page-header">
			<h1>SuperSoftUni</h1>
		  </div>
		  <p class="lead">Добре дошли! </p>
		  <section class="col-sm-4">
			  <div>
				<h3>Fast Track курсове:</h3>
				<p>Fast Track курсовете, позволяват, да усвоитедадена способност за максимано кратък период от време! Те могат да са изключително полезни за вашето бъдещо развитие, като супер герои.
				Желаем ви много успехи! От екипа на SuperUni!  </p>
				<article class="fastTracks">
				<div class="col">
					<div class="b1">
						<div class="img">
							<a href="#">
								<img width="50%" alt="" src="./Images/rengenNakov.jpg">
							</a>
						</div>
						<div class="desc">
							Следващата седмица, започва Fast Track курс по ренгеново зрение!...<a href="#">Още</a>
						</div>
					</div>
					<br />
				</div>
			  </div>
		  </section>
		  <section class="col-sm-4">
			  <div>
				<h3>За университета:</h3>
				<p>Подготвяме млади и талантливи супергерой, за реализацията си и работна позиция, като такива. Ако чувствате, че силата е във вас, моля свържете се с нас. За повече информация или въпроси, може да посетите нашият форум.
					Желаем ви много успехи! От екипа на SuperUni!  </p>
				<div class="img">
					<a href="#">
						<img width="100%" alt="" src="./Images/sm_softuni.png">
					</a>
			    </div>
			     <div>
				<h3>Забавление</h3>
				<p>Това лято ще почиваме на луната. Всички са поканени!...<a href="#">Още</a></p>
				<div class="img">
					<a href="#">
						<img width="50%" alt="" src="./Images/moon.jpg">
					</a>
			    </div>
		  </section>
		  <section class="col-sm-4">
			  <div>
				<h3>Новините</h3>
					<article class="news">
						<div class="col">
							<div class="b1">
								<div class="newsTitle">
										Христо Бисеров заменя Светлин Наков в СофтУни
								</div>
								<div class="img">
									<a href="page1.php">
										<img alt="" src="./Images/sm_biserov.png">
									</a>
								</div>
								<div class="desc">
									Напусналият Парламента и водещите си позиции в ДПС Христо Бисеров ще замени създателя на Софтуерния...<a href="page1.php">Още</a>
								</div>
							</div>
							<br />
							<div class="b2">
								<div class="newsTitle">
										Лаптопите Правец удрят Apple в земята, духът на Тодор Живков става рекламно лице
								</div>
								<div class="img">
									<a href="page2.php">
										<img alt="" src="./Images/sm_pravets.png">
									</a>
								</div>
								<div class="desc">
									Анонсираните вчера на pravetz.bg нови лаптопи, носещи легендарния компютърен бранд от миналото, ще борят конкуренцията...<a href="page2.php">Още</a>
								</div>
							</div>
							<br />
							<div class="b3">
								<div class="newsTitle">
										БУМ НА НАТРАВЯНИЯТА В КРАЯ НА МЕСЕЦ МАЙ
								</div>
								<div class="img">
									<a href="page3.php">
										<img alt="" src="./Images/sm_alcohol.png">
									</a>
								</div>
								<div class="desc">Напрежение в токсикологията на столичните болници...<a href="page3.php">Още</a>
								</div>
							</div>
						</div>
						<br />
						<h5> <a href="news.php">ВИЖ ВСИЧКИ НОВИНИ </a></h5>
					</article>
			  </div>
		  </section>
    </div>
	<br /> 
	<div id="superNakov">
		<img alt="" src="./Images/supernakov1.png">
	</div>
	<div id="superPetya">
		<img alt="" src="./Images/petya.png">
	</div>
	
<?php
	include ('bootstrap/loadBootstrap.php');
	include ('includes/footer.php');
?>
</body>
</html>