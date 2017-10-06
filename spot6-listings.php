<?php require '/home/spot6admin/public/spot6.fm/public/elgg/upgrade/elgg-1.8/mod/elastic/views/default/page/dbs/spot6db.php';

function album_social_share($guid){
	$album = get_entity($guid);
	$user_guid = elgg_get_logged_in_user_entity()->guid;
	if ($album){
		$iconPath = elgg_get_site_url() . 'mod/musics/graphics/sharing/';
		$url = $album->getURL();
		?>
			 <p style="background:url(<?php echo $iconPath?>facebook.png) no-repeat;padding:0px 0 5px 25px;min-height:15px;margin:5px 0;"> <a  href="http://www.facebook.com/share.php?u=<?php echo $url;?>" target="_blank">
			  <?php echo elgg_echo('music:facebook');?>
			  </a></p>

			 <p style="background:url(<?php echo $iconPath?>twitter.png) no-repeat;padding:0px 0 5px 25px;min-height:15px;margin: 5px 0;"> <a  href="http://twitter.com/home/?status=<?php echo $url;?>" target="_blank">
				<?php echo elgg_echo('music:twitter');?>
			  </a></p>

			  <p style="background:url(<?php echo $iconPath?>linkedin.png) no-repeat;padding:0px 0 5px 25px;min-height:15px;margin: 5px 0;"><a  href="http://www.linkedin.com/shareArticle?url=<?php echo $url;?>" target="_blank">
				<?php echo elgg_echo('music:linkedin');?>
			  </a></p>
			  
			  <p style="background:url(<?php echo $iconPath?>fav.png) no-repeat;padding:0px 0 5px 25px;min-height:15px;margin: 5px 0;">
			  <?php 
			  if (check_entity_relationship($guid, 'favourite_album', $user_guid)) {
				echo elgg_view('output/url', array('href' => "{$vars['url']}action/musics/favourite?guid={$guid}&todo=remove", 'text' => elgg_echo('music:removefav'), 'is_action' => TRUE)); 
			  } else {
				echo elgg_view('output/url', array('href' => "{$vars['url']}action/musics/favourite?guid={$guid}&todo=add", 'text' => elgg_echo('music:addtofav'), 'is_action' => TRUE)); 
			  }
			  ?>
			  </a></p>
			  			
		<?php
	}
}

function show_musicalbum_embed($guid){
	$album = get_entity($guid);
	if ($album){
	?>
	<p><input name="embed" type="text" onclick="this.select()" value="<embed src='<?php echo elgg_get_site_url(); ?>mod/musics/audio-player/player.swf' 	quality='high' width='260' height='24'	name='mp3player' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' flashvars='width=260&height=24&autostart=no&bg=0xFFFFFF&left=0xFFFFFF&soundFile=<?php echo get_music_tracks($guid); ?>'></embed>" readonly="readonly" /></p>
	<?php
	}
}	

function show_album_extras($guid,$showEdit = false,$width,$height){
	$album = get_entity($guid);
	if (!$height){
		$height = elgg_get_plugin_setting('player_height', 'musics');
	}
	if (!$width){
		$width = elgg_get_plugin_setting('player_width', 'musics');
	}
	if ($album){
	?>
	<div align="left">
		<div id="trackListings">
			<div style="float: right">
				<object type="application/x-shockwave-flash" data="<?php echo elgg_get_site_url(); ?>mod/musics/audio-player/player_mp3_multi.swf" width="<?php echo $width;?>" height="<?php echo $height;?>">
					<param name="movie" value="<?php echo elgg_get_site_url(); ?>mod/musics/audio-player/player_mp3_multi.swf" />
					<param name="bgcolor" value="#ffffff" />
					<param name="FlashVars" value="mp3=<?php echo get_music_tracks($guid); ?>&amp;title=<?php echo get_music_tracks_titles($guid); ?>&amp;width=<?php echo $width;?>&amp;height=<?php echo $height;?>&amp;volume=75&amp;autoplay=0&amp;loop=1&amp;shuffle=1&amp;showvolume=1&amp;showinfo=0&amp;sliderwidth=40;playlistcolor=1c325f" />
				</object>
			</div>
			<p>Track Listings: <a id="thisIsATest"></a></p>
		</div>
		<script type="text/javascript">
			var trackPath = <?php echo stripslashes(json_encode(get_music_tracks_titles($guid))); ?>;
			var urlPath = <?php echo stripslashes(json_encode(get_music_tracks($guid))); ?>;
			var separator = "|";
			var arrayTrackPath = trackPath.split(separator);
			var arrayURLPath = urlPath.split(separator);
			var playlistStuff = new Array();
			var mp3Path = <?php echo stripslashes(json_encode($t_mp3Path)); ?>;
			console.log(mp3Path);

			for (var i=0; i < arrayTrackPath.length; i++) {
				var j = i + 1;
				//var match = mp3Path.lastIndexOf(arrayURLPath[i]);
				if ( arrayTrackPath[i] != '' && j <= 4 ) {
					document.getElementById('trackListings').innerHTML += j + '. <a id="albumTrack' + j + '" href="javascript:;" class="no-ajaxy">' + arrayTrackPath[i] + '</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="no-ajaxy" href="' + arrayURLPath[i] + '">Download</a><br />';
				}
				else if ( arrayTrackPath[i] != '' && j > 4 ) {
					document.getElementById('trackListings').innerHTML += j + '. <a id="albumTrack' + j + '" href="javascript:;" class="no-ajaxy">' + arrayTrackPath[i] + '</a><br />';
				}

				$("#albumTrack" + j).live('click', function() {
					$("#myPlayButton").replaceWith(pauseStuff);
				});
			}
			document.getElementById('trackListings').innerHTML += '<br /><br /><br /><br />';

		</script>
	</div>
	<?php
	if ($showEdit && $album->canEdit()){
		echo elgg_view("musics/add_tracks",array('parent' => $album));
		}
	}
}
?>
