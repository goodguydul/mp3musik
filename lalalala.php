<?php
include 'include/config.php';
include 'include/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $title ?></title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8;" />
  <meta name="viewport" content="width=device-width">
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <meta name="description" content="<?php echo $title .' - '. $description ?>" />
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="geo.placename" content="Indonesia" />
  <meta name="geo.position" content="-7.226868,112.761719" />
  <meta name="geo.region" content="id" />
  <meta name="copyright" content="2016 free video music - " />
  <meta name="spiders" content="all" />
  <meta name="googlebot" content="All, index, follow" />
  <meta name="robots" content="All, index, follow" />
  <meta name="msnbot" content="All, index, follow" />
  <meta content="follow, all" name="robots" />
  <meta content="follow, all" name="seznambot" />
  <meta content="follow, all" name="Slurp" />
  <meta content="follow, all" name="ia_archiver" />
  <meta content="follow, all" name="Baiduspider" />
  <meta content="follow, all" name="BecomeBot" />
  <meta content="follow, all" name="Bingbot" />
  <meta content="follow, all" name="btbot" />
  <meta content="follow, all" name="Dotbot" />
  <meta content="follow, all" name="Yeti" />
  <meta content="follow, all" name="Teoma" />
  <meta content="follow, all" name="Yandex" />
  <meta content="follow, all" name="FAST-WebCrawler" />
  <meta content="follow, all" name="FindLinks" />
  <meta content="follow, all" name="FyberSpider" />
  <meta content="follow, all" name="008" />
  <meta name="generator" content="MP3Musik.id" />
  <meta name="distribution" content="global" />
  <meta name="author" content="Admin" />
  <meta name="google-site-verification" content="<?php echo $gwtcode?>" />
  <link rel="icon" href="<?php echo $urls ?>/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo $urls ?>/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo $urls ?>/include/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header id="header" class="clearfix">
    <div class="container clearfix">
      <nav class="navbar ">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="btn dropdown-toggle navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="glyphicon glyphicon-th-list"></span>                      
            </button>
                <div class="site-info" style="padding-top: 9px;">             
                    <h1 class="name">
                      <a href="<?php echo $urls ?>"><?php echo $sitename ?></a>
                    </h1>
                    <h2 class="tagline"><?php echo ' ' . $motto ?></h2>
                </div>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li >
                <a href="<?php echo $urls ?>">Home</a>
                </li>
                <li id="menu-item-15" class="mp3-genre-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-15">
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Genre <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?php echo $urls ?>/genre/alternative.html">Alternative</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/blues.html">Blues</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/childrens.html">Children's</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/classical.html">Classical</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/country.html">Country</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/dance.html">Dance</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/electronic.html">Electronic</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/hip-hop-rap.html">Hip Hop / Rap</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/jazz.html">Jazz</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/pop.html">Pop</a></li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/r-b-soul.html">R&amp;B / Soul</a>
                    </li>
                    <li>
                      <a href="<?php echo $urls ?>/genre/rock.html">Rock</a>
                    </li>
                  </ul>
                </li>
              <li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12">
                <a href="<?php echo $urls ?>/top-lyrics/">Top Lyrics</a>
              </li>
              <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34">
                <a href="<?php echo $urls ?>/blog/">Blog</a>
              </li>
              <li class="social right" style="margin-left: 22px;margin-top: 6px;">
                  <a class="facebook" rel="nofollow" target="_blank" href="http://facebook.com/#">Facebook</a>
                  <a class="twitter" rel="nofollow" target="_blank" href="http://twitter.com/#">Twitter</a>
                  <a class="google" rel="nofollow" target="_blank" href="http://plus.google.com/#">Google+</a>               
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="right">
        
      </div>
    </div>
  </header>
<body>
</html>
              