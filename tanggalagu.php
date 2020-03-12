<?php
function ngepet($url)
{
$ua="Nokia6020/2.0 (04.90) Profile/MIDP-2.0 Cofiguration/CLDC-1.1";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_USERAGENT,$ua);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$exec=curl_exec($ch);
return $exec;
}

$title='Tangga Lagu Indonesia';

include'head.php';


echo '<div class="list3">
<div id="wasu">
<div class="content-wrapper">
<h2 class="bmenu1" align="left"><span xmlns:v="http://rdf.data-vocabulary.org/#">
<span typeof="v:Breadcrumb"> <span class="breadcrumb_last" property="v:title">Home</span></span>
 » <span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">Tangga Lagu Indonesia</span></span></span></h2>';

$tanggalagu = strstr(ngepet('http://gudanglagu.co/tangga-lagu/'),'<h1>tangga-lagu</h1>');

$list = explode('<a class="media-left tangga_img" href="http://gudanglagu.co/',$tanggalagu);
if(!empty($tanggalagu)){
for($i=1; $i<=100; $i++){
$id = copet($list[$i],'/vi/','/');
if(!empty($id)){
$img ='http://img.youtube.com/vi/'.$id.'/default.jpg';
}else{
$img ='http://t1.gstatic.com/images?q=tbn:ANd9GcRIl6f_zP_Y4jGdOK5AM8cLwSNr9XtKveXa8t4mgOIwre_YNQ91L7lATg';
}
$na = copet($list[$i],'/artis/','</h3>');
$name = copet($na,'>','</');
$title = copet($list[$i],'ini">','</a>');
$link = ''.strtolower($name).'-'.strtolower($title).'';
$link = str_replace(' ','-',$link);   

echo'<div class="list2"><table width="100%"><tbody><tr>
<td style="padding-left:5px;" valign="middle"><h3>» <a href="/mp3musik.id/lagu/'.$link.'" title="'.$name.' - '.$title.'">'.$name.' - '.$title.'</a></h3><a href="/lagu/'.$link.'.html" title="'.$name.' - '.$title.'"><b class="red2">Music</b></a> | 
<a href="/mp3musik.id/video/'.$link.'.html" title="'.$name.' - '.$title.'"><b class="red2">Video</b></a> </td></tr></tbody></table></div>
';
}
}
function copet($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}return '';}}
include'foot.php';
?>