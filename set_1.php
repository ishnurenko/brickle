<?php
session_start();
// echo "<meta charset='utf-8'>";

$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );

$my_age = +date('Y') - $_POST['age'];
$fna = $_POST["f_name"];
$lna = $_POST["l_name"];
$nickname = $_POST["nickname"];
$nna = $_POST["id"];
// $xna = $username;

mysql_query("SET NAMES 'utf-8'");

// `first_name`='$fna',`last_name`='$lna',

$sql = "UPDATE `users` SET `b_year`='$my_age', `user_id`='$nickname' WHERE `id`=$nna";
if($response = mysql_query($sql)) {
	header("Location: /settings.php");
} else {
	header("Refresh:2; url=/settings.php");
	echo 'ERROR!!!'."<br>";
}

?>