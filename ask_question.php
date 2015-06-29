<?php 

function submit_question(){

    // validate submission
    if (!empty($_POST["question"]))
    {
        $email = 'Anonymous';
        if (!empty($_POST["email"])){
        $email = $_POST["email"];
        }
        $to = 'binyomintrager@gmail.com, Marty@bais-mordechai.com';
        $subject = "Question from Website";
        $body = ' Question: '.stripslashes($_POST["question"]);
        $headers .= 'From:'.$email;//.'\r\n';
        mail($to, $subject, $body, $headers);
		
				 echo '<h3>Your question has been submitted!</h3>';
			
	}
    else
    {
			echo '<h3>You must fill out the question box</h3>';
		
    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mailing List Sign-Up</title>
<meta name="description" content="Sign-Up for Marty Goodmans mailing list to recieve new about website updates and Divrei Torah" />
<script>
function validateForm()
{
var x=document.forms["mlsignup"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (x==null || x==""){
  alert("You must enter your e-mail address!");
  return false;
  }
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
  alert("Pleae enter a valid e-mail address!");
  return false;
  }
}
</script>
<?php require 'head.php'; ?>
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
 <?php submit_question(); ?>
    </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>


 



 