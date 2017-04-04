
<?php
session_start();

$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );

mysql_query("SET NAMES 'utf-8'");

if (isset($_POST['update_photo'])) {
	$photoName = time().'_'. basename($_FILES['img']['name']);
	$id = $_POST['id'];

	$queryUnique = mysql_query("SELECT img FROM `users` WHERE id=$id");
	$userUnique = mysql_fetch_assoc($queryUnique);

	if (move_uploaded_file($_FILES['img']['tmp_name'], '/home/v/v63345p9/v63345p9.bget.ru/public_html/img/users_photo/'.$photoName)) {

		// Если у пользователя фотография не с вк
		if (!preg_match('/vk\.me/', $userUnique['img']))
			unlink('/home/v/v63345p9/v63345p9.bget.ru/public_html'.$userUnique['img']);

	    $fileURL = '/img/users_photo/'.$photoName;

	    mysql_query("UPDATE `users` set `img`='$fileURL' where id=$id ");
	}

	echo "<script>location = '/settings.php';</script>";
}
  
$mysql = mysql_query("SELECT *, ( select COUNT(*) from users where rating >= ( select rating from users where id = $myid ) and gender = ( select gender from users where id = $myid ) ) as position FROM `users` WHERE id=$myid ");
while( $set = mysql_fetch_assoc( $mysql ) ){

	$my_name = $set['first_name'];
	$my_soname = $set['last_name'];
	$username = $set['user_id'];
	$age = date('Y') - $set['b_year'];
	$sex = $set['gender'];
	$vklink = "vk.com/".$username;
	$photo = $set['img'];
	$dc = $set['d_coins'];
	$c = $set['coins'];
	$trate = $set['rating'];
	$g_id = $set['id'];
	$ms = $set['ms'];
	$position = $set['position'];
	$vrf = $set['verify'];
	$vkid = $set['vk_id'];
}


?>

