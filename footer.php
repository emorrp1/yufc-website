			</div><?php /* body */ ?>
			<div id="footer">
				<p class="comment">Last updated: <?php include('lastupdated.txt') ?></p>
				<p>
				    &copy; 2008 - 2010 University of York Ultimate Club - All rights reserved
				</p>
				<p>
    				<a target="_blank" href="http://validator.w3.org/check?uri=referer"><img src="images/w3c/valid_xhtml.gif" alt="XHTML Valid"/></a>
                    <a target="_blank" href="http://jigsaw.w3.org/css-validator/validator?uri=http://www-users.york.ac.uk/~socs311/css/default.css"><img src="images/w3c/valid_css.gif" alt="CSS Valid"/></a>
                </p>
			</div>
		</div><?php /* page */ ?>
		<!-- flickr slideshow code: (placed here to delay loading) -->
		<script type="text/javascript" src="http://v6.flickrshow.com/scripts/with/"></script>
		<script type="text/javascript">
		//<![CDATA[
				var cesc = new flickrshow("slideshow", {flickr_tags:"york,ultimate,frisbee", speed:4, theme:"none"});
				// start the slideshow when UI loaded
				Event.observe(window, 'load', function(){	// uses Prototype (included in flickrshow)
					var sl = setInterval(function() {
						if (cesc && cesc.fs && cesc.fs.buttons == 1) {
							lastImage = getCookie("lastImage");
							if (lastImage != "") {cesc.slideManual(lastImage);}
							cesc.clickPlay();
							setInterval(function() {
								setCookie("lastImage",cesc.cs.viewed,1);
							}, 4000);
							clearInterval(sl);
						}}, 600);
				});
		//]]>
		</script>
	</body>
</html>
