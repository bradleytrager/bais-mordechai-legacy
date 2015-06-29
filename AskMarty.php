<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ask Marty!</title>
<meta name="description" content="See questions and answers by Marty Goodman and submit your own question" />
<script>
function validateForm()
{
var x=document.forms["askmarty"]["email"].value;
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
      <h2>Be the First to Ask a Question!</h2><hr>
     
      <form name="askmarty" action="ask_question.php" method="post" onsubmit="return validateForm()">
       <table >
          <tr>
            <td><h3>E-Mail: </h3></td>
            <td><input name="email" type="text" /></td>
          </tr>
        </table>
        <h3>Question: </h3>
        <textarea rows="15" cols="60" name="question" type="text" style="display:block-inline;"></textarea>
       
        <input type="submit" value="Submit Question" style="vertical-align:top;"/>
      </form>
      <br />
   </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>
