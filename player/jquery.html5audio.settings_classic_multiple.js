// SETTINGS

var hap_settings = {
	/* useOnlyMp3Format: true/false (set to true, and on browsers than do not support mp3, flash will be used to play mp3. Also set to true if you plan on using podcast, soundcloud, youtube, ofm) */
	useOnlyMp3Format: true,
	/* sound_id: unique string for player identification (if multiple player instances were used, then strings need to be different!) */
	sound_id: 'classic_full',
	
	/* playlistList: dom elements which holds list of playlists */
	playlistList: '#playlist_list',
	/* activePlaylist: set active playlist that will be loaded on beginning. 
	param1: hidden (boolean) true/false (visible/hidden playlist)
	param2: id (pass element 'id' from the dom)
	Leave empty for no playlist loaded at start like this: activePlaylist: '' */
	activePlaylist: {hidden: true, id: '#playlist1'},
	/* activeItem: active item to start with when playlist is loaded (0 = first, 1 = second, 2 = third... -1 = none) */
	activeItem: 0,
	
	/* autoOpenPlayerInPopup: true/false. Auto open player in popup (removes player in parent window when player in popup opens) */
	autoOpenPlayerInPopup: false,
	/* autoUpdateWindowData: true/false. Auto update data between parent window and popup window (current (last) playlist, active item, last volume) */
	autoUpdateWindowData: true,
	
	/* soundcloudApiKey: If you want to use SoundCloud music, register you own api key here for free: 
	'http://soundcloud.com/you/apps/new' and enter Client ID */
	soundcloudApiKey: 'fda40b44ab58f3a8dd25da89b2c3fe35',
	/* soundcloud_result_limit: max number of results to retrieve from soundcloud. BEWARE! Some results may contain thousands of songs so keep this in mind!! */
	soundcloud_result_limit: 2,
	
	/* podcast_result_limit: max number of results to retrieve from podcast. 250 = max possible results by google api feed. */
	podcast_result_limit: 3,
	/* yt_playlist_result_limit: max number of results to retrieve from youtube playlist. 200 = max amount youtube playlist can have. */
	yt_playlist_result_limit: 3,
	/* ofm_result_limit: max number of results to retrieve from official.fm. */
	ofm_result_limit: 3,

	/*defaultVolume: 0-1 (Irrelevant on ios mobile) */
	defaultVolume:0.7,
	/*autoPlay: true/false (false on mobile by default) */
	autoPlay:false,
	/*autoLoad: true/false (auto start sound load) */
	autoLoad:false,
	/*randomPlay: true/false */
	randomPlay:false,
	/*loopingOn: true/false (loop on the end of the playlist) */
	loopingOn:true,
	
	/* usePlaylistRollovers: true/false. Use rollovers on playlist items (mouseenter, mouseleave + callbacks) */
	usePlaylistRollovers: false,
	/* playlistItemContent: title/thumb/all. Auto create titles or thumbnails in playlist items, or both. */
	playlistItemContent: 'title',

	/* useNumbersInPlaylist: true/false. Prepend numbers in playlist items. */
	useNumbersInPlaylist: false,
	/* titleSeparator: String to append between song number and title. */
	titleSeparator: ' ',
	
	/* autoSetSongTitle: true/false. Auto set song title in 'player_mediaName'. */
	autoSetSongTitle: true,
	
	/* useSongNameScroll: true/false. Use song name scrolling. */
	useSongNameScroll: false,
	/* scrollSpeed: speed of the scroll (number higher than zero). */
	scrollSpeed: 12,
	/* scrollSeparator: String to append between scrolling song name. */
	scrollSeparator: '&nbsp;&#42;&#42;&#42;&nbsp;',
	
	/* mediaTimeSeparator: String between current and total song time. */
	mediaTimeSeparator: '',
	
	/* useVolumeTooltip: true/false. use tooltip over volume seekbar */
	useVolumeTooltip: true,
	
	/* useSeekbarTooltip: true/false. use tooltip over progress seekbar */
	useSeekbarTooltip: true,
	/* seekTooltipSeparator: String between current and total song position, for progress tooltip. */
	seekTooltipSeparator: '&nbsp;/&nbsp;',
	
	/* defaultArtistData: Default text for song media name. */
	defaultArtistData: 'Loading song...',
	
	/* useBtnRollovers: true/false. Use rollovers on buttons */
	useBtnRollovers: false,
	/* buttonsUrl: url of the buttons for normal and rollover state */
	buttonsUrl: {prev: 'media/data/icons/set2/prev.png', prevOn: 'media/data/icons/set2/prev_on.png', 
				 next: 'media/data/icons/set2/next.png', nextOn: 'media/data/icons/set2/next_on.png', 
				 pause: 'icon-pause', pauseOn: 'icon-pause',
				 play: 'icon-playsong', playOn: 'icon-playsong',
				 volume: 'icon-volume-high', volumeOn: 'icon-volume-high', 
				 mute: 'icon-volume-low', muteOn: 'icon-volume-low', 
				 download: 'media/data/icons/set2/download.png', downloadOn: 'media/data/icons/set2/download_on.png',
				 loop: 'media/data/icons/set2/loop.png', loopOn: 'media/data/icons/set2/loop_on.png',
				 shuffle: 'media/data/icons/set2/shuffle.png', shuffleOn: 'media/data/icons/set2/shuffle_on.png',
				 trackUrlIcon: 'media/data/url.png',
				 trackDownloadIcon: 'media/data/dlink.png',
				 trackRemoveIcon: 'media/data/remove.png',
				 link_play: 'media/data/link_play.png', link_pause: 'media/data/link_pause.png'},
				 
	/* useAlertMessaging: true/false. Alert error messages to user */
	useAlertMessaging: true,
	
	/* activatePlaylistScroll: true/false. activate jScrollPane. */
	activatePlaylistScroll: false,
	/* playlistScrollOrientation: vertical/horizontal. */
	playlistScrollOrientation: 'vertical',
	
	/* sortablePlaylistItems: true/false. Make playlist items sortable */
	sortablePlaylistItems: false,
	/* useRemoveBtnInTracks: true/false. Create remove buttons in playlist items for removing tracks. */
	useRemoveBtnInTracks: true,
	
	/* autoReuseMailForDownload: true/false. download backup for ios, save email after client first enters email address and auto send all emails to the same address */
	autoReuseMailForDownload: true,
	
	/* useKeyboardNavigation: false/false. Use keyboard navigation for music (space=toggle audio, left arrow=previous media, right arrow=next media, m=toggle volume) */
	useKeyboardNavigation: false,
	
	/* getTrackInfoFromID3: false/false. Get track info from id3 tags (title, artist, album, artwork) */
	getTrackInfoFromID3: false
};
  
/* START PLAYER INIT */

var hap_player1, hap_players = [hap_player1];
jQuery(document).ready(function($) {
	jsReady = true;
	
	var dataArr = [{holder: $('.Player'), settings:hap_settings}];
			
	checkFlash(dataArr);	
	
	//init component
	hap_players[0] = $('.Player').html5audio(hap_settings);
	
});

$('html').keydown(function(e){

   	var exclude = $("textarea, input");

   	if ( e.keyCode == 32 && !exclude.is(':focus') ) {
   		// user has pressed space
    	api_toggleAudio(hap_players[0]);
    	e.preventDefault();

    	// if (playFirstTime >= 2) {
    	// 		$("#pauseSong").toggle(0);
    	// 		$("#playSong_Initialized").toggle(0);       		
    	// 		api_toggleAudio(hap_players[0]);

    	// }
    	// else
    	// {
    	// 		$("#playSong").toggle(0);
    	// 		$("#pauseSong").toggle(0);
    	// 		api_toggleAudio(hap_players[0]);
    	// }
   	}
   else if (e.keyCode == 39)
   {
       // user has pressed right key
       api_nextAudio(hap_players[0]);
   	   e.preventDefault();
   }
   else if (e.keyCode == 37)
   {
       // user has pressed left key
       api_previousAudio(hap_players[0]);
   	   e.preventDefault();
   }
});


/* END PLAYER INIT */