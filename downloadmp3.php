<?php
include 'include/config.php';
include 'include/function.php';

if($_REQUEST['v']){
$content = get_contents('https://www.youtube.com/watch?v='.$_REQUEST['v'].'');
$cut = extstr3($content, '<div id="watch-queue-loading-template">', '<div id="watch7-sidebar" class="watch-sidebar">');
$name = extstr3($cut, '<meta itemprop="name" content="', '"');
$imgz = 'https://i.ytimg.com/vi/'.$_REQUEST['v'].'/mqdefault.jpg';
$des = extstr3($cut, '<p id="eow-description" class="" >', '</p>');
$channelid = extstr3($cut, '<meta itemprop="channelId" content="', '"');
$channel1 = extstr3($cut, '<span class="yt-thumb-clip">', '<span');
$channel = extstr3($channel1, 'alt="', '"');
$embed = extstr3($cut, '<link itemprop="embedURL" href="', '"');
$viewCount = extstr3($cut, '<div class="watch-view-count">', ' views</div>');
$durasi = extstr3($cut, '<meta itemprop="duration" content="', '"');
$duration = str_replace('PT', '', $durasi);
$duration = str_replace('H', ' jam ', $duration);
$duration = str_replace('M', ' mnt ', $duration);
$duration = str_replace('S', ' dtk', $duration);
$tgl = extstr3($cut, '<meta itemprop="datePublished" content="', '"');
$date = dateyt($tgl);
$date = str_replace('January', 'Januari', $date);
$date = str_replace('February', 'Februari', $date);
$date = str_replace('March', 'Maret', $date);
$date = str_replace('May', 'Mei', $date);
$date = str_replace('June', 'Juni', $date);
$date = str_replace('July', 'Juli', $date);
$date = str_replace('August', 'Agustus',$date);
$date = str_replace('October', 'Oktober', $date);
$date = str_replace('Nopember', 'November', $date);
$date = str_replace('December', 'Desember', $date);
$source_id = $_REQUEST['v'];
$title='Download MP3 '.ucwords($name).' - '.$sitename;
$filesizee= convertToReadableSize(remotefileSize("http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=".$_REQUEST[v]));
$keywords ='download mp3, '.$name.', gratis, mp3 gratis, download video, video gratis, video '.$name.', 3gp '.$name.', download full album';
include 'header.php';
include 'searchview.php';
?>
	<section id="download" class="section download clearfix">
	    <div class="container">
	      <h1 class="title" style="color: black"><a href="<?php echo $_SERVER['REQUEST_URI']?>"><?php echo $name ;?></a></h1>

	      	<div class="main clearfix">
		        <div class="thumb">
		        	<img src="<?php echo $imgz ;?>" alt="<?php echo $name;?>">
		        </div>

		        <div class="detail">
		          	<p><span>Title: </span><strong><?php echo $name ;?></strong></p>
		          	<p><span>File Name: </span> <strong><?php echo $sitename.' - '.$name ;?>.mp3</strong></p>
		          	<p><span>Duration: </span> <strong><?php echo $duration ;?></strong></p>
		          	<p><span>Size: </span> <strong><?php echo $filesizee ;?></strong></p>
		          	<div class="links clearfix" style="padding-bottom: 20px;padding-top: 20px;">
			            <span><a href="http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=<?php echo $_REQUEST[v]?>&title=<?php echo $sitename.' - '.$name?>" target="_blank" class="button" rel="nofollow">Download Now</a>
			            <a href="#" id="play" class="button" onclick="toggler('player');"> Play </a></span>
			            <a class="mirror" href="#" rel="nofollow">Alternative Link</a>
		          	</div>
		          	<audio controls id="player" class='hidden'> 
						<source src="http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=<?php echo $_REQUEST[v]?>" type="audio/mpeg"> 
							Your browser does not support the audio. 
					</audio>
					<br>
					<p style="font-size: 10px"><b>Tags</b> : Unduh Lagu <?php echo $name?> , Cari Lagu , StafaBand, 4share, bursamp3, wapkalagu, sharelagu, savelagu, mp3.li, azlyrics, mp3.zing.vn, Spotify, vimeo, waptrick, itunes, ed sheeran, shape of you, ed sheeran shape of you, im in love with the shape of you, ed sheeran shape of you official lyric video, castle on the hill, ed sheeran castle on the hill, shape, of, you, official, acoustic, live, cover, edsheeran, bars and melody, bars and melody cover, bgt, britains got talent, new single, bam, leondre, leondre devries, charlie lenehan, bars and melody - shape of you, acoustic cover, cover version, 143, ed sheeran cover, guitar cover, cover shape of you, mercy, </b></p>
		        </div>
	      	</div>
	    </div>
  	</section>
  	<?php include 'related.php' ;?>
  	<?php include 'recent.php' ;?>
  	<?php include 'footer.php' ;}?>
  	<script type="text/javascript">
		function toggler(divId) {
			$("#" + divId).toggle();
		}  		
  	</script>
</body>
	
</html>