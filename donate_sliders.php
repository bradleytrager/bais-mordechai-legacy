<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>bais-mordechai.com Donation Form</title>
<?php require 'head.php'; ?>
<meta name="description" content="Show your appreciation by submitting a donation" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />

<style type="text/css">
input {width:250px;}

</style>


<script>
function validateForm()
{
var a=document.forms["donate"]["name"].value;
var b=document.forms["donate"]["email"].value;
var c=document.forms["donate"]["amount"].value;
var d=document.forms["donate"]["street"].value;
var e=document.forms["donate"]["city"].value;
var f=document.forms["donate"]["state"].value;
var g=document.forms["donate"]["zip"].value;
var h=document.forms["donate"]["card_number"].value;
var i=document.forms["donate"]["card_type"].value;
var j=document.forms["donate"]["exp_date"].value;
var k=document.forms["donate"]["pin"].value;

if (  a==null || a==""
	||b==null || b==""
	||c==null || c==""
	||d==null || d==""
	||e==null || e==""
	||f==null || f==""
	||g==null || g==""
	||h==null || h==""
	||i==null || i==""
	||j==null || j==""
	||k==null || k=="") {
	
	alert("Please fill in the required fields.");
	return false;
	}
else {

	var x=document.forms["donate"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (x==null || x==""){
	  alert("You must enter your e-mail address!");
	  return false;
	  }
	else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
	  alert("Pleae enter a valid e-mail address.");
	  return false;
	  }
	}
}
</script>
<script>
    $(function() {
        $( "#slider" ).slider({
            value:2,
            min: 0,
            max: 20,
            step: 1,
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.value );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider" ).slider( "value" ) );
    });
    </script>

</head>

<body>

 


<div class="container_24 ">
<? require 'header.php';?>
<? require 'top_menu.php';?>
<div class="grid_24 content">
<? require 'side_bar.php';?>
<div class="grid_20 alpha omega">

  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
  
  Tell us what you would like to see:<hr/>
    <div class="grid_16 alpha omega"><label for="amount">Donation amount:</label> </div>
    <div id="slider" class="grid_10 alpha"></div>
    <div class="grid_6 alpha omega">
    <input type="text" id="amount" style="color: #f6931f; font-weight: bold;float:right;width:50px;height:0.8em" />
      </div>
 
    
      <form name="donate" action="get_donation.php" method="post" onsubmit="return validateForm()">
      
      </form>
      <br />
   </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>
