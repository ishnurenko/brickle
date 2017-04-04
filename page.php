<!DOCTYPE HTML http://v63345p9.bget.ru/page.php?id=2 "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="theme-color" content="#7776a2">
<link href="/img/favi.png" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href='https://fonts.googleapis.com/css?family=Cuprum:400, 400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<meta name="description" content="Brickle - это социальная сеть, в которой пользователи работают на свой рейтинг, выбиваются в ТОП, и получают за это поощрения. Также можно оставлять комментарии о пользователях, добавлять пользователь в избранное, и многое другое. Авторизация на сайте работает через крупнейшую в СНГ соницальную сеть - ВКонтакте. Теги: рейтинг, брикл, brickle, рейтинг 2015, рейтинг 2016, фото, рейтинг фото, фоторейтинг, брикл, социальная сеть, фото девушек, фото парней, бесплатно, без регистрации, смс, brickle rate, photorate, battle rating, rate battle, rating battle, rating war">
<link rel="stylesheet" type="text/css" href="stylex.css">
</head>
<body>

<div class="hh">
<?php require 'engine/xyz.php'; ?>
</div></div>

<?php
$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$idi = $_GET['id'];
$connect = mysql_select_db('v63345p9_data', $db );
$r = mysql_query("SELECT * FROM users WHERE id='$idi'");
			$m = mysql_fetch_array( $r );

$fname = $m['first_name'];
$lname = $m['last_name'];
$userid = $m['user_id'];
$rate = $m['rating'];
$img = $m['img'];
$gender = $m['gender'];
$verify = $m['verify'];
$ms = $m['ms'];
$vkid = $m['vk_id'];
echo'<title>'.$fname.' '.$lname.' - Профиль</title>';

?>


<div class="bb">
<div class="body" id="body">
<div class="customize">
<div class="phh">
<?php
echo '<img src="'.$img.'" width=200 height=200 style="border-radius: 200px;">';
 ?>
<input type="file"/ style="display:none;">
</div>
<div class="xnamex"><?php echo $fname.' '.$lname;?></div>

<?php
if($verify == 1){
echo '<img src="http://fm01.zz.mu/uploads/verify.png" width=32 height=30 class="verify" id="verify">';
}
?>

<div class="myrate"><?php echo $rate;?></div>
<div class="pls"><a href="#openModal" class="plsb">+</a></div>
<div class="xnick">@<?php echo $userid;?> </div>
<div class="favorite"><a href="#addf" style="color: white; text-decoration: none;">Добавить в избранное</a></div>
<?php 
if($ms == ""){
}else{
echo '<div class="ms">'; echo $ms; echo '</div>';
}
?>
<div class="vklink"><b>VK</b></div>
<div class="vklink2">
<?php 
echo '<a href="http://vk.com/id'.$vkid.'" target="_blank" style="color: white;text-decoration:none;">'.$userid.'</a>';
?>
</div>
</div>
<div class="bodyprofile">
<div class="rating">
<div class="history">История рейтинга</div>

<?php require "engine/rating.php"; ?>

<div class="xxx" style="display:none;"><center><a href="#lmore" class="lmore" >Показать еще</a></center></div>
</div>

</div>

<div class="sblock"><br>
<a href="#about" class="dlink">О нас</a> 
<a href="http://brickle.pp.ua/help.php" class="dlink">Обратная связь</a> 
<a href="#command" class="dlink">Наша команда</a> 
<a href="#about_callibration" class="dlink">О калибровке</a> 
<br><br>2016 (c) Brickle.pp.ua<br><br><br>

<?
$res = mysql_query("SELECT COUNT(*) FROM users");
$row = mysql_fetch_row($res);
$total = $row[0]; // всего записей
echo 'На сайте зарегистрировано: <b>'.$total.'</b> пользователей';
?>

</div>

</div>




<div class="comments" id="comments">
<div class="cline">Комментарии</div>

<?php require("engine/comment.php");
?>

<div class="zzz" id="openTenComments"><center><a href="" class="llmore" onclick="openTenCom();">Загрузить еще</a></center></div>

</div></div>

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<h3>Добавить рейтинг пользователю <a href="/id<?php echo $idi;?>" style="text-decoration: none; color: white;"><?php echo $fname.' '.$lname;?></a></h3>
		Выберите, сколько рейтинга нужно добавить:<br><br><br><br><br>
<div class="arrx"><a href="#" class="ar"><</a></div>
		<input type="text" class="aratex" value="3" maxlength=3 pattern="[0-9]{3}" max=77>
<div class="arrz" style="margin: 0px auto;background: white;height: 46px;width: 46px;border-radius: 1000px;float: right;z-index: 9;position: absolute;margin-left: 270px;margin-top: -40px;border: 2px solid #7776a2;text-align: right;"><a href="#" class="ar">></a></div><br><br><br>
		<a href="#addone" class="addone">Coins <b>[3]</b></a>
		<a href="#addone" class="addone">DCoins <b>[1]</b></a>
<br> <br>

	</div>
</div>


</body>
<script>
$(document.getElementById('link1')).click(function(){
  $(this).next().toggle('slow');
  return false;
});
</script>
</html>