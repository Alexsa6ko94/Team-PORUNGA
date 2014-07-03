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
    <div class="container mainContent">
		  <div class="page-header">
			<h1>The "Dream Team"</h1>
		  </div>
			<section class="col-sm-3">
			<div>
				<h3>Александър Боянов</h3>
				<p>Трудно описуема личност - истинска "майна"! Би било добре да не се занимавате с него...Троши всякакъв код с лекота!</p>
				<div class="img">
					<img width="50%" alt="" src="./Images/sasho.png">
				</div>
			</div>
			</section>
			<section class="col-sm-3">
			<div>
				<h3>Станьо Джабраилов</h3>
				<p>Просто се правете, че не сте го видяли. Photoshop е толкова чужд за него, колкото на г-н Наков английския...</p>
				<div class="img">
					<img width="50%" alt="" src="./Images/stanyo.png">
				</div>
			</div>
			</section>
			<section class="col-sm-3">
			<div>
				<h3>Димитър Бонев</h3>
				<p>JavaScript Master of disaster. Бъговете са присъщи за стила му! Попаднете ли на негов код "Shif + delete"! <br />Не се колебайте! </p>
				<div class="img">
					<img width="50%" alt="" src="./Images/mitaka.png">
				</div>
			</div>		
			</section>
			<section class="col-sm-3">
				<div>
					<h3>Мартин Борисов</h3>
					<p>Човекът идея! Ако Ви попита имате ли нужда от идея - бъдете предпазливи и се отдалечете на безпоасно разстояние!</p>
					<div class="img">
						<img width="50%" alt="" src="./Images/marto.png">
					</div>
				</div>
			</section>
    </div>
	
<?php
	include ('bootstrap/loadBootstrap.php');
	include ('includes/footer.php');
?>
</body>
</html>