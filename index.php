

<!DOCTYPE html>
<html>
<head>
	<title>test!</title>
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




</head>
<body>
<div class="player">
	<div class="logo">
		<span>FTNS - World's 1st Fitness Radio!</span>
	</div>
	
	<div class="liveTime">LIVE TIME</div>



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
