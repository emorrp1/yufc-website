<?php 
	$title = "Calendar";
	$head_include = "";
	include('header.php');
?>

<div class="shortcuts">
	<ul>
		<li><a href="#training">Training</a></li>
		<li><a href="#calendar">Upcoming events</a></li>
		<li><a href="#feeds">Calendar feeds</a></li>
	</ul>
</div>

<h3 id="training">Training</h3>
<ul>
		<li><b>Tue 6:30</b> : Fitness @ Running track (near the sports centre)</li>
		<li><b>Tue 7:30</b> : Women's @ Sports Centre Tent</li>
		<li><b>Wed 1:30</b> : Outdoor @ 22 Acres (near Halifax)</li>
		<li><b>Fri 7:30</b> : Indoors @ Sports Centre Tent</li>
		<li><b>Sat 10am</b> : Pick-Up @ 22 Acres (near Halifax)</li>
</ul>

<h3 id="calendar">Upcoming events</h3>
<p>Here you can see what we're up to in the near future including <b>socials</b>, <b>training</b> and <b>tournaments</b>.</p>
<p style="text-align:center;">
	<!-- following provided by Google Calendar : http://www.google.com/calendar/embedhelper -->
	<iframe src="http://www.google.com/calendar/embed?title=York%20Ultimate&amp;showTitle=0&amp;showDate=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=400&amp;wkst=2&amp;bgcolor=%23000000&amp;src=qhvtkilcl3gvtlfvhi2id2oveo%40group.calendar.google.com&amp;color=%23A32929&amp;src=or4qdk6tsdqr6hcmlprufhjjvg%40group.calendar.google.com&amp;color=%234E5D6C&amp;ctz=Europe%2FLondon" style="border:none;" width="90%" height="400" frameborder="0" scrolling="no"></iframe>
</p>
<p>
	<span class="comment">Outdoor training takes place on 22 Acres (next to Halifax College) and Indoor training is in the Sport Centre.</span>
</p>

<h3 id="feeds">Calendar feeds</h3>
<table cellspacing="0" cellpadding="10" style="border:none;width:100%;"><tbody><tr>
	<td style="width:15em;">
		<ul>
			<li class="ical"><a href="http://www.google.com/calendar/ical/qhvtkilcl3gvtlfvhi2id2oveo%40group.calendar.google.com/public/basic.ics">iCal Calendar feed</a></li>
			<li class="xml"><a href="http://www.google.com/calendar/feeds/qhvtkilcl3gvtlfvhi2id2oveo%40group.calendar.google.com/public/basic">XML feed</a></li>
		</ul>
	</td>
	<td>
		<p class="comment">You can use these feeds to automatically import York Ultimate events into your calendar!</p>
	</td>
</tr></tbody></table>

<?php
	include('footer.php');
?>
