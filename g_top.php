<?php
session_start();
$db = mysql_connect ("localhost","v63345p9_data","dengo332");
mysql_select_db ("v63345p9_data",$db);

mysql_query("SET NAMES 'utf-8'");
$mysql = mysql_query("SELECT * FROM users WHERE gender=1 ORDER BY rating DESC LIMIT 10");
while( $top = mysql_fetch_assoc( $mysql ) ){

$count++;	
$g_html .= '
<a href="/id'.$top["id"].'">
<div class="user">
<img src="'.$top["img"].'" class="photo" width=164 height=164>
<div class="plus"><a href="#plus" class="plusbutton">+</a></div>
<div class="pluses">'.$top["rating"].'</div>
<div class="nick">@'.$top["user_id"].'</div>
</div></a>
';
}
?>


<?
echo $g_html;
?>