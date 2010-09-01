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
		<link rel="alternate" href="http://api.flickr.com/services/feeds/photos_public.gne?tags=yorkultimate" type="application/rss+xml" title="" id="gallery" />
		<script type="text/javascript" src="js/cookies.js"></script>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<?php echo $head_include; ?>
		<link rel="stylesheet" type="text/css" href="css/gecko.css" />
		<link rel="stylesheet" type="text/css" href="css/webkit.css" />
	</head>
	<body>
		<div id="page">
			<div id="header">
				<h1><a class="nocolor" href="index.php">York Ultimate</a></h1>
				<h2><a class="nocolor" href="http://www.york.ac.uk">University of York</a> Ultimate Frisbee Club</h2>
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
					<!--<li>
						<a class="info icon" href="yorkindoors09.php">YI 2009</a>
					</li>-->
					<li>
						<a class="contact icon" href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div id="news">
				<h3>News</h3>
				<?php include('news.php'); ?>
				<h3>Photos</h3>
				<div id="slideshow">
					<p><a class="comment" href="http://www.flickr.com/search/?q=yorkultimate&m=tags">Click here if you can't see the slideshow</a></p>
				</div>
				<!-- Only display more photos link if javascript is enabled -->
				<script type="text/javascript"> //<![CDATA[
					document.write('<p><a class="external link" href="http://www.flickr.com/search/show/?q=yorkultimate&m=tags">More photos...</a></p>');
				//]]> </script>
			</div>
			<div id="body">
