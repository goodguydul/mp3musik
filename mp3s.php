<?php include 'include/config.php' ?>
<?php include 'include/function.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$q = $_REQUEST['q'];
$cd          = preg_replace("/[^A-Za-z0-9[:space:]]/","$1",$q);
$cd          = str_replace('','', $cd);
$remove = "-";
$masbro = str_replace($remove, " ", ucwords($_REQUEST['q']));
$qe=$q;
$qe=str_replace("+"," ", $qe);
$qe=str_replace("-"," ", $qe);
$qe=str_replace("_"," ", $qe);

if($_REQUEST['q'])
{
  $q = $_REQUEST['q'];
} 
else 
{
  $a = array(''.$tgl.'');
  $b = count($a)-1;
  $q = $a[rand(0,$b)];
}
  $qu=$q;
  $qu=str_replace(" ","+", $qu);
  $qu=str_replace("-","+", $qu);
  $qu=str_replace("_","+", $qu);
  $qu=preg_replace("![^a-z0-9]+!i", "+", $qu); 
if(!empty($_REQUEST['page'])){
  $page = 'sp='.$_REQUEST['page'].'&';
} else {
  $page = 'sp=EgIQAQ%253D%253D&';
}

$title ='Download MP3 '.ucwords($masbro).' - '.$sitename;
$description ='Gratis Video Search Engine - Cari dan download video yang kamu suka di MP3Musik.id dan bagikan ke temanmu.';
$keywords ='download official-video mp3, download lagu , gratis, mp3 gratis, 3gp official-video , download full album official-video';
$tgl = gmdate("d M Y", time()+3600*7);
?>
<?php include 'header.php' ?>
<?php include 'searchview.php' ?>

  <section id="search-result" class="search-result section clearfix">
    <div class="container">
      <header>
        <h1 class="title"><?php echo ucwords($masbro) ?></h1>

        <h3 class="description">
          Free download <?php echo ucwords($masbro) ?> mp3 for free
        </h3>
      </header>
      <div class="items clearfix">
<?php 
$content = get_contents('https://www.youtube.com/results?'.$page.'q='.$_REQUEST['q'].'');
$itemcount = count(explode('<li><div class="yt-lockup', $content)) - 1;
$content = get_contents('https://www.youtube.com/results?'.$page.'q='.$_REQUEST['q'].'');
$cut = extstr3($content, '<div class="branded-page-box search-pager  spf-link ">', '</div>');
$pagecounts = count(explode('/results?sp=', $cut)) - 1;
if($itemcount > 0){
  $item = explode('<li><div class="yt-lockup', $content);
  for($i = 1; $i <= $itemcount; $i++){
  $vid = extstr3($item[$i], '="https://i.ytimg.com/vi/', '/hqdefault.jpg');
  $imgz = 'https://i.ytimg.com/vi/'.$vid.'/mqdefault.jpg';
  $title1 = extstr3($item[$i], '<h3 class="yt-lockup-title ">', '<span class="accessible-description"');
  $title = extstr3($title1, 'dir="ltr">', '</a>');
  $duration = extstr3($item[$i], '<span class="video-time" aria-hidden="true">', '</span>');
  $views1 = extstr3($item[$i], '<ul class="yt-lockup-meta-info">', '</ul>');
  $views = extstr3($views1, '</li><li>', ' views</li>');
  $permalink = ''.$vid.'/'.trim(substr(strtourl($title), 0, 40), '-').'';
  $filesize = filesize('http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v='.$vid.'&title='.$sitename.' - '.$name.'');
  $vidzz = extstr3($item[$i+1], '="https://i.ytimg.com/vi/', '/hqdefault.jpg');
  $imgzz = 'https://i.ytimg.com/vi/'.$vidzz.'/mqdefault.jpg';
  $title1zz = extstr3($item[$i+1], '<h3 class="yt-lockup-title ">', '<span class="accessible-description"');
  $titlezz = extstr3($title1zz, 'dir="ltr">', '</a>');
  $durationzz = extstr3($item[$i+1], '<span class="video-time" aria-hidden="true">', '</span>');
  $views1zz = extstr3($item[$i+1], '<ul class="yt-lockup-meta-info">', '</ul>');
  $viewszz = extstr3($views1zz, '</li><li>', ' views</li>');
  // $filesizeee= convertToReadableSize(remotefileSize("http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=".$vid));
  // $filesizeeee= convertToReadableSize(remotefileSize("http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v=".$vidzz));
  $permalink = ''.$vidzz.'/'.trim(substr(strtourl($titlezz), 0, 40), '-').'';
  if($i % 2 == 0){
    $floatz ="right";
  }else{
    $floatz="left";
  }
  echo '
          <div class="clearfix" >
            <div class="item item-'.$vid.'" id="iteem-'.$vid.'">
              <div class="thumb">
                <img src="'.$imgz.'" alt="'.$title.'">
              </div>

              <div class="detail" style="padding-right: 20px;">
                <h2>'.$title.'</h2>

                <p>
                  <span>Duration  : '.$duration.'</span>
                  <span>Views : '.$views.'</span>
                </p>

                <div class="buttons clearfix">
                 <!-- <a href="#a" id="play" class="button" onclick="toggler(\'player-'.$vid.'\')"  title="'.$title.'"> Play </a>-->
                  <a href="'.$urls.'/video/download/'.$vid.'.html" title="'.$title.'">Video</a>
                  <a href="'.$urls.'/lagu/mp3/'.$vid.'.html" title="'.$title.'">Download</a>
                  <a href="'.$kodeiklanbtndl.'" title="'.$title.'" target="_blank">Download Fast</a>
                </div>
                <div class="player clearfix" style="padding-top:10px">
                  <audio controls id="player-'.$vid.'" class="hidden" style="width: 100%;" > 
                    <source src="http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v='.$vid.'" type="audio/mpeg"> 
                      Your browser does not support the audio. 
                  </audio>
                </div>
              </div>
            </div>
            <div class="item item-'.$vidzz.'" id="iteem-'.$vidzz.'">
              <div class="thumb">
                <img src="'.$imgzz.'" alt="'.$titlezz.'">
              </div>

              <div class="detail" style="padding-right: 20px;">
                <h2>'.$titlezz.'</h2>

                <p>
                  <span>Duration  : '.$durationzz.'</span>
                  <span>Views : '.$viewszz.'</span>
                </p>

                <div class="buttons clearfix">
                  <!-- <a href="#a" id="play" class="button" onclick="toggler(\'player-'.$vidzz.'\')"  title="'.$titlezz.'"> Play </a>-->
                  <a href="'.$urls.'/video/download/'.$vidzz.'.html" title="'.$titlezz.'">Video</a>                 
                  <a href="'.$urls.'/lagu/mp3/'.$vidzz.'.html" title="'.$titlezz.'">Download</a>
                  <a href="'.$kodeiklanbtndl.'" title="'.$title.'" target="_blank">Download Fast</a>
                </div>
                <div class="player clearfix" style="padding-top:10px">
                    <audio controls id="player-'.$vidzz.'" class="hidden" style="width: 100%;"> 
                      <source src="http://www.youtubeinmp3.com/fetch/?video=http://www.youtube.com/watch?v='.$vidzz.'" type="audio/mpeg"> 
                        Your browser does not support the audio. 
                    </audio>
                </div>
              </div>
            </div>
          </div>';
          $i=$i+1;
  }
}
?>
      </div>
<?php 
echo '<div align="center">';
if($pagecounts > 0){
  $pagei = explode('/results?', $cut);
  echo '<div class="more-results clearfix">';
  for($x = 1; $x <= $pagecounts; $x++){
    $sp = extstr3($pagei[$x], 'sp=', '&');
    $pagenumb = extstr3($pagei[$x], '<span class="yt-uix-button-content">', '</span>');
    $pagenom = str_replace('Weiter','Next',$pagenumb);

    echo '
    <a href="'.$urls.'/lagu/'.strtourl($q).'/page/'.$sp.'.html" style="display: inline;"><b class="red2">'.$pagenom.'</b></a>';
    }
}
echo '</div></div>';
if(!empty($_REQUEST['q']) AND empty($_REQUEST['page']))
{
  $user_query=''.$_REQUEST['q'].'';
  write_to_file($user_query);
}
?> 
    </div>
  </section>
  <?php include 'recent.php' ?>
  <?php include 'footer.php' ?>
  <script type="text/javascript">
    function toggler(divId) {
      $("#" + divId).toggle();
      var myAudio = document.getElementById(divId);
      myAudio.paused ? myAudio.play() : myAudio.pause();
      myAudio.play ? myAudio.pause() : myAudio.play();
    }     
  </script>
</body>
</html>