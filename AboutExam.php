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
        <section class="col-sm-4">
        <h4 class="modal-header">Изисквания за допускане до изипт</h4>
            <ul>
                <li>25 заверки </li>
                <li>Присъствие на всички лекции</li>
                <li>Предаване на всички домашни</li>
                <li>200 лв преведени по сметката на лектора</li>
                <li>20 литра домашна гроздова</li>
            </ul>
        </section>
        <section class="col-sm-4">
        <h4 class="modal-header">Критерии за оценяване на изпит</h4>
            <ul>
                <li>Настроение на преподавател</li>
                <li>Късмет в  коя колонка ще попаднеш (има 5 колони от 2 до 6)</li>
                <li>С колко голямо деколте си отишла на изпита (само за дамите важи, при мъжете НЕ помага)</li>
                <li>Оспорил ли си на преподавателя, че това което преподава е на 20 години (ако си, изпита гарантирано НЕ се взема)</li>
            </ul>
        </section>
        <div  class="col-sm-4, img-responsive">
            <img src="Images/exam.jpg" />
        </div>
    </div>
<!-- End of page content -->

<!-- Begin page footer -->
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