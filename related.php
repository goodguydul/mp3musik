	<section class="section clearfix">
        <div class="container">
          	<h3 class="section-title">
          		<span>Related Songs</span>
          	</h3>
          	<div class="items clearfix">
          	<ul class="list-group">
<?php
$content_rel = get_contents('https://www.youtube.com/watch?v='.$_REQUEST['v'].'');
$cut_rel = extstr3($content_rel, '<hr class="watch-sidebar-separation-line">', '<div id="watch-more-related" class="hid">');
$relcount = count(explode('<li class="video-list-item related-list-item', $cut_rel)) - 1;
if($relcount > 0){
$related = explode('<li class="video-list-item related-list-item', $cut_rel);
	for($rel = 2; $rel <= $relcount; $rel++){
		$vid_rel = extstr3($related[$rel], '<a href="/watch?v=', '" ');
		$name1_rel = extstr3($related[$rel], '<a href="/watch?v=', '">');
		$name_rel = extstr3($name1_rel, 'title="', '"');
		$duration_rel = extstr3($related[$rel], 'Duration: ', '.');
		$chid_rel = extstr3($related[$rel], '<span class="g-hovercard" data-name="autonav" data-ytid="', '"');
		$chtitle_rel = extstr3($related[$rel], 'data-name="related">', '</span>');
		$viewCount_rel = extstr3($related[$rel], '<span class="stat view-count">', ' ');
		$imgzz = 'https://i.ytimg.com/vi/'.$vid_rel.'/mqdefault.jpg';
		$permalink_rel = $vid_rel.'/'.trim(substr(strtourl($name_rel), 0, 40), '-');
		$svrr = $_SERVER['REQUEST_URI'];
		$svrr = str_replace('video/download', 'lagu/mp3', $svrr);
		$svrr = str_replace($_REQUEST[v], '', $svrr);
		$svrr = str_replace('.html', '', $svrr);
		echo '
		<li class="list-group-item">
			<div class="thumb" style="padding-right: 10px;max-width: 100%;height: auto;width: 150px;display:inline">
		       	<img style="" src="'.$imgzz.'" alt="'.$name_rel.'">
		    </div>
			<div style="display:inline;"><a href="'.$urls.$svrr.$vid_rel.'.html" title="'.$name_rel.'">'.$name_rel.'</a></div>
		</li>
		';

	}
}
?>
			</ul>
			</div>
		</div>
	</section>