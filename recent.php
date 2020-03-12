	<section id="recent-search" class="section clearfix">
        <div class="container">
          	<h3 class="section-title"><span>Recent Search</span></h3>
          	<div class="items clearfix">
                                          


<?php
$div = "|#|";
$dat='recent.txt';

$fp = fopen($dat, 'r');
$count = fgets($fp);
fclose($fp);
$cari = 'q='.$q;
$cari = str_replace('+', '-',$cari);
$cari = str_replace('%20', '-',$cari);
$data = explode($div, $count);
if (in_array($cari, $data)) {
$tulis = implode($div, $data);

}
else {
$data = explode($div, $count);
$tulis =  $data[1].''.$div.''.$data[2].''.$div.''.$data[3].''.$div.''.$data[4].''.$div.''.$data[5].''.$div.''.$data[6].''.$div.''.$data[7].''.$div.''.$data[8].''.$div.''.$data[9].''.$div.''.$data[10].''.$div.''.$data[11].''.$div.''.$data[12].''.$div.''.$data[13].''.$div.''.$data[14].''.$div.''.$data[15].''.$div.''.$data[16].''.$div.''.$data[17].''.$div.''.$data[18].''.$div.''.$data[19].''.$div.''.$data[20].''.$div.''.$data[21].''.$div.''.$data[22].''.$div.''.$data[23].''.$div.''.$data[24].''.$div.''.$data[25].''.$div.''.$data[26].''.$div.''.$data[27].''.$div.''.$data[28].''.$div.''.$data[29].''.$div.''.$data[30].''.$div.''.$data[31].''.$div.''.$data[32].''.$div.''.$data[33].''.$div.''.$data[34].''.$div.''.$data[35].''.$div.''.$data[36].''.$div.''.$data[37].''.$div.''.$data[38].''.$div.''.$data[39].''.$div.''.$data[40].''.$div.''.$data[41].''.$div.''.$data[42].''.$div.''.$data[43].''.$div.''.$data[44].''.$div.''.$data[45].''.$div.''.$data[46].''.$div.''.$data[47].''.$div.''.$data[48].''.$div.''.$data[49].''.$div.''.$data[50].''.$div.''.$data[51].''.$div.''.$data[52].''.$div.''.$data[53].''.$div.''.$data[54].''.$div.''.$data[55].''.$div.''.$data[56].''.$div.''.$data[57].''.$div.''.$data[58].''.$div.''.$data[59].''.$div.''.$data[60].''.$div.''.$data[61].''.$div.''.$data[62].''.$div.''.$data[63].''.$div ;
$tulis .= $cari;

}

if (!empty($q)){
$masuk=fopen($dat, 'w');
fwrite($masuk,$tulis);
fclose($masuk);
}

$div = '|#|';
$search = 'recent.txt';
$fa = fopen($search, 'r');
$b = fgets($fa);
fclose($fa);

$c = explode($div, $b);
foreach(array_reverse($c) as $d){
	$lastsearch = explode('q=',$d);
	$linklast1 = trim($lastsearch[1]);
	$linklast1 = str_replace('+', '-',$linklast1);
	$linklast1 = str_replace('--', '-',$linklast1);
	$linklast1 = str_replace(' ', '-',$linklast1);
	$linklast1 = str_replace('%20', '-',$linklast1);
	$linkz = strtolower($linklast1);
	$linkz = str_replace('%27', '',$linkz);
	$linklast = str_replace('-', ' ', $linklast1);
	$linkl = ucwords(strtolower($linklast));
	echo '<a rel="dofollow" href="'.$urls.'/lagu/'.strip_tags($linkz).'.html" title="'.strip_tags($linklast1).'" alt="'.strip_tags($linkz).'" >'.strip_tags($linkl).'</a> ';
}

?>
            </div>
        </div>
    </section>