<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leading Services | Bais-Mordechai.com
	</title>
	<meta name="description" content="Original music by Marty Goodman based on the words of prayer" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Torah, Chumash, Parashah">
	<meta name="author" content="Marty Goodman">
	<link rel="shortcut icon" href="http://bais-mordechai.com/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="http://bais-mordechai.com/favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Allura|Average+Sans'
	rel='stylesheet' type='text/css'>
	<link href="bootstrap/css/bootstrap.css?" rel="stylesheet">
	<link href="css/default.css?" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="css/custom.css" rel="stylesheet">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fav and touch icons -->

<link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
<link href="css/skins/white.css" rel="stylesheet" type="text/css" />
<style>
.media1{
	color: #006DCC;
	display: inline;
	font-size: 28px;
	line-height: 1;
	margin-top: 20px;
	padding: 5px;
	text-decoration: none;
	vertical-align: -10px;
}
.player{
	font-size: 20px;
	vertical-align: 0;
}

</style>
<link href="../jplayer/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="../jplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="../jplayer/js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>


<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcmegamenu.1.3.3.js'></script>
<!--<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
	<script type="text/javascript">
	
	// $( window ).unload(function() {
	// 	localStorage.chazanus.clear();
	// 	localStorage.chazanus.trackNumber = myPlaylist.current;
	// 	localStorage.chazanus.currentTime = $("#jquery_jplayer_N").data("jPlayer").status.currentTime;
	// 	localStorage.chazanus.src = $("#jquery_jplayer_N").data("jPlayer").status.src;

	// });
$(document).ready(function(){
	var playlist = [];
	$.getJSON( "http://bais-mordechai.com/classes.php?filters[parashah]=Leading%20Services&orderbys[0]=ultime&orderbys[1]=number", function( shiurim ) {
		
		$.each(shiurim, function(index, shiur){
			playlist.push({
				title: shiur.title,
				free:true,
				mp3:"../" + shiur.dir + shiur.filename
			})
		});
		myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_N",
		cssSelectorAncestor: "#jp_container_N"
	}, playlist, {
		playlistOptions: {
			enableRemoveControls: true,
				//autoPlay:true,
				displayTime:0,
				addTime:0,
				removeTime:0
			},
			swfPath: "../jplayer/js",
			supplied: "mp3",
			smoothPlayBar: true,
			keyEnabled: true,
			audioFullScreen: true
		});
	});

	
// if(localStorage.chazanus){
// 	$("#jquery_jplayer_N").bind($.jPlayer.event.ready, function() {
// 			myPlaylist.play(parseInt(localStorage.chazanus.trackNumber));
// 			$('#jquery_jplayer_N').jPlayer("setMedia", { // Set the media
// 				mp3: localStorage.chazanus.src
// 				}).jPlayer("play", parseInt(Math.floor(localStorage.chazanus.currentTime)) );
// 			});
// }

$('#mega-menu-9').dcMegaMenu({
	rowItems : '6',
	speed : 'fast',
	effect : 'slide',
	event : 'click'
});
});

</script>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34496123-1']);
_gaq.push(['_setDomainName', 'bais-mordechai.com']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>	<style type="text/css">
.table th, .table td {
	border:none;
}
table.table{
	border-top: 1px solid #dddddd;
}
table.table tr td:first-child{
	width: 290px;
}
div.jp-video-270p {
	width: 100%;
}
</style>
</head>
<body>
	
<!-- <div class="visible-desktop">
<p id="back-top-general">
		<a href="#top"><span></span></a>
	</p>
</div> -->
<div class="container">
	<div class="row">
		<div class="span6" style="margin-top:15px;">
			<h1 style="display:inline;"><a href="http://bais-mordechai.com/beta/" style="text-decoration:none;font-family:inherit;">
				<!--<img src="images/baismordechai.png" height="200" width="400" alt="BaisMordechai"/>-->BaisMordechai</a></h1>

				<a class="media1" href="http://www.facebook.com/baismordechai"><i class="icon-facebook-sign"  style="display:inline;"></i></a>
<!-- 			<a class="media1" href="http://www.linkedin.com/pub/marty-goodman/60/794/900"><i class="icon-linkedin-sign" style="display:inline;"></i></a>
-->			
<a class="media1" href="https://plus.google.com/113753418198118639907?rel=author"><i class="icon-google-plus-sign" style="display:inline;"></i></a>
<a class="media1" href="https://itunes.apple.com/us/podcast/torah-classes/id573262401?mt=2&uo=4" 
target="itunes_store"><i class="icon-headphones" style="display:inline;"></i></a>
</div>
<div class="span5">

</div>
<div class="span1" align="right">&rlm;
	בס"ד&rlm;</div>
	<div class="clearfix"></div>
</div>
<div class="wrap">


	<div class="navbar demo-container">
		<div class="navbar-inner white" style="padding-left:0">

			<ul id="mega-menu-9" class="mega-menu" style="height:inherit;">
				<li><a>Shiurim</a>
					<ul>
						<li><a>Bereishit</a><ul><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Bereishit
							&class=parashah" >Bereishit
						</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Noach
						&class=parashah" >Noach
					</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Lech Lecha
					&class=parashah" >Lech Lecha
				</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayeira
				&class=parashah" >Vayeira
			</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Chayei Sarah
			&class=parashah" >Chayei Sarah
		</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Toldot
		&class=parashah" >Toldot
	</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayeitzei
	&class=parashah" >Vayeitzei
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayishlach
&class=parashah" >Vayishlach
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayeishev
&class=parashah" >Vayeishev
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Mikeitz
&class=parashah" >Mikeitz
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayigash
&class=parashah" >Vayigash
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayechi&class=parashah" >Vayechi</a></li></ul></li><li><a>Shemot</a><ul><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Shemot
&class=parashah" >Shemot
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Va'eira
&class=parashah" >Va'eira
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Bo
&class=parashah" >Bo
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Beshalach
&class=parashah" >Beshalach
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Yitro
&class=parashah" >Yitro
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Mishpatim
&class=parashah" >Mishpatim
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Terumah
&class=parashah" >Terumah
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Tetzaveh
&class=parashah" >Tetzaveh
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Ki Tisa
&class=parashah" >Ki Tisa
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayakhel
&class=parashah" >Vayakhel
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Pekudei&class=parashah" >Pekudei</a></li></ul></li><li><a>Vayikra</a><ul><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayikra
&class=parashah" >Vayikra
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Tzav
&class=parashah" >Tzav
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Shemini
&class=parashah" >Shemini
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Tazria
&class=parashah" >Tazria
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Metzora
&class=parashah" >Metzora
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Acharei
&class=parashah" >Acharei
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Kedoshim
&class=parashah" >Kedoshim
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Emor
&class=parashah" >Emor
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Behar
&class=parashah" >Behar
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Bechukotai&class=parashah" >Bechukotai</a></li></ul></li><li><a>Bamidbar</a><ul><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Bamidbar
&class=parashah" >Bamidbar
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Naso
&class=parashah" >Naso
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Beha'alotecha
&class=parashah" >Beha'alotecha
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Shelach
&class=parashah" >Shelach
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Korach
&class=parashah" >Korach
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Chukat
&class=parashah" >Chukat
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Balak
&class=parashah" >Balak
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Pinchas
&class=parashah" >Pinchas
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Matot
&class=parashah" >Matot
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Massei&class=parashah" >Massei</a></li></ul></li><li><a>Devarim</a><ul><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Devarim
&class=parashah" >Devarim
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Va'etchanan
&class=parashah" >Va'etchanan
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Eikev
&class=parashah" >Eikev
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Re'eh
&class=parashah" >Re'eh
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Shoftim
&class=parashah" >Shoftim
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Ki Teitzei
&class=parashah" >Ki Teitzei
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Ki Tavo
&class=parashah" >Ki Tavo
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Nitzavim
&class=parashah" >Nitzavim
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vayelech
&class=parashah" >Vayelech
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Ha'azinu
&class=parashah" >Ha'azinu
</a></li><li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname=Vezot Hab'rachah&class=parashah" >Vezot Hab'rachah</a></li></ul></li>
<li><a href="#">Other Shiurim</a>
	<ul>
		<li><a
			href="http://bais-mordechai.com/beta/shiurlist.php?type=Davening&class=type">Davening</a></li>
			<li><a
				href="http://bais-mordechai.com/beta/shiurlist.php?type=Tehillim&class=type">Tehillim</a></li>
				<li><a
					href="http://bais-mordechai.com/beta/shiurlist.php?type=The%20Laws%20of%20Brochos&class=type">Laws
					of Brochos</a></li>
				</ul></li>

			</ul></li>
			<li class="divider-vertical"></li>
			<li><a href="http://bais-mordechai.com/beta/shiurlist.php?class=new">Whats New</a></li>
			<li class="divider-vertical"></li>
			<li><a href="http://bais-mordechai.com/beta/music.php">Music</a></li>
			<li class="divider-vertical"></li>
			<li><a href="http://bais-mordechai.com/beta/leading_services.php">Leading Services</a></li>
			<li class="divider-vertical"></li>
			<li><a href="http://bais-mordechai.com/beta/contact.php">Contact</a></li>
			<li class="divider-vertical"></li>
			<li><a href="http://bais-mordechai.com/beta/about.php">About</a></li>
					<!--<li class="divider-vertical"></li>
					<li>
					<form name="cse" id="searchbox_demo" action="http://www.google.com/cse">
  <input type="hidden" name="cref" value="" />
  <input type="hidden" name="ie" value="utf-8" />
  <input type="hidden" name="hl" value="" />
  <div class="input-append"style="margin-top:8px;">
  <input class="span3" name="q" type="text" style="height:17px;margin-left: 24px;background-image:none;" />
  <input class="btn" type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
</li>-->
</ul>

</div>

</div>

</div>	
<div class="row">
	<div class="hero-unit smallerTopPadding">
		<h1>Leading Services
		</h1>
		<div id="jp_container_N" class="jp-video jp-video-270p">
			<div class="jp-type-playlist">
				<div id="jquery_jplayer_N" class="jp-jplayer"></div>
				<div class="jp-gui">
					<div class="jp-video-play">
						<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
					</div>
					<div class="jp-interface">
						<div class="jp-progress">
							<div class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
						<div class="jp-controls-holder">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
								<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
								<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
								<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
								<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
								<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
							</ul>
						</div>
						<div class="jp-title">
							<ul>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jp-playlist">
					<ul>
						<!-- The method Playlist.displayPlaylist() uses this unordered list -->
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
</div>
<div class="container">
	<div class="row">
		<div class="span12">
			<div id="disqus_thread"></div>
		</div></div></div>
		<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'baismordechai'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
        	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        	dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

        <!--start row footer-->
        <div class="row nomargin">

        	<hr>

        	<footer>
        		<div class="container">
        			<div class="row">
        				<div class="span4">
        					<p>&copy; 2012 Bais-Mordechai. All rights reserved.</p>
        				</div>
        				<div class="span8">
        					<a href="http://bais-mordechai.com/mobile/" class="hidden-desktop">Mobile</a>
        				</div>
        			</div>
        		</div>
        	</footer>

        </div>
        <!--end row footer-->

    </div>
    <!--/container-->


	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script type="text/javascript">
	$(document).ready(function($) {
		
	});
	</script>
</body>
</html>

