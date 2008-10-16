<?php 
	$title = "Useful Information";
	$head_include = "";
	include('header.php');
?>

<div class="shortcuts">
	<ul>
		<li><a href="#yahoo">Yahoo Sports Group</a></li>
		<li><a href="#facebook">Facebook</a></li>
		<li><a href="#email">Email</a></li>
	</ul>
</div>

<h3 id="yahoo">Yahoo Sports Group</h3>
<table style="margin-left:2.0em;width:90%;"><tbody><tr>
	<td width="33%">
		<a target="_blank" href="http://sports.groups.yahoo.com/group/yorkultimate/"><img alt="York Ultimate on Yahoo Groups" src="images/contact/yahoo.png"/></a>
	</td>
	<td width="66%">
		<p>This our main way of staying in touch. Go to the <a class="external link" target="_blank" href="http://sports.groups.yahoo.com/group/yorkultimate/">Yahoo Sports Group</a> to sign up (or use the form below) and <i>change the settings so you get the messages via email</i>.</p>
		<form method="get" action="http://groups.yahoo.com/subscribe/yorkultimate">
			<input type="text" name="user" value="enter email address" size="15" />
			<input type="submit" value="Subscribe" />
		</form>
	</td>		
</tr></tbody></table>

<h3 id="facebook">Facebook</h3>
<table style="margin-left:2.0em;width:90%;"><tbody><tr>
	<td width="33%">
		<a target="_blank" href="http://www.facebook.com/group.php?gid=2203901067"><img alt="York Ultimate on Facebook" src="images/contact/facebook.png"/></a>
	</td>
	<td width="66%">
		<p>Join our <a class="external link" target="_blank" href="http://www.facebook.com/group.php?gid=2203901067">Facebook Group</a></p>
	</td>		
</tr></tbody></table>

<h3 id="email">Email</h3>
<p><a class="email link" href="mailto:socs311@york.ac.uk">Click here to email us</a></p>

<?php
	include('footer.php');
?>
