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
</head>
<body>
    <!-- Fixed navigation bar -->
	<?php 
		include ('includes/header.php');
	?>
    <!-- Begin page content -->
    <div class="container">
		<div class="page-header semantic-header">
			<h1>The truth about: Semantic Web</h1>
		</div>
		<p class="lead semantic-lead">Some text here</p>
		<section class="col-sm-12">
			<img id="semantic-pic" width="100%" height="100%" src="Images/SemanticWebChick.jpg" title"SemanticWeb" />
		</section>
    </div>
	<!-- End of page content -->
	
	<?php
		include ('bootstrap/loadBootstrap.php');
		include ('includes/footer.php');
	?>
    <!-- Bootstrap core JavaScript -->
</body>
</html>