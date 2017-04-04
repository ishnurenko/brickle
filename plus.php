<?php
session_start();

$jid = $_GET['id'];
  
$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );

$mysql = mysql_query("SELECT * FROM users WHERE id='$myid' ");
$cplus = mysql_fetch_assoc( $mysql );
$coins = $cplus['coins'];
$d_coins = $cplus['d_coins'];

$mysql2 = mysql_query("SELECT * FROM users WHERE id='$jid' ");
$plus = mysql_fetch_assoc( $mysql2 );
$rate = $plus['rating'];

if($coins or $d_coins >= 0){
if($myid == $jid){
}else{

$coins = $coins - 1;
$rate == $rate + 1;

mysql_query("SET NAMES 'utf-8'");
	mysql_query("UPDATE users WHERE id = '$jid' (rating) VALUES ('$rate')");

mysql_query("SET NAMES 'utf-8'");
	mysql_query("UPDATE users WHERE id = '$myid' (coins,d_coins) VALUES ('$coins','$d_coins')");

}
}

?>