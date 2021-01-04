<html>
<head>
	<title>پلیر پخش زنده</title>
	<meta http-equiv="content-type" content="application/vnd.hbbtv.xhtml+xml; charset=UTF-8" />
	<style>
	.redbutton{
	background: url("images/color_buttons.png") no-repeat 0 0;
	margin: 0 10px 0 0;
	height:18px;
	width:29px;
	display: inline-block;
	background-position: -64px 0;
	}
	</style>
<script>
var profile = { hbbtv : "2.0", video : "html5", version : "html5"};
function onLoad(){
		console.log("onLoad");
		
		vplayer = new VideoPlayerHTML5("videodiv", profile);
		registerKeyListener();
		registerKeys(1);
		vplayer.populate();
		if( vplayer.video == null ){
			vplayer.createPlayer();
		}
		vplayer.setAdBreaks( null ); 
		vplayer.setURL(baseURL);
		vplayer.setDRM( false );
		vplayer.startVideo( self.focus.live == true );
		$("body").append("<div id=\"logo2\"><div style=\"padding-right:70px;vertical-align: top;padding-top:5px;color:white;\" ><div style=\"margin:0 10px 0 0;height: 18px;width: 29px;display: inline-block;\">خروج</div><div  class=\"redbutton\"  ></div></div>");
	}
	var profile = { hbbtv : "2.0", video : "html5", version : "html5"};
	// change this to point to video files location. This will be used as root for relative links. Absolute urls are not affected
	var defaultVideoRoot = "/"; 
	
	/*** End of Settings ***/
	
	console.log("Application Start");

	var config 		= null;
	var loading 	= false;
	var animating 	= false;
	var menu 		= null;
	var vplayer 	= null;
	var main 		= null;
	var returnURL   ="<?php echo  $_GET["return"]; ?>";
	var baseURL		="<?php echo  $_GET["base"]; ?>";
</script>
	<?php
		/*** 
		print all resource files with url-parameter version=filemtime 
		to ensure device is not using cache when file is modified
		***/
		$profileResources = "html5"; // additional resources
		include("resources.php"); 
	?>
</head>	
<body onload="onLoad();">
	<div style="visibility:hidden;width:0px;height:0px;">
		<object id="appmgr" type="application/oipfApplicationManager"></object>
		<object id="oipfcfg" type="application/oipfConfiguration"></object>
	</div>
	<div id="videodiv"></div>
		<div id="wrapper">
		<div id="logo1"></div>
		<div id="menu"></div>
		
		</div>
		<div id="itemDescription"></div>
	</div>

	<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//jahad1.irib.ir/htdocs/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
	_paq.push(['trackEvent', 'Documentary', 'Play', 'Thrive']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
</body>
</html>
