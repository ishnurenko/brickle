<?php

session_start();
		
if( isset( $_GET['exit'] ) ){
	session_destroy();
	header("Location: /");
}
class VK{
	private $client_id, $client_secret, $redirect_uri, $v, $state, $scope, $access_token = '', $user_id = 0, $expires_in = 0;
	public function __construct( array $config ){
		$this->client_id = $config['client_id'];
		$this->client_secret = $config['client_secret'];
		$this->redirect_uri = $config['redirect_uri'];
		$this->v = ( $config['v'] ) ? $config['v'] : '5';
		$this->state = ( $config['state'] ) ? $config['state'] : 'vk';
		$this->scope = ( $config['scope'] ) ? $config['scope'] : 'notify';
		if( $_SESSION['access_token'] && $_SESSION['user_id'] && $_SESSION['expires_in'] ){
			$this->access_token = $_SESSION['access_token'];
			$this->user_id = $_SESSION['user_id'];
			$this->expires_in = $_SESSION['expires_in'];
		}
	}
	public function getAuthUrl(){
		return 'https://oauth.vk.com/authorize?client_id='. $this->client_id . '&display=page&redirect_uri='. $this->redirect_uri . '&scope=' . $this->scope . '&response_type=code&v='. $this->v;
	}
	public function Auth(){
		$url =  'https://oauth.vk.com/access_token?client_id='. $this->client_id . '&client_secret='. $this->client_secret . '&redirect_uri=' . $this->redirect_uri . '&code=' . $_GET['code'];
		$c = curl_init( $url );
		curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1);
		$get = curl_exec( $c );
		curl_close( $c );
		if( $get ){
			$json = json_decode( $get );
			if( $json->access_token ){
				$_SESSION['access_token'] = $json->access_token;
				$_SESSION['user_id'] = $json->user_id;
				$_SESSION['expires_in'] = $json->expires_in;
				$_SESSION['vk'] = time();
				unset( $_GET['code'] );
				header("location: /");
			}else
				echo 'Не удалось получить access_token';
		}else
			echo 'Запрос не выполнен';
	}
	public function api( $method, $fields = array() ){
		$fields['access_token'] = $this->access_token;
		$url = 'https://api.vk.com/method/' . $method . "?" . http_build_query( $fields );
		$c = curl_init( $url );
		curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec( $c );
		curl_close( $c );
		if( $res ){
			$json = json_decode( $res );
			return $json;
		}else
			return false;
	}
	public function isAuth(){
		if( $_SESSION['vk'] && $_SESSION['access_token'] ){
			if( time() < $_SESSION['vk'] + $_SESSION['expires_in'] )
				return true;
		}
		return false;
	}
}
$vk = new VK( array(
	'client_id' => '5288789',
	'client_secret' => 'sVgzhZAiU8b2vwyyXvVI',
	'scope' => 'friends,photos',
	'v' => '5.45',
	'state' => 'vkauth',
	'redirect_uri' => 'http://v63345p9.bget.ru/engine/xyz.php'
));
if( $vk->isAuth() ){
	//Если авторизован, то получаем данные о пользователе
	
	$user = $vk->api("users.get", array('user_ids'=>'','fields' => 'photo_id, verified, sex, bdate, city, country, home_town, has_photo, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, lists, domain, has_mobile, contacts, site, education, universities, schools, status, last_seen, followers_count, common_count, occupation, nickname, relatives, relation, personal, connections, exports, wall_comments, activities, interests, music, movies, tv, books, games, about, quotes, can_post, can_see_all_posts, can_see_audio, can_write_private_message, can_send_friend_request, is_favorite, is_hidden_from_feed, timezone, screen_name, maiden_name, crop_photo, is_friend, friend_status, career, military, blacklisted, blacklisted_by_me'));

$_SESSION['first_name'] = $fnameq = $user->response[0]->first_name;
	$lnameq = $user->response[0]->last_name;
	$imgq = $user->response[0]->photo_max;
if($imgq == "") {
$imgq = "img/user.jpg";
}
	$idq = $user->response[0]->uid;
	$verifyq = $user->response[0]->verified;
	$rateq = rand(52,98);
	$coinsq = rand(50,80);
	$bdayq = 2000;
	$dcoinsq = 15;
	$friendq = $user->response[0]->is_friend;
		if($friendq == "1"){
	$dcoinsq = $dcoinsq + 5;
		}
	$useridq = $user->response[0]->screen_name;
	$genderq = $user->response[0]->sex;
	


		echo ' <meta charset="utf-8">';
   
$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );
if( $connect ){
	$r = mysql_query("SELECT * FROM users WHERE vk_id='$idq'");
	$m = mysql_fetch_array( $r );
	if( !$m ){

		$insert =  mysql_query("INSERT INTO users (first_name,last_name,vk_id,user_id,rating,coins,d_coins,img,gender,verify,b_year) VALUES ('$fnameq','$lnameq','$idq','$useridq','$rateq','$coinsq','$dcoinsq','$imgq','$genderq','$verifyq','$bdayq')");

		$rate = $rateq;
		$r_img = "img/sys.png";
		$srate = "Ваш стартовый рейтинг: ".$rate;
		$myid = mysql_insert_id();
		$insert2 = mysql_query("INSERT INTO rating (r_who,r_to,r_text,r_img,r_id) VALUES ('SYSTEM', $myid, '$srate', '$r_img', 13) ");

		if( $insert === true and $insert2 === true ){
			$r = mysql_query("SELECT * FROM users WHERE vk_id='$idq'");
			$m = mysql_fetch_array( $r );


		}else
			echo '<script> alert(" Eror ");</script>';
	}
}


$r = mysql_query("SELECT * FROM users WHERE vk_id='$idq'");
			$m = mysql_fetch_array( $r );

$fname = $m['first_name'];
$id = $idq;
$lname = $m['last_name'];
$myid = $m['id'];
$userid = $m['user_id'];
$rate = $m['rating'];
$coins = $m['coins'];
$dcoins = $m['d_coins'];
$img = $m['img'];
$gender = $m['gender'];
$verify = $m['verify'];
$bday = $m['b_year'];
$mid = "page.php?id=".$myid;

	require "engine/ah.php";
	
	
	//Иначе пытаемся авторизоваться


}else{
	if( !isset( $_GET['code'] ) && !isset( $_GET['state'] ) && !isset( $_SESSION['vk'] ) )
	require "engine/nh.php";
		if( isset( $_GET['code'] ) && !isset( $_SESSION['vk'] ) )
		$vk->Auth();
}
?>