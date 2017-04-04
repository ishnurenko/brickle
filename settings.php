<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="theme-color" content="#7776a2">
<link href="/img/favi.png" rel="shortcut icon" type="image/x-icon" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href='https://fonts.googleapis.com/css?family=Cuprum:400, 400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<meta name="description" content="Brickle - это социальная сеть, в которой пользователи работают на свой рейтинг, выбиваются в ТОП, и получают за это поощрения. Также можно оставлять комментарии о пользователях, добавлять пользователь в избранное, и многое другое. Авторизация на сайте работает через крупнейшую в СНГ соницальную сеть - ВКонтакте. Теги: рейтинг, брикл, brickle, рейтинг 2015, рейтинг 2016, фото, рейтинг фото, фоторейтинг, брикл, социальная сеть, фото девушек, фото парней, бесплатно, без регистрации, смс, brickle rate, photorate, battle rating, rate battle, rating battle, rating war">
<link rel="stylesheet" type="text/css" href="stylex.css">
<title>Brickle - Будь в ТОПе.</title>
</head>
<body>

<div class="hh">
<?php require 'engine/xyz.php'; ?>
</div></div>

<div class="bb"><div class="body" id="body"  style="margin-top:-2px;">
<div class="line">Настройки</div>

<div class="edit">
<?php require "engine/set.php"; ?>

<form action="engine/set.php" method="post" enctype="multipart/form-data">
	<img src="<?php echo $photo; ?>" width=200 height=200 class="sph">
	<input type="file" name="img" accept="image/jpeg,image/png,image/gif" class="supload">
	<input type="hidden" name="id" value="<?=$myid;?>">
	<input type="submit" class="sbtn" value="Обновить фото" name="update_photo">
</form>


</div>
<div class="edit2">
Информация:<br><br>
<form action="engine/set_1.php" method="post">
<div class="xsname">Имя: </div>
<input type="text" class="xstx" name="f_name" value="<?php echo $my_name; ?>" disabled> <br><br>
<div class="xsname">Фамилия: </div>
<input type="text" class="xstx" name="l_name" value="<?php echo $my_soname; ?>" disabled> <br><br>
<div class="xsname">Ваш nick-name: </div>
<?php
if($vrf == 1){
	echo '<input type="text" class="xstx" name="nickname" value="'.$username.'"> <br><br>';
}else{
	echo '<input type="text" class="xstx" name="nickname" value="'.$username.'" disabled> <br><br>';
}
?>
<div class="xsname">Личная жизнь: </div>
<input type="text" class="xstx" name="ms" value="<?php if($ms==""){echo "Неизвестно";}else{echo $ms;} ?>" disabled> <br><br>
<div class="xsname">Возраст: </div>
<input type="text" class="xstx" name="age" value="<?php echo $age; ?>"> <br><br>
<div class="xsname">Пол:</div>
<?php
echo '<select class="select" disabled>';
if($sex == 2){
echo "<option>Парень</option>";
}elseif($sex==1){
  echo "<option>Девушка</option>";
}else{
echo "<option>Не определено</option>";
}
echo "</select>";
?>

 <br><br>
<div class="xsname">VK профиль: </div>
<input type="text" class="xstx" value="vk.com/id<?php echo $vkid; ?>" disabled> <br><br>
<input class="ssave" type="submit" value="Сохранить настройки" style="border:none;">
<input type="hidden" name="id" value="<?=$myid;?>">
</form>
<br><br>


Баланс & Рейтинг:<br><br>
<div class="xsname">Мои DCoins: </div>
<input type="text" class="xstx" value="<?php echo $dc; ?>" disabled> <br><br>
<div class="xsname">Мои монеты: </div>
<input type="text" class="xstx" value="<?php echo $c; ?>" disabled> <br><br>
<div class="xsname">Мой рейтинг: </div>
<input type="text" class="xstx" value="<?php echo $trate; ?>" disabled> 
<br><br>
<input type="checkbox" class="chex" id="chex"/>
<label for="chex">Добавить мой профиль в ТОП</label>
<br><Br>
<div class="xsname">Позиция в ТОПе: </div>
<input type="text" class="xstx" value="<?=$position;?>" disabled> <br><br>
<div class="balancexx">
Вы можете использовать донат монеты, чтобы повысить рейтинг на Вашем профиле.
</div>
<a href="#addcoins" class="sadd"><br>Добавить</a>
</div>
<div class="edit3">
<b><center>Правила.</center></b><br>

The site is designed to create a single assessment system users and creating between them a single rating.<br>
The site has a Category 2 rating, these categories are set for gender-friendly.<br>
That these two tops are divided into girls' and boys.<br>
The site not use profanity, oppress, or call zatrohuvaty self-esteem of another person. That site is the principle of "like - add rating or comment. No - no."<br>
The site will be created by the system downgrade users. You can reduce this rating themselves, using profanity and offensive words.<br>
For each violation website you there "bonus" in the form of -10 rating. If your rating is minus, your account automatically gets ban.<br>
<br>
Thank you for understanding!<br>
PS It might not all rules. Possible amendments. Sometimes the updates page, and re-read the rules.

<br><br>
<input type="checkbox" class="chex2" id="chex2"/>
<label for="chex2">Я согласен.</label>
<br><br>

<div class="des1024" style="border-top: 1px solid white; padding-top: 18px; padding-bottom: 10px;">
<input type="checkbox" class="chex" id="chex3"/>
<label for="chex3">Установить широкоформатный дизайн</label>
<br>
</div>

</div>

</div></div>


</body>
<script>
$(document.getElementById('link1')).click(function(){
  $(this).next().toggle('slow');
  return false;
});
</script>
</html>