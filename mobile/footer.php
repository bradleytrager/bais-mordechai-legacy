<?php include_once 'get_parashah.php'; ?>

<div data-role="controlgroup" data-type="horizontal" style="text-align:center">
		<a href="http://www.facebook.com/baismordechai/" rel="external" data-role="button" data-inline="true"
		data-mini="true">Facebook</a>
		<a href="https://itunes.apple.com/us/podcast/torah-classes/id573262401" rel="external" 
		data-role="button" data-inline="true" data-mini="true">Podcasts</a>
		<a href="http://www.linkedin.com/pub/marty-goodman/60/794/900" rel="external" 
		data-role="button" data-inline="true" data-mini="true">LinkedIn</a>
			
		<a href="https://plus.google.com/113753418198118639907?rel=author" rel="external" 
		data-role="button" data-inline="true" data-mini="true">Google+</a>
					
	</div>
	<!-- /navbar -->

<div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme="c">
	
	<div data-role="navbar">
		<ul>
			
			<li><a href="shiurlist.php?pname=
<?=get_parashah() ?>
&class=parashah">Current</a></li>
					<li><a href="shiurlist.php?class=new">New</a></li>
					<li><a href="contact.php">Contact</a>
					<li><a href="http://bais-mordechai.com/beta/index.php" 
	rel="external" >Main Site</a></li>
		</ul>
	</div><!-- /navbar -->
</div><!-- /footer -->