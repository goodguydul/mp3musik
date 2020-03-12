	<div class="column-2 clearfix">
	   	<div class="container">
	   		<section id="popular-music" class="section">
	   			<h3 class="section-title"><span>Popular Western Songs</span></h3>
<?php
	
	for($i=1; $i<=10; $i++){
		$grab = strstr(ngegrab('https://www.apple.com/itunes/charts/songs/'),'class="section chart-grid');
		$gra = str_replace('/autopush','https://www.apple.com/autopush/',$grab);
		$tfkid = explode('</strong>',$gra);
		$file = cut($tfkid[$i],'l=en">','</a>');
		$artis = cut($tfkid[$i],'&amp;l=en">','</a></h4>');
		$artisz = str_replace(' ', '-', $artis);
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
			echo '
					<div class="items clearfix">
						<div class="item clearfix" style="padding-bottom: 20px;">
							<div class="image">
								'.$img.'
							</div>
							<div class="detail" style="padding-right: 85px;">
								<h2>
									<a title="'.$artis.' - '.$judul.'" href="'.$urls.'/lagu/'.$link.'.html">'.$artis.' - '.$judul.'</a>
								</h2>
								<h3><a title="'.$artis.'" href="'.$urls.'/lagu/'.$artisz.'.html">'.$artis.'</a></h3>
								<a class="button" href="'.$urls.'/lagu/'.$link.'.html" style="display: inline;">Download</a>
							</div>
						</div>
					</div>
			';
		}
	}
	function cut($content,$start,$end){
		if($content && $start && $end) {
			$r = explode($start, $content);
			if (isset($r[1])){
				$r = explode($end, $r[1]);
				return $r[0];
			}
			return '';
		}
	}
?>
			</section>
			<section id="popular-artists" class="section">
				<h3 class="section-title"><span>Popular Indonesian Songs</span></h3>
<?php 
		$tanggalagu = strstr(ngegrab('http://downloadlagu.link/tangga-lagu/'),'<h1>tangga-lagu</h1>');
		$lists = explode('<a class="media-left tangga_img" href="http://downloadlagu.link/',$tanggalagu);
		if(!empty($tanggalagu)){
			for($i=1; $i<=10; $i++){
				$ids = cut($lists[$i],'/vi/','/');
				if(!empty($ids)){
					$imgs ='http://img.youtube.com/vi/'.$ids.'/default.jpg';
				}else{
					$imgs ='http://t1.gstatic.com/images?q=tbn:ANd9GcRIl6f_zP_Y4jGdOK5AM8cLwSNr9XtKveXa8t4mgOIwre_YNQ91L7lATg';
				}
				$nas = cut($lists[$i],'/artis/','</h3>');
				$names = cut($nas,'>','</');
				$titles = cut($lists[$i],'ini">','</a>');
				$links = ''.strtolower($names).'-'.strtolower($titles).'';
				$links = str_replace(' ','-',$links);
				$namesz = str_replace(' ','-',$names);
				echo '
						<div class="items clearfix">
							<div class="item clearfix" style="padding-bottom: 20px;">
								<div class="image">
									<img src="'.$imgs.'">
								</div>
								<div class="detail" style="padding-right: 81px;">
									<h2>
										<a title="'.$names.' - '.$titles.'" href="'.$urls.'/lagu/'.$links.'.html">'.$names.' - '.$titles.'</a>
									</h2>
									<h3>
										<a title="'.$names.'" href="'.$urls.'/lagu/'.$namesz.'.html">'.$names.'</a>
									</h3>
										<a class="button" href="'.$urls.'/lagu/'.$links.'.html" style="display: inline;">Download</a>
								</div>
							</div>					
						</div>';
			}
		}
?>				
			</section>
	    </div>
	</div>