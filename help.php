<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="theme-color" content="#7776a2">
<link href="/img/favi.png" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href='https://fonts.googleapis.com/css?family=Cuprum:400, 400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="stylex.css">
<meta name="description" content="Brickle - это социальная сеть, в которой пользователи работают на свой рейтинг, выбиваются в ТОП, и получают за это поощрения. Также можно оставлять комментарии о пользователях, добавлять пользователь в избранное, и многое другое. Авторизация на сайте работает через крупнейшую в СНГ соницальную сеть - ВКонтакте. Теги: рейтинг, брикл, brickle, рейтинг 2015, рейтинг 2016, фото, рейтинг фото, фоторейтинг, брикл, социальная сеть, фото девушек, фото парней, бесплатно, без регистрации, смс, brickle rate, photorate, battle rating, rate battle, rating battle, rating war">
<title>Brickle - Будь в ТОПе.</title>
</head>
<body>
<div class="hh" style="margin-top:17px;">
<div class="head">
<div class="logo"><a href="/" style="color: white; text-decoration:none;">Brickle</a></div>
<div class="nav">
<input type="text" class="search" placeholder=" Поиск..">
</div>
</div></div>

<div class="bb">
<div class="body" style="margin-top:-20px;">



<?
if (isset ($_POST['messageFF'])) {
$email = "fages@ukr.net";
$theme = "Тикет с сайта поддержки. Brickle SUPPORT.";
$theme = "=?windows-1251?b?". base64_encode($theme) ."?=";
$message = "Имя: ".$_POST['nameFF']."\nТема: ".$_POST['themeFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF'];
$headers = 'Content-type: text/plain; charset="windows-1251"';
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
  mail ($email,$theme,$message, $headers);
echo('<br><font style="float: left;color: #7776a2; background: #efefef; padding: 5px; width: 285px; margin-left: 10px;">Ваше сообщение отправлено!</font>');
}
?>

<div class="phpsupport">
<form method="POST" id="feedback-form">
Как к Вам обращаться:<br>
<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name"><br>
Email для связи:<br>
<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email"><br>
Тема:<br>
<input type="text" name="themeFF" required placeholder="верификация аккаунта" x-autocompletetype="name"><br>
Ваше сообщение:<br>
<textarea name="messageFF" required rows="5"></textarea><br>
<input type="submit" value="отправить">
</form>
</div>

<div class="faqx" style="    width: 550px;
    margin-left: 330px;">

<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {redesign: 1, mode: 3, width: "550", height: "400", color1: '7776a2', color2: 'FFFFFF', color3: 'FFFFFF'}, 114433626);
</script>

<div class="sblock" style="margin-top:10px; width: 530px; border-radius: 3px; height: 166px;"><br>
<a href="#about" class="dlink">О нас</a> 
<a href="http://brickle.pp.ua/support.php" class="dlink">Обратная связь</a> 
<a href="#command" class="dlink">Наша команда</a> 
<a href="#about_callibration" class="dlink">О калибровке</a> 
<br><br>2016 (c) Brickle.pp.ua<br>



</div>

</div></div>

<div class="dd">
<div class="down">

</div></div>

</body>

</html>