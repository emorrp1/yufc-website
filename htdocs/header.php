<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
	<head>
		<title>yorkultimate.co.uk - <?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="en-gb" />
		<meta name="robots" content="all" />
		<meta name="description" content="The Home of York University's Ultimate Frisbee Club. We embrace athleticism, courage, agility, stamina, but most of all the 'Spirit of the Game'. This is the sportsmanship and decency to do what is morally right on the pitch." />
		<meta name="keywords" content="Ultimate, frisbee, sport, athletic, fast, furious, sportsmanship, competitive, fun, social, spirit" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<?php /*
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		*/ ?>
		<link rel="stylesheet" type="text/css" href="css/flickrshow.css" /> <!-- http://www.flickrshow.com -->
		<script type="text/javascript" src="http://v6.flickrshow.com/scripts/with/"></script>
		<script type="text/javascript">
		//<![CDATA[
				var cesc = new flickrshow("slideshow", {flickr_tags:"york,ultimate,frisbee", speed:4, theme:"none"});
				// start the slideshow when UI loaded
				Event.observe(window, 'load', function(){	// uses Prototype (included in flickrshow)
					var sl = setInterval(function() {
						if (cesc && cesc.fs && cesc.fs.buttons == 1) {
							cesc.clickPlay();
							clearInterval(sl);
						}}, 600);
				});
		//]]>
		</script>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<?php echo $head_include; ?>
	</head>
	<body>
		<div id="page">
			<div id="header">
				<h1><a href="index.php">York Ultimate</a></h1>
				<h2><a href="http://www.york.ac.uk">University of York</a> Ultimate Frisbee Club</h2>
			</div>
			<div id="nav">
				<ul>
					<li>
						<a class="home icon" href="index.php">Home</a>
					</li>
					<li>
						<a class="about icon" href="about.php">About Us</a>
					</li>
					<li>
						<a class="calendar icon" href="calendar.php">Calendar</a>
					</li>
					<li>
						<a class="info icon" href="info.php">Useful Info</a>
					</li>
					<li>
						<a class="info icon" href="yorkindoors09.php">Tournament</a>
					</li>
					<li>
						<a class="contact icon" href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div id="news">
				<h3>News</h3>
				<?php include('news.php'); ?>
				<h3>Photos</h3>
				<div id="slideshow" style="height:250px;width:92%;margin-left:auto;margin-right:auto;">
					<p><a class="comment" href="http://www.flickr.com/search/?q=york+ultimate+frisbee">Click here if you can't see the slideshow</a></p>
				</div>
				<p>
					<a class="external link comment" target="_blank" href="http://www.flickr.com/slideShow/index.gne?tags=york,ultimate,frisbee" onclick="window.open('http://www.flickr.com/slideShow/index.gne?tags=york,ultimate,frisbee','yorkultimatephotos','height=540,width=450,scrollbars=no,menubar=no,status=no,toolbar=no,titlebar=no');return false;">More photos...</a>
				</p>
			</div>
			<div id="body">
