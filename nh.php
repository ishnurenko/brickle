<?php
echo'<div class="head" style="margin-top:-20px;"><div class="logo"><a href="/" style="color: white;text-decoration: none;">Brickle</a></div>
<div class="nav">
<input type="text" class="search" placeholder=" Поиск..">
<a href="'. $vk->getAuthUrl() . '"class="log">Войти через VK</a>
</div>';
?>