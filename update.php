$grab = strstr(ngegrab('https://www.apple.com/itunes/charts/songs/'),'class="section chart-grid');
	$gra = str_replace('/autopush','https://www.apple.com/autopush/',$grab);
	$tfkid = explode('</strong>',$gra);
	for($i=1; $i<=10; $i++){
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
			echo '
			<div class="list2">
				<table width="100%">
					<tbody>
						<tr>
							<td width="100px" valign="middle" align="center">
								'.$img.'
							</td>
							<td style="padding-left:5px;" valign="middle">
								<h3>
									<a href="/mp3musik.id/lagu/'.$link.'.html" title="">'.$artis.' - '.$judul.'</a>
								</h3> 
								<a href="/mp3musik.id/lagu/'.$artis.'.html" title="">'.$artis.'</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			';
		}
	}
	echo'</div>';
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