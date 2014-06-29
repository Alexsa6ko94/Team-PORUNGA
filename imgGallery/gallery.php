<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/nextAndPrevImgs.js"></script>
<link rel="stylesheet" href="style/gallery.css" type="text/css" />
<link rel="stylesheet" href="style/movingRegForm.css" type="text/css" />
</head>
<body>
<div class='fullGalleryHolder'>
	<div class='leftField'>
    </div><div class='images'>
    <?php include("scripts/fullGallery.php"); ?>
    </div><div class='rightField'>
    </div>
</div>
<div class='big'>
	<div class='left'>
    <span class='helper'></span><img src="Design/ArrowLeft.png" class='leftArrow' width="50px" />
    </div><div class='image'>
    <span class='virtualHelper'></span><img class='virtualImg' src="" id="1" />
    </div><div class='right'>
    <span class='helper'></span><img src="Design/ArrowRight.png" class='rightArrow' width="50px" />
    </div>
</div>
</body>
</html>
