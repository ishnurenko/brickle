
<?php
session_start();

echo "<meta charset='utf-8'>";
$jid = $_GET['id'];
  
$db = mysql_connect('localhost', 'v63345p9_data', 'dengo332'); 
$connect = mysql_select_db('v63345p9_data', $db );
$r_who = $fnameq.' '.$lnameq;
$r_img = $imgq; 

mysql_query("SET NAMES 'utf-8'");
$mysql = mysql_query("SELECT r.*, u.img FROM rating AS r LEFT JOIN users as u ON u.id=r.r_id WHERE r_to='$jid' ");

while( $rating = mysql_fetch_assoc( $mysql ) ){

$countx++;	
$xyz = $rating['r_id'];
$xhtml = '
<div class="whoadd">
<a href="/id'.$xyz.' "><img src=" '.$rating["img"].' " class="waphoto" width=52 style="border-radius:50px;"></a>
<font size=4 style="padding-left:5px;"> '.$rating["r_who"].' </font><br>
<font size=3 style="padding-left: 5px;">'.$rating["r_text"].' <br></font>
</div>
' . $xhtml;
}
?>


<?
echo '<div id="rate">';
echo $xhtml;
echo '</div>';
echo '<script> var xComCount = ' . $countx . '; 
var xComIndex = 0; </script>';
?>
