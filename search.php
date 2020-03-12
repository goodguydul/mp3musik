<?php include 'include/config.php' ?>
<?php include 'include/function.php' ?>
<?php
if(!empty($_REQUEST['q'])){
	if($_REQUEST['type']=='srv1'){
	$b=$_REQUEST['q'];
	$b = str_replace("%20","-",$b);
	$b = str_replace(" ","-",$b);
	$b = str_replace("+","-",$b);
	$b = str_replace("_","-",$b);
	$b=preg_replace("![^a-z0-9]+!i", "-", $b); 
	$bu = strtolower($b);
	$url=''.$urls.'/lagu/'.$bu.'.html';
	}else if($_REQUEST['type']=='srv3'){
		$bo = $_REQUEST['q'];
		$ba = trim($bo);
		$mx = str_replace(" ","-",$ba);
		$mx = str_replace("+","-",$ba);
		$mx = str_replace("_","-",$ba);
		$mx = str_replace("%20","-",$ba);
		$mx=preg_replace("![^a-z0-9]+!i", "-", $mx); 
		$max = strtolower($mx);
		$url=''.$urls.'/video/'.$max.'.html';
	}else{
		$url='/'; 
	}
}
header('location:'.$url.'');
?>