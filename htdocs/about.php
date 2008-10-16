<?php 
	$title = "About Us";
	$head_include =
		"<style type=\"text/css\">" .
			"table#committeelist tr{border-bottom:2px solid #333;}" .
			"table#committeelist li.name{list-style:none; color:#777;}" .
			"table#committeelist li.nickname{list-style:none; font-style:italic; font-weight:bold; font-size:1.4em;}" .
		"</style>\n"
	;
	include('header.php');
?>

<div class="shortcuts">
	<ul>
		<li><a href="#socials">Socials</a></li>
		<li><a href="#teams">Teams</a></li>
		<li><a href="#committee">Committee</a></li>
	</ul>
</div>

<h3 id="socials">Socials</h3>
<p>
	We're not just about the sport - we like to have a laugh too! We usually have a few socials per term beginning with the legenedary <b>3-legged bar crawl</b>!
</p>
<p>
	Did you know you can get 3 pints of liquid into a standard disc? No? Then you need to be educated in the ways of the <a href="http://www.wikihow.com/Do-the-3-Pint-Challenge"><b>3-pint challenge</b></a>, my friend.
</p>
<p>
	<span class="comment">Check out the <a class="internal link" href="calendar.php#calendar">Calendar</a> to see when the upcoming socials are.</span>
</p>

<h3 id="teams">Teams</h3>
<a class="left" target="_blank" href="http://ultimatephotos.org/uk-2008-roses/main/IMG_3492.jpg"><img alt="Post-match analysis at Roses" src="images/postmatch.jpg"/></a>
<p>
	York Ultimate operates four different types of team. We have an <i>Open</i>, <i>Uni</i>, <i>Mixed</i> and <i>Womens</i> teams that compete in various events over the course of the year.
	The <i>Open</i> team is for anyone with club membership, regardless of whether you are in the Uni or not.
	The <i>Mixed</i> team has restrictions as to numbers of each gender that can play.
	The <i>Uni</i> team is comprised of anyone registered as a university member.
	The <i>Womens</i> team can be both <i>Open</i> and <i>Uni</i>, so entry is different for each.
</p>

<h3 id="committee">The Committee</h3>
<table id="committeelist" style="width:66%;border:none;">
	<tbody>
<?php
	// a function to display a team member
	function committeeMember($name, $nickname, $roles, $image) {
		echo 
			"<tr>" .
				"<td>" .
					"<img src=\"images/committee/" . $image . "\" alt=\"" . $name . "\" style=\"width:130px;\"" .  "/>" .
				"</td>" .
				"<td>" .
					"<ul>" .
						"<li class=\"nickname\">" . $nickname . "</li>" .
						"<li class=\"name\">" . $name . "</li>" .
						"<li class=\"notext\">" .
							"<ul>"
		;
		foreach ($roles as $role) {
			echo "<li>" . $role . "</li>";
		}
		echo
							"</ul>" .
						"</li>" .
					"</ul>" .
				"</td>" .
			"</tr>"
		;
	}
?>
		<?php committeeMember("Jack Mills", "Sideshow/Sparrow", array("Captain"), "jack.jpg"); ?>
		<?php committeeMember("Richard Cutcher", "Cutch", array("Vice Captain"), "cutch.jpg"); ?>
		<?php committeeMember("Deborah Sharpe", "Debs", array("Women's Captain"), "debs.jpg"); ?>
		<?php committeeMember("Chetan Padia", "The Doctor", array("President"), "chetan.jpg"); ?>
		<?php committeeMember("Nadav Atik", "Nadav", array("Secretary"), "nadav.jpg"); ?>
		<?php committeeMember("Daniel Peet", "Dan P", array("Treasurer"), "dan.jpg"); ?>
		<?php committeeMember("Jamie Abernethy", "Jamie", array("Social Secretary", "Press &amp; Publicity"), "jamie.jpg"); ?>
		<?php committeeMember("Mark Heslop", "Statto", array("Merchandise"), "statto.jpg"); ?>
		<?php committeeMember("David Butler", "Indoor Dave", array("Webmaster"), "david.jpg"); ?>
	</tbody>
</table>

<?php
	include('footer.php');
?>
