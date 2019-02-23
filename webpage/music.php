<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">
		
			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		<div id="listarea">
			<ul id="musiclist">
			<?php 
			foreach(glob("./songs/*.mp3") as $filename){
			?>
			<li class="mp3item"><a href="<?php echo $filename;?>"><?php echo basename($filename);?></a></li>
			<?php }
			foreach(glob("./songs/*.txt") as $playlist){	
			?>
			<li class="playlistitem"><a href="<?php echo $playlist;?>"><?php echo basename($playlist);?></a></li>
			<?php }
			?>
			</ul>
		</div>
		
	</body>
</html>
