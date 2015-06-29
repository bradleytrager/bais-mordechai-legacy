<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="1;url=http://www.bais-mordechai.com" />
</head>

<body>


<div class="content">
<div class="padding">
Your homepage has been updated!
 <?php 
 

 file_put_contents("../welcome.txt", stripslashes$_POST["homepage"]);

 
 ?>
  
  
  
  
  <!-- end .content --></div></div>
<div class="footer">
  <p></p>
  <!-- end .footer --></div>
<!-- end .container -->
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
