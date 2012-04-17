<html><head>
<title>
eXDream Inc.
</title>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="stylesheets/style.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<!-- Anything Slider optional plugins, but needed so the embeded video controls will work in IE -->
	<!-- http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js -->
	<script src="javascripts/swfobject.js"></script>

	<!-- Anything Slider -->
	<link rel="stylesheet" href="stylesheets/anythingslider.css">
	<script src="javascripts/jquery.anythingslider.js"></script>

	<!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
	<script src="javascripts/jquery.anythingslider.video.js"></script>
	
	<script>
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider({
				resizeContents      : true,
				autoPlay			: true,
				delay				: 5000,
				buildStartStop		: false,
				addWmodeToObject    : 'transparent',
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Fall in Love on Tuesday', 'eXDream-FB100+', 'eXDream-Boba', 'USFTSA-White', 'USFTSA-Black'][index - 1];
				}
			});
		});
	</script>

	<!-- Older IE stylesheet, to reposition navigation arrows, added AFTER the theme stylesheet above -->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="stylesheets/anythingslider-ie.css" type="text/css" media="screen" />
	<![endif]-->
</head>

<body>
	<div class="header center" style="width:428px">
		<img src="images/front_xdlogo.jpeg">
		<center><i>this is where our dream extends</i></center>
	</div>
	<div class="hr center">
		<hr color="grey" width="50%">
		<hr color="grey" width="25%">
		<hr color="grey" width="12.5%">
		<hr color="grey" width="6.25%">
	</div>
	<div class="nav center">
		<ul class="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Projects</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	
	<!--  START CONTENT FOR EACH PAGE -->
	<div class="content">
		<div id ="video">
			<!-- START AnythingSlider -->
			<ul id="slider">
				<li class="panel3"><iframe width="560" height="315" src="https://www.youtube.com/embed/-WDtrEBAygg?rel=0" frameborder="0" allowfullscreen></iframe></li>
				<li class="panel3"><iframe width="560" height="315" src="https://www.youtube.com/embed/fB_wgarocq8?rel=0" frameborder="0" allowfullscreen></iframe></li>
				<li class="panel3"><iframe width="560" height="315" src="https://www.youtube.com/embed/6UAC2cdmXS4?rel=0" frameborder="0" allowfullscreen></iframe></li>
				<li class="panel3"><iframe width="560" height="315" src="https://www.youtube.com/embed/JWv--3Cjh6k?rel=0" frameborder="0" allowfullscreen></iframe></li>
				<li class="panel3"><iframe width="560" height="315" src="https://www.youtube.com/embed/ckTGQIwsvuA?rel=0" frameborder="0" allowfullscreen></iframe></li>
			</ul> 
			<!-- END AnythingSlider -->
		</div>
		
		<div id ="about-us">
		</div>
		
		<div id ="contact-us">
		</div>
		
	</div>
	<!--  END CONTENT -->
</body>
</html>