<?php

echo '
<div class="head">
<div class="centr">
<div class="logo"><a href="/" style="color: white;text-decoration: none;">Brickle</a></div>
<div class="nav">
<input type="text" class="search" placeholder=" Поиск..">

<a href="#openmyprofile" id="link1"><img src="'.$img.'" class="myphoto" width=50></a>

<div class="menux">
<div class="xmm"><a href=" id'.$myid.' " class="xm">Профиль</a></div>
<div class="xmm"><a href="#" class="xm">Live</a></div>
<div class="xmm"><a href="settings.php" class="xm">Настройки</a></div>
<div class="xmm"><a href="?exit" class="xm">Выйти</a></div>
</div>

<div class="mini_info">
<div class="myname">'.$fname.' '.$lname.'</div>
<div class="mybalance">DCoins: 
<a href="#buy" style="color: white;"><b>'.$dcoins.'</b></a>
Монеты: 
<u><b>'.$coins.'</b></u>
</div>

</div>

</div></div>';
?>