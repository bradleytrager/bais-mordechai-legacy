<?php 

function addMenu($name){
	
	$file = fopen("/kunden/homepages/38/d90108673/htdocs/bais-mordechai/".$name.".txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is 

/* echo '<li><a href="ParashaList.php?cname='.
	$name.
	'" class="MenuBarItemSubmenu">'.
	$name.
	'</a>'; */
	echo '<li><a>'.
	$name.
	'</a>';

	echo '<ul>';

	while(!feof($file))
	{
		$string = fgets($file);
		echo '<li><a href="http://bais-mordechai.com/beta/shiurlist.php?pname='.
		$string.
		'&class=parashah" >'.
		$string.
		'</a></li>';
	}

	fclose($file);
	echo '</ul>';
	echo '</li>';
}
?>

<!-- <div class="visible-desktop">
<p id="back-top-general">
		<a href="#top"><span></span></a>
	</p>
</div> -->
<div class="container">
	<div class="row">
		<div class="span6" style="margin-top:15px;">
			<h1 style="display:inline;"><a href="http://bais-mordechai.com/beta/" style="text-decoration:none;font-family:inherit;">
				<!--<img src="images/baismordechai.png" height="200" width="400" alt="BaisMordechai"/>-->BaisMordechai</a></h1>

				<a class="media1" href="http://www.facebook.com/baismordechai"><i class="icon-facebook-sign"  style="display:inline;"></i></a>
<!-- 			<a class="media1" href="http://www.linkedin.com/pub/marty-goodman/60/794/900"><i class="icon-linkedin-sign" style="display:inline;"></i></a>
-->			
<a class="media1" href="https://plus.google.com/113753418198118639907?rel=author"><i class="icon-google-plus-sign" style="display:inline;"></i></a>
<a class="media1" href="https://itunes.apple.com/us/podcast/torah-classes/id573262401?mt=2&uo=4" 
target="itunes_store"><i class="icon-headphones" style="display:inline;"></i></a>
</div>
<div class="span5">

</div>
<div class="span1" align="right">&rlm;
	בס"ד&rlm;</div>
	<div class="clearfix"></div>
</div>
<div class="wrap">


	<div class="navbar demo-container">
		<div class="navbar-inner white" style="padding-left:0">

			<ul id="mega-menu-9" class="mega-menu" style="height:inherit;">
				<li><a>Shiurim</a>
					<ul>
						<?php					
						addMenu(Bereishit);
						addMenu(Shemot);
						addMenu(Vayikra);
						addMenu(Bamidbar);
						addMenu(Devarim);
						?>
						<li><a href="#">Other Shiurim</a>
							<ul>
								<li><a
									href="http://bais-mordechai.com/beta/shiurlist.php?type=Davening&class=type">Davening</a></li>
									<li><a
										href="http://bais-mordechai.com/beta/shiurlist.php?type=Tehillim&class=type">Tehillim</a></li>
										<li><a
											href="http://bais-mordechai.com/beta/shiurlist.php?type=The%20Laws%20of%20Brochos&class=type">Laws
											of Brochos</a></li>
										</ul></li>
									</ul></li>
									<li class="divider-vertical"></li>
									<li><a href="http://bais-mordechai.com/beta/shiurlist.php?class=new">Whats New</a></li>
									<li class="divider-vertical"></li>
									<li><a href="http://bais-mordechai.com/beta/music.php">Music</a></li>
									<li class="divider-vertical"></li>
									<li><a href="http://bais-mordechai.com/beta/leading_services.php">Leading Services</a></li>
									<li class="divider-vertical"></li>
									<li><a href="http://bais-mordechai.com/beta/contact.php">Contact</a></li>
									<li class="divider-vertical"></li>
									<li><a href="http://bais-mordechai.com/beta/about.php">About</a></li>
								</ul>

							</div>

						</div>

					</div>