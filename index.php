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
				Желаем ви много успехи! От екипа на SuperUni! </p>
				<article class="fastTracks">
				<div class="col">
					<div class="b1">
						<div class="trackTitle">
							<a href="#">
								fast track
							</a>
						</div>
						<div class="img">
							<a href="#">
								<img alt="" src="./Images/.png">
							</a>
						</div>
						<div class="desc">
							fast track info...<a href="#">Още</a>
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
						<img alt="" src="./Images/sm_softuni.png">
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
									<a href="#">
										Христо Бисеров заменя Светлин Наков в СофтУни
									</a>
								</div>
								<div class="img">
									<a href="#">
										<img alt="" src="./Images/sm_biserov.png">
									</a>
								</div>
								<div class="desc">
									Напусналият Парламента и водещите си позиции в ДПС Христо Бисеров ще замени създателя на Софтуерния...<a href="#">Още</a>
								</div>
							</div>
							<br />
							<div class="b2">
								<div class="newsTitle">
									<a href="#">
										Лаптопите Правец удрят Apple в земята, духът на Тодор Живков става рекламно лице</a>
								</div>
								<div class="img">
									<a href="#">
										<img alt="" src="./Images/sm_pravets.png">
									</a>
								</div>
								<div class="desc">
									Анонсираните вчера на pravetz.bg нови лаптопи, носещи легендарния компютърен бранд от миналото, ще борят конкуренцията...<a href="#">Още</a>
								</div>
							</div>
							<br />
							<div class="b3">
								<div class="newsTitle">
									<a href="#">
										БУМ НА НАТРАВЯНИЯТА В КРАЯ НА МЕСЕЦ МАЙ
									</a>
								</div>
								<div class="img">
									<a href="#">
										<img alt="" src="./Images/sm_alcohol.png">
									</a>
								</div>
								<div class="desc">Напрежение в токсикологията на столичните болници...<a href="#">Още</a>
								</div>
							</div>
						</div>
						<br />
						<h5> <a href="#">ВИЖ ВСИЧКИ НОВИНИ </a></h5>
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