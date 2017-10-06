<script id="document-script" type="text/javascript">
	
		//<![CDATA[
			jQuery18(document).ready(function() {
				var cssSelector = { jPlayer: "#jquery_jplayer_N", cssSelectorAncestor: "#jp_container_N" };
				//populate the playlist with data from db, initialization then loop
				var playlistB = '[' +
					'{' +
					'title:m_title2[0],' +
					'artist:m_artist[0],' +
					'free:true,' +
					'mp3:m_mp3Path[0],' +
					'poster:m_poster[0]' +
					'},';
				for ( var i = 1; i < m_title2.length - 1; i++ ) {
					playlistB +=
						'{' +
						'title:m_title2[' + i + '],' +
						'artist:m_artist[' + i + '],' +
						'free:true,' +
						'mp3:m_mp3Path[' + i + '],' +
						'poster:m_poster[' + i +']' +
						'},';
				}
				playlistB +=
					'{' +
					'title:m_title2[m_title2.length - 1],' +
					'artist:m_artist[m_title2.length - 1],' +
					'free:true,' +
					'mp3:m_mp3Path[m_title2.length - 1],' +
					'poster:m_poster[m_title2.length - 1]' +
					'}' +
					']';
				var playlist = eval ("(" + playlistB + ")");

				var options = { playlistOptions: { enableRemoveControls: true }, swfPath: "/home/spot6admin/public/spot6.fm/public/elgg/upgrade/elgg-1.8/mod/elastic/views/default/page/js", solution: "html,flash", supplied: "mp3,oga,ogv,m4v", size: { width: "153px", height: "86px" } };
				myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);
				//load's jquery with the playlist data and loops to load all tracks
				for ( var j = 0; j < m_title2.length; j++ ) {
					var playlistAddStuff =
						'{' +
						'title:m_title2[' + j + '],' +
						'artist:m_artist[' + j + '],' +
						'free:true,' +
						'mp3:m_mp3Path[' + j + '],' +
						'poster:m_poster[' + j + ']' +
						'}';
					var playlistAddStuffB = eval ("(" + playlistAddStuff + ")");
					jQuery18("#playlist-add" + j).bind('click', function() {
						myPlaylist.add(playlistAddStuffB);
						return;
					});
				}

				jQuery18("#jplayer_inspector_N").jPlayerInspector({jPlayer:$("#jquery_jplayer_N")});
				//Button Actions
				pauseStuff = "<div id=\"myPauseButton\" style=\"position: absolute; top: 122px; left: 495px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/pause.png\" onmouseover=\"this.src='\/images\/controls\/pauseHover.png'\" onmouseout=\"this.src='\/images\/controls\/pause.png'\" height=\"45\" width=\"45\"><\/a><\/div>";
				playStuff = "<div id=\"myPlayButton\" style=\"position: absolute; top: 122px; left: 495px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/play.png\" onmouseover=\"this.src='\/images\/controls\/playHover.png'\" onmouseout=\"this.src='\/images\/controls\/play.png'\" height=\"45\" width=\"45\"><\/a><\/div>";
				muteStuff = "<div id=\"myMuteButton\" style=\"position: absolute; top: 217px; left: 301px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/mute.png\" onmouseover=\"this.src='\/images\/controls\/muteHover.png'\" onmouseout=\"this.src='\/images\/controls\/mute.png'\" height=\"11\" width=\"14\"><\/a><\/div>";
				volumeStuff = "<div id=\"myVolumeButton\" style=\"position: absolute; top: 217px; left: 301px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volume.png\" onmouseover=\"this.src='\/images\/controls\/volumeHover.png'\" onmouseout=\"this.src='\/images\/controls\/volume.png'\" height=\"11\" width=\"8\"><\/a><\/div>";
				repeatStuff = "<div id=\"myUnRepeatButton\" style=\"position: absolute; top: 205px; left: 603px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/repeatSelected.png\" onmouseover=\"this.src='\/images\/controls\/repeatSelectedHover.png'\" onmouseout=\"this.src='\/images\/controls\/repeatSelected.png'\" height=\"12\" width=\"19\"><\/a><\/div>";
				unrepeatStuff = "<div id=\"myRepeatButton\" style=\"position: absolute; top: 205px; left: 603px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/repeat.png\" onmouseover=\"this.src='\/images\/controls\/repeatHover.png'\" onmouseout=\"this.src='\/images\/controls\/repeat.png'\" height=\"12\" width=\"19\"><\/a><\/div>";
				shuffleStuff = "<div id=\"myUnShuffleButton\" style=\"position: absolute; top: 222px; left: 604px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/shuffleSelected.png\" onmouseover=\"this.src='\/images\/controls\/shuffleSelectedHover.png'\" onmouseout=\"this.src='\/images\/controls\/shuffleSelected.png'\" height=\"13\" width=\"17\"><\/a><\/div>";
				unshuffleStuff = "<div id=\"myShuffleButton\" style=\"position: absolute; top: 222px; left: 604px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/shuffle.png\" onmouseover=\"this.src='\/images\/controls\/shuffleHover.png'\" onmouseout=\"this.src='\/images\/controls\/shuffle.png'\" height=\"13\" width=\"17\"><\/a><\/div>";
				volumeBar0Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar0.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar10Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar10.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar20Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar20.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar30Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar30.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar40Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar40.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar50Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar50.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar60Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar60.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar70Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar70.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar80Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar80.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar90Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar90.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				volumeBar100Stuff = "<div id=\"myVolumeBar\" style=\"position: absolute; top: 219px; left: 320px\"><a href=\"javascript:;\"><img src=\"\/images\/controls\/volumeBar100.png\" height=\"7\" width=\"88\"><\/a><\/div>";
				jQuery18("#myPlayButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("play");
					jQuery18(this).replaceWith(pauseStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myPauseButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("pause");
					jQuery18(this).replaceWith(playStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myStopButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("stop");
					jQuery18("#myPauseButton").replaceWith(playStuff);
				});
				jQuery18("#myPreviousButton").live('click', function() {
					myPlaylist.previous();
					jQuery18("#myPlayButton").replaceWith(pauseStuff);
				});
				jQuery18("#myNextButton").live('click', function() {
					myPlaylist.next();
					jQuery18("#myPlayButton").replaceWith(pauseStuff);
				});
	
				if ( document.body.addEventListener ) {
					document.body.addEventListener('click',myHandler,true);
				} else {
					document.body.attachEvent('onclick',myHandler);//for IE
				}
	
				function myHandler(e) {
					e = e || window.event;
					var target = e.target || e.srcElement;
					if ( target.className.match(/\bjp-playlist-item\b/) || target.className.match(/\bjp-artist\b/) || target.className.match(/\bjp-playlist-item-free\b/) ) {
						if ( target.className.match(/\bjp-playlist-item-remove\b/) ) {
							jQuery18("#myPlayButton").replaceWith(playStuff);
						} else {
							jQuery18("#myPlayButton").replaceWith(pauseStuff);
						}
					}
				}

				var elements = document.getElementsByClassName("jp-playlist-item-remove");
				jQuery18(elements).click(function() {
					jQuery18("#myPlayButton").replaceWith(playStuff);
					jQuery18("#myPauseButton").replaceWith(playStuff);
				});

				jQuery18("#myPlaylistButton").live('click', function() {
					if ( document.getElementById("jplayer").style.display == 'none' ) {
						document.getElementById("jplayer").style.display = 'block';
					} else {
						document.getElementById("jplayer").style.display = 'none';
					}
				});
				jQuery18("body").click(function(event) {
					if(jQuery18(event.target).parents().index(jQuery18("#myPlaylistButton")) == -1 && jQuery18(event.target).parents().index(jQuery18("#myStopButton")) == -1 && jQuery18(event.target).parents().index(jQuery18("#myVolumeMaxButton")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume0")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume10")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume20")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume30")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume40")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume50")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume60")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume70")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume80")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume90")) == -1 && jQuery18(event.target).parents().index(jQuery18("#volume100")) == -1 && jQuery18(event.target).parents().index(jQuery18("#myPreviousButton")) == -1 && jQuery18(event.target).parents().index(jQuery18("#myNextButton")) == -1 && jQuery18(event.target).parents().index(jQuery18("#jplayer")) == -1 && jQuery18(event.target).parents().index(jQuery18("#myAddToPlaylistButton")) == -1) {
						if(jQuery18("#jplayer").is(":visible")) {
							jQuery18("#jplayer").hide();
						}
					}
				});
				jQuery18("#myRepeatButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("repeat");
					jQuery18(this).replaceWith(repeatStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myUnRepeatButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("repeatOff");
					jQuery18(this).replaceWith(unrepeatStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myShuffleButton").live('click', function() {
					myPlaylist.shuffle(true);
					jQuery18(this).replaceWith(shuffleStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myUnShuffleButton").live('click', function() {
					myPlaylist.shuffle(false);
					jQuery18(this).replaceWith(unshuffleStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myVolumeButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("mute");
					jQuery18(this).replaceWith(muteStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myMuteButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18(this).replaceWith(volumeStuff);
					jQuery18("#jplayer").show();
				});
				jQuery18("#myVolumeMaxButton").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("volumeMax");
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar100Stuff);
				});
				jQuery18("#volume0").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("mute");
					jQuery18("#myVolumeButton").replaceWith(muteStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar0Stuff);
				});
				jQuery18("#volume10").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.10);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar10Stuff);
				});
				jQuery18("#volume20").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.20);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar20Stuff);
				});
				jQuery18("#volume30").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.30);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar30Stuff);
				});
				jQuery18("#volume40").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.40);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar40Stuff);
				});
				jQuery18("#volume50").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.50);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar50Stuff);
				});
				jQuery18("#volume60").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.60);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar60Stuff);
				});
				jQuery18("#volume70").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.70);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar70Stuff);
				});
				jQuery18("#volume80").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.80);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar80Stuff);
				});
				jQuery18("#volume90").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volume", 0.90);
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar90Stuff);
				});
				jQuery18("#volume100").live('click', function() {
					jQuery18("#jquery_jplayer_N").jPlayer("unmute");
					jQuery18("#jquery_jplayer_N").jPlayer("volumeMax");
					jQuery18("#myMuteButton").replaceWith(volumeStuff);
					jQuery18("#myVolumeBar").replaceWith(volumeBar100Stuff);
				});
			});
		//]]>
	</script>
	<style type="text/css">
		body {
			font-family:verdaina,arial,sans-serif;
			font-size:10pt;
			background-color:#000000;
		}
		mini {
			font-size:7pt;
			text-align:center;
			color:#000010;
		}
		bubtxt {
			font-size: 10pt;
			font-family: Sylfaen;
			color:#000010;
			text-align:center;
		}
	</style>

	
</head>
<body>
	<!-- begin ajaxify: -->
	<!-- form submitor 
	<script id="document-script" type='text/javascript' src='http://23.92.31.245/upgrade/elgg-1.8/myles/ajax_forms.js'></script>
	-->
	<script id="document-script" type='text/javascript' src='http://spot6.fm/myles/history.js'></script>
	<script id="document-script" type='text/javascript'>
		/* <![CDATA[ */
		var aws_data = {
			"rootUrl":"http:\/\/spot6.fm\/",
			"ids":"a.openRouteToEvent, .elgg-menu-item-rss, li.elgg-menu-item-download .elgg-button-action, .event_manager_event_select_relationship a",	// #event_manager_search_form.elgg-button-submit
			"container_id":"#elastic-main-content", 	//elastic-column-main column-right
			"mcdc":".elastic-menu-wrapper",
			"searchID":"search",
			"loader":""
		};
		/* ]]> */
	</script>
<script id="document-script" type='text/javascript' src='http://spot6.fm/myles/ajaxify.js'></script>

	<!-- eof ajaxify -->

	<div class="elgg-page-messages" style="">
		<?php echo $messages; ?>
	</div>
	
	<div id="elastic-site-wrapper">
		<div id="elastic-topbar">
			<div class="elastic-content-wrapper">
				<div class="elastic-content">
					<?php echo $topbar; ?>
				</div>
			</div>
		</div>
		
		<div id="elastic-header" class="elastic-wrapper">
			<div style="positiion: relative; background-color:black;">
				<div id="spot6Header"><img src="/images/header/spot6header.jpg" height="200" width="1311"></div>
				<div id="myPlayButton" style="position: absolute; top: 122px; left: 495px"><a href="javascript:;"><img src="/images/controls/play.png" onmouseover="this.src='/images/controls/playHover.png'" onmouseout="this.src='/images/controls/play.png'" height="45" width="45"></a></div>
				<div id="myStopButton" style="position: absolute; top: 181px; left: 502px"><a href="javascript:;"><img src="/images/controls/stop.png" onmouseover="this.src='/images/controls/stopHover.png'" onmouseout="this.src='/images/controls/stop.png'" height="31" width="31"></a></div>
				<div id="myPreviousButton" style="position: absolute; top: 176px; left: 482px"><a href="javascript:;"><img src="/images/controls/previous.png" onmouseover="this.src='/images/controls/previousHover.png'" onmouseout="this.src='/images/controls/previous.png'" height="15" width="15"></a></div>
				<div id="myNextButton" style="position: absolute; top: 176px; left: 537px"><a href="javascript:;"><img src="/images/controls/next.png" onmouseover="this.src='/images/controls/nextHover.png'" onmouseout="this.src='/images/controls/next.png'" height="15" width="15"></a></div>
				<div id="myPlaylistButton" style="position: absolute; top: 211px; left: 631px"><a href="javascript:;"><img src="/images/controls/playlist.png" onmouseover="this.src='/images/controls/playlistHover.png'" onmouseout="this.src='/images/controls/playlist.png'" height="19" width="16"></a></div>
				<div id="myRepeatButton" style="position: absolute; top: 205px; left: 603px"><a href="javascript:;"><img src="/images/controls/repeat.png" onmouseover="this.src='/images/controls/repeatHover.png'" onmouseout="this.src='/images/controls/repeat.png'" height="12" width="19"></a></div>
				<div id="myShuffleButton" style="position: absolute; top: 222px; left: 604px"><a href="javascript:;"><img src="/images/controls/shuffle.png" onmouseover="this.src='/images/controls/shuffleHover.png'" onmouseout="this.src='/images/controls/shuffle.png'" height="13" width="17"></a></div>
				<div id="myVolumeButton" style="position: absolute; top: 217px; left: 301px"><a href="javascript:;"><img src="/images/controls/volume.png" onmouseover="this.src='/images/controls/volumeHover.png'" onmouseout="this.src='/images/controls/volume.png'" height="11" width="8"></a></div>
				<div id="myVolumeMaxButton" style="position: absolute; top: 217px; left: 411px"><a href="javascript:;"><img src="/images/controls/volumeMax.png" onmouseover="this.src='/images/controls/volumeMaxHover.png'" onmouseout="this.src='/images/controls/volumeMax.png'" height="11" width="14"></a></div>
				<div id="myVolumeBar" style="position: absolute; top: 219px; left: 320px"><a href="javascript;:"><img src="/images/controls/volumeBar80.png" height="7" width="88" /></a></div>
				<div id="volume0" style="position: absolute; top: 217px; left: 316px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">0</a></div>
				<div id="volume10" style="position: absolute; top: 217px; left: 324.5px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">1</a></div>
				<div id="volume20" style="position: absolute; top: 217px; left: 333px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">2</a></div>
				<div id="volume30" style="position: absolute; top: 217px; left: 341.5px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">3</a></div>
				<div id="volume40" style="position: absolute; top: 217px; left: 350px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">4</a></div>
				<div id="volume50" style="position: absolute; top: 217px; left: 358.5px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">5</a></div>
				<div id="volume60" style="position: absolute; top: 217px; left: 367px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">6</a></div>
				<div id="volume70" style="position: absolute; top: 217px; left: 375.5px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">7</a></div>
				<div id="volume80" style="position: absolute; top: 217px; left: 384px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">8</a></div>
				<div id="volume90" style="position: absolute; top: 217px; left: 394.5px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">9</a></div>
				<div id="volume100" style="position: absolute; top: 217px; left: 401px; width: 1px; height: 7px"><a style="color: transparent; background-color: transparent; border: none" href="javascript:;">10</a></div>

				<div target="jplayer" id="jplayer" style="position: absolute; top: 205px; left: 648px; z-index: 10000; display: none">
					<div id="jquery_jplayer_N" class="jp-jplayer"></div>
					<div id="jp_container_N" class="jp-video">
						<div class="jp-type-playlist">
							<div class="jp-gui jp-interface">
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
								<div class="jp-current-time"></div>
								<div class="jp-duration"></div>
								<br />
								<div class="jp-title">
									<ul>
										<li></li>
									</ul>
								</div>
							</div>
							<div class="jp-playlist" id="playlist" style="position: absolute; top: 0px; left: 153px; width: 380px; background-color: #000000">
								<ul>
									<li></li>
								</ul>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="elastic-header-content" class="elastic-wrapper-inside">
				<div class="elastic-content">
				<?php echo $header; ?>
				</div>
			</div>
		</div>
		
		<div id="elastic-main-wrapper" class="elastic-wrapper">
	
			<?php echo $body; ?>
			
		</div>
		<div id="elastic-footer" class="elastic-wrapper">
			<?php echo $footer; ?>
		</div>		
		
	</div>	
<?php echo elgg_view('page/elements/foot'); ?>
</body>
</html>