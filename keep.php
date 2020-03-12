<?php
include 'include/config.php';
error_reporting(0);
function maz($url)
{
	$btext = rand(0,100000);
	$ua = 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.2 19.42.55/19.892; U; en) Presto/2.5.25' . $btext;
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_USERAGENT,$ua);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$exec=curl_exec($ch);
	return $exec;
} 
$strem=maz('http://keepvid.com/?url=youtube.com%2Fwatch%3Fv%3D'.$_GET['v'].'');
$amb=potong($strem,'info2">','<a href="http://keepvid.com/?url=');
$xstrem = explode('<a',$amb);
$total =count($xstrem);
$versi ='1';
$memi =$total-$versi;
if(!empty($amb)){

	for($i=1; $i<=$memi; $i++){
		$linkdl = potong($xstrem[$i],'href="','"');
		$linkdl =str_replace('title=','title=www.'.$sitename.'_',$linkdl);
		$all = potong($xstrem[$i],'src="','</a>');
		$name = potong($all,'"/>','</');
		$size = potong($all,'px;">','</');
		echo '<a href="'.$linkdl.'"><span class="list-group-item">Download '.$name.' ('.$size.')</span></a><br>';
	}
}
function potong($content,$start,$end){
	if($content && $start && $end) {
		$r = explode($start, $content);
		if (isset($r[1])){
			$r = explode($end, $r[1]);
			return $r[0];
		}	
		return '';
	}
}
$id=$_GET['v'];

?>