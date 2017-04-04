
<?php
session_start();

$jid = $_GET['id'];
  
$hhq = "page.php?id=". $jid;

$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );
if( isset( $_POST['submit'] ) ){


	$text = nl2br(strip_tags( $_POST['text']));
$who_add = $fnameq.' '.$lnameq;
$img = $imgq; 
if($text == "" or $_SESSION == "" or $fnameq == "") {
}else{
    mysql_query("SET NAMES 'utf-8'");
	mysql_query("INSERT INTO comments (who_add,c_username,c_id,c_img,text,who_id) VALUES ('$who_add','$useridq','$jid','$imgq','$text','$myid')");

}
}
mysql_query("SET NAMES 'utf-8'");
$mysql = mysql_query("SELECT c.*, u.img FROM comments AS c LEFT JOIN users as u ON u.id=c.who_id WHERE c_id='$jid' ");

while( $comment = mysql_fetch_assoc( $mysql ) ){
$count++;	
$html = '
<div class="ucom">
<a href="id'.$comment["who_id"].'">
<img src=" '.$comment["img"].' " class="cph" style="height:60px"></a>
<div class="comname"><b><a href="id'.$comment['who_id'].'" style="color: black; text-decoration: none;"> '.$comment["who_add"].'</b></a></div><br>
<div class="commnick">@'.$comment["c_username"].'</div><br>
<div class="commentx">'.$comment["text"].'</div>
</div>' . $html;
}
?>


<form action=" <?php echo $hhq; ?> " method="POST">
<div class="asd">
<textarea class="txtcomm" name ="text" placeholder="Ваш комментарий.."></textarea>
<div class="qq" style="width: 490px;margin-bottom: 36px;">
<input name="submit" type="submit" class="addc" value="Добавить комментарий" style="border:none;"/>
</div>
</div>
<div class="allc">
</form> 

<style>
.asd{margin-top:-35px;
height: 1px;
}
</style>
<?
echo '<div id="comments">';
echo $html;
echo '</div>';
echo '<script> var ComCount = ' . $count . '; 
var ComIndex = 0; </script>';
?>
<style> #openTenComments{ display:none;}</style>

<script type="text/javascript"> 
function openTenCom(){
if( ComCount > 10 )
{
	document.getElementById('openTenComments').style.display = 'block';
}
if( ComIndex < ComCount ){
var comDo = ComIndex + 10;
if( comDo > ComCount )
	comDo = ComCount - ComIndex;
var i = 0;
while( i < comDo ){
	document.getElementById('comments').children[ComIndex+i].style.display = 'block';
	i++;
}
ComIndex += comDo;
if( ComIndex >= ComCount )
document.getElementById('openTenComments').style.display = 'none';
}else{
document.getElementById('openTenComments').style.display = 'none';
}
};
</script>

