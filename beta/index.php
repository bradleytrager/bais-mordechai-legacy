<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bais-Mordechai</title>
	<meta name="description" content="Official site for downloading free audio Torah classes by Marty Goodman on Chumash, Davening, Tehillim, Laws of Brochos and more as featured on Chabad.org." />
	<?php include_once 'head.php'; ?>
</head>
<body>
	<?php include_once 'top.php'; ?>
	<div class="row">
		<div class="hero-unit">
			<div class="span4 banner">
			</div>
			<div class="span7">
				<h1 style="font-size:24px;">Welcome To Bais Mordechai</h1>
				<p>
					The hope of this site is to be educational and inspirational.  I see the Torah as an instruction manual given to us by a
					benevolent father in heaven to help us navigate our lives, with
					stories and examples for us to learn from.<br /> <b>BIBLE</b>
					= <b>B</b>ook of <b>I</b>nstruction <b>B</b>y which to <b>L</b>ive
					on <b>E</b>arth<br /> 
					<b>FROG</b> = <b>F</b>orever <b>R</b>ely <b>O</b>n
					<b>G</b>-d<br />Frogs only jump forward not backward.
					So too must we continue to move forward in our quest for
					spirituality and contentment.
				</p>
				<p class="noLink"><a href="/beta/about.php" class="btn btn-primary">
					Read more »</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--end row-->
		<div class="row">
			<div class="hero-unit smallerTopPadding">
				<?php 
				include_once 'printDL.php'; 
				include_once 'get_parashah.php'; 
				ListByDate();
				?>
			</div>
		</div>
		<div class="row">
			<div class="hero-unit smallerTopPadding">
				<?php 
				$parashah = get_parashah();
				if (strstr($parashah, "-")){
					$doubleParasha = explode("-", $parashah);
					ListByParashah($doubleParasha[0]);
					ListByParashah($doubleParasha[1]);
				}
				else{
					ListByParashah($parashah);
				}
				?>
			</div>
		</div>
		<?php include_once 'footer.php'; ?>
