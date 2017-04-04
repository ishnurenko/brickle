<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="theme-color" content="#7776a2">
<link href="/img/favi.png" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href='https://fonts.googleapis.com/css?family=Cuprum:400,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<meta name="description" content="Brickle - это социальная сеть, в которой пользователи работают на свой рейтинг, выбиваются в ТОП, и получают за это поощрения. Также можно оставлять комментарии о пользователях, добавлять пользователь в избранное, и многое другое. Авторизация на сайте работает через крупнейшую в СНГ соницальную сеть - ВКонтакте. Теги: рейтинг, брикл, brickle, рейтинг 2015, рейтинг 2016, фото, рейтинг фото, фоторейтинг, брикл, социальная сеть, фото девушек, фото парней, бесплатно, без регистрации, смс, brickle rate, photorate, battle rating, rate battle, rating battle, rating war">
<link rel="stylesheet" type="text/css" href="stylex.css">
<title>Brickle - Будь в ТОПе.</title>
</head>
<body>
<div class="hh">
<?php require 'engine/xyz.php'; 
?>
</div></div>

<div class="bb">
<div class="body" id="body">
<div class="topez">

<div class="line">Девушки</div>


<?php require "engine/g_top.php"; ?>


<div class="xload"><a href="#uploadmore" class="loadmore">Показать еще</a></div>

</div>


<div class="topez">

<div class="line">Парни</div>

<?php require "engine/b_top.php"; ?>

<div class="xload"><a href="#uploadmore" class="loadmore">Показать еще</a></div>

</div>

</div>
</div>

<div class="down" style="display: none;">


</div>

</body>
<script>
$('#link1').click(function(){
  $(this).next().toggle('slow');
  return false;
});
</script>
<?php
if($ffx == 0){
$qq = require "engine/e.js";
echo $qq;
}else{
}
?>
<style>.bb{width:950px;}.body{width:950px;}</style>
</html>