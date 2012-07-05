<?php
require './functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>FTNS - World's 1st Fitness Radio!</title>
<style type="text/css">

body {
	background: #f6f6f6 url('./images/player/ftns_onair_bg.gif') 0px 0px no-repeat;
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.player {
	width: 320px;
	height: 354px;
	position: relative;
}
.logo {
	width: 142px;
	height: 82px;
	background: url('./images/player/ftns_logo_sml.png') 0 0 no-repeat;
	position: absolute;
	top: 20px;
	left: 30px;
}
.logo > span {
	display:none;
}

.flash_player {
	width: 156px;
	height: 34px;
	position: absolute;
	top: 29px;
	left: 210px;
}

#listenLiveOnAir {
	position: absolute;
	right: 20px;
	top: 260px;
	width: 280px;
	text-align: right
}

.onAirHead {
	color: #d5122c;
	font: 13px 'ftns';
	font-style: italic;
	font-weight: bold;
}

.onAirShowName {
	font: 20px 'ftnsLight';
	font-style: italic;
	color: #e0e0e0;
	padding-bottom: 2px;
}

.onAirSub {
	display: block;
	height: 35px;
}

.onAirClock {
	background: url('./images/player/icn_clock.png') top right no-repeat;
	width: 11px;
	height: 11px;
	margin-top: 2px;
	display: inline-block;
	vertical-align: top;
	position: absolute;
}

.onAirSub, .onAirSubText, .onAirSubText2 {
	font: 11px 'ftns';
	color: #e0e0e0;
}

.liveTime {
	color: white;
	font: 15px 'ftnsLight';
	position: absolute;
	top: 35px;
	right: 10px;
	text-align: center;
	width: 92px;
	font-style: italic;
}

.callFTNS {
	position: absolute;
	right: 23px;
	bottom: 85px;
	text-align: right;
}

.callHead {
	color: white;
	font: 12px 'ftns';
	font-style: italic;
}

.callNumber {
	color: white;
	font: 21px 'ftnsLight';
	font-style: italic;
}

.ftnsAD {
	position: absolute;
	bottom: 17px;
	right: 21px;
}


/* sdalonzo 2011-11-09 */
#onAirLogo {
	position: absolute;
	left: 78px;
	top: 110px;
}

</style>

<link rel="stylesheet" href="/templates/system/css/ftns.css" />
<link rel="stylesheet" href="/templates/system/css/jquery-ui-1.8.15.custom.css" type="text/css" />

<!--
commented sdalonzo, 2011-11-09
to replace with v1.7
<script src="../plugins/system/jquery/jquery/jquery-1.6.2.min.js"></script>
-->
<script src="http://code.jquery.com/jquery-1.7.min.js"></script>

<!-- non cdn libs -->
<script type="text/javascript" src="js/amplify.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="/templates/system/javascript/jquery-ui-1.8.15.custom.min.js"></script>
<script type="text/javascript" src="/templates/system/javascript/jquery.tmpl.js"></script>
<script type="text/javascript" src="/templates/system/javascript/underscore.js"></script>
<script type="text/javascript" src="/templates/system/javascript/date.js"></script>
<script type="text/javascript" src="jquery.timers-1.0.0.js"></script>

<!-- app code -->
<script type="text/javascript" src="js/ftns-calendar.js"></script>

<!-- google gdata api load -->
<script type="text/javascript">
	google.load("gdata", "2.x");
	google.setOnLoadCallback(FTNS.getSchedule);
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22549252-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(document).ready(function() {
		$(".liveTime").everyTime(1000,function(i){
			$.ajax({
			  url: "liveTime.php",
			  cache: false,
			  success: function(html){
				$(".liveTime").html(html);
			  }
			})
		})
	});
   $('.liveTime').css({});
});

</script>


<!-- DOUBLE CLICK -->
<script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
<script type='text/javascript'>
	GS_googleAddAdSenseService("ca-pub-7173060921064171");
	GS_googleEnableAllServices();
</script>
<script type='text/javascript'>
	GA_googleAddSlot("ca-pub-7173060921064171", "FTNS_InnerPage_Header_468x60");
</script>
<script type='text/javascript'>
	GA_googleFetchAds();
</script>



</head>
<body>
<div class="player">
	<div class="logo">
		<span>FTNS - World's 1st Fitness Radio!</span>
	</div>
	
	<div class="liveTime">LIVE TIME</div>

	<div class="info">
		<?php
		$player_feed = new Schedule('player', date('l'));
		$player_feed->parse_day();
		?>
	</div>

	<img id="onAirLogo" src="images/shows/default.png" />
	<div id="listenLiveOnAir">
		<div class="onAirHead">ON AIR NOW</div>
		<div class="onAirShowName">LOADING</div>
		<div class="onAirSub">
			<div class="onAirClock"></div>
			<div class="onAirSubText">FTNS SCHEDULE</div>
			<div class="onAirSubText2"></div>
		</div>
	</div>
	
</div>	
	
</body>
</html>
