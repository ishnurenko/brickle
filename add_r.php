<?php

session_start();
$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );
if( $connect ){
$r_img = "img/sys.png";
$srate = "Ваш стартовый рейтинг: ".$rate;
$insert2 = mysql_query("INSERT INTO rating (r_who,r_to,r_text,r_img) VALUES ('SYSTEM', $myid, '$srate', '$r_img') ");

var_dump($insert2);
die();

if( $insert2 == true ){
			$rl = mysql_query("SELECT * FROM rating WHERE r_to='$myid'");
			$m = mysql_fetch_array( $rl );
}
}

?>