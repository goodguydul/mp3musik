<?php
include 'vfunc.php';
$title = 'Top 100 Songs'; 
$description =''.$sitename.' Free Download Music And Video - '.$sitename.', disini anda dapat mencari Lagu, Video, Wallpaper, dan Lirik Lagu tanpa Batas. dengan tampilan yang nyaman dan simple, anda dapat menjelajah secara cepat. coba sekarang!';
$keywords ='download mp3, download lagu , gratis, mp3 gratis, 3gp, download full album';
 
include'head.php';
echo '<div class="list3">
<div id="wasu">
<div class="content-wrapper">
<h2 class="bmenu1" align="center"> Billboard Hot 100 Chart </h2>';

$grab = strstr(ngegrab('https://www.apple.com/itunes/charts/songs/'),'class="section chart-grid');
$gra = str_replace('/autopush','https://www.apple.com/autopush/',$grab);
$tfkid = explode('</strong>',$gra);
for($i=1; $i<=100; $i++){
$file = cut($tfkid[$i],'l=en">','</a>');
$artis = cut($tfkid[$i],'&amp;l=en">','</a></h4>');
$imgz = cut($tfkid[$i],'src="','"');
$img = explode('">',$file); 
$img = str_replace('width="100" height="100"','width="46" height="46"',$file);
$bajingan = explode('">',$file);
$judul = cut($bajingan[0].'">','alt="','">');
$link=$artis.'-'.trim($judul);
$link=str_replace(' ', '-', $link);
$link=preg_replace("![^a-z0-9]+!i", "-", $link); 
$link=strtolower($link);
if(!empty($img[0])){
echo '<div class="list2"><table width="100%"><tbody><tr>
<td style="padding-left:5px;" valign="middle"><h3>» <a href="/lagu/'.$link.'.html" title="'.$artis.' - '.$judul.'">'.$artis.' - '.$judul.'</a></h3><a href="/lagu/'.$link.'.html" title="'.$artis.' - '.$judul.'"><b class="red2">Music</b></a> | 
<a href="/video/'.$link.'.html" title="'.$artis.' - '.$judul.'"><b class="red2">Video</b></a> </td></tr></tbody></table></div>
';
}}
echo'<div class="page_item"><a href="/lagu"> Next More.. </a></div></div>';
function cut($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}return '';}}
 
include 'foot.php';

?>