<section id="search">
      	<div class="container">
      		<h2>Search free video and mp3</h2>
			<h3>Free your favorite song that you want on <?php echo $sitename?></h3>
         	<form method="get" action="<?php echo $urls ?>/search.php">
      			<input name="q" autocomplete="off" placeholder="Search song, mp3 or artists ..." value="" type="text" required>
      			<input value="Submit" type="submit">
				      <div class="type">
              		<input checked="" name="type" value="srv1" id="search-mp3" type="radio"><label for="search-mp3">Mp3</label>
              		<input name="type" value="srv3" id="search-video" type="radio"><label for="search-video">Video</label>
            	</div>
      		</form>
       	</div>
    </section>