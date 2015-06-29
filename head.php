<?php

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://bais-mordechai.com/favicon.ico" type="image/x-icon" />
<link rel="icon" href="http://bais-mordechai.com/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="http://bais-mordechai.com/css/reset.css" />
<link rel="stylesheet" href="http://bais-mordechai.com/css/text.css" />
<link rel="stylesheet" href="http://bais-mordechai.com/css/960_24_col.css" />
<link rel="stylesheet" href="http://bais-mordechai.com/css/demo.css" />
<link href="http://bais-mordechai.com/css/VerticalMenuBar.css" rel="stylesheet" type="text/css" />
<link href="http://bais-mordechai.com/css/HorizontalMenuBar.css" rel="stylesheet" type="text/css" />
<link href="http://bais-mordechai.com/BaisMordechaiStyles1.css" rel="stylesheet" type="text/css" />
<link href="http://bais-mordechai.com/BaisMordechaiFonts.css" rel="stylesheet" type="text/css" />

';
echo '<script type=\'text/javascript\' src=\'http://bais-mordechai.com/js/jquery-1.8.2.min.js\'></script>
<script type="text/javascript">
$(document).ready(function(){

	

	// When a list item that contains an unordered list
	// is hovered on
	$("#MenuBar1 li").has("ul").hover(function(){

		//Add a class of current and fade in the sub-menu
		$(this).children("ul").slideDown(1000);
	}, function() {

		// On mouse off remove the class of current
		// Stop any sub-menu animation and set its display to none
		$(this).children("ul").stop(true, true).css("display", "none");
	});

});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#MenuBar2 li").has("ul").hover(function(){
		var offset = $("#MenuBar2").offset();
		inset = 0;
		offset.left += ($(this).width() - inset);
		$(this).children("ul").toggle(300);
		$(this).children("ul").offset(offset);
		}, function() {
		$(this).children("ul").stop(true, true).css("display", "none"); 
	});
});
</script>


';

echo '<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-34496123-1\']);
  _gaq.push([\'_setDomainName\', \'bais-mordechai.com\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>';
?>