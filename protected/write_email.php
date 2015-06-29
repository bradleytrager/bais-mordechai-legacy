<?php
     function get_email() { 
	 require '../mysql.php';

	$query = mysql_query("SELECT *
	FROM maillist ORDER BY `lname` ASC");
	mysql_close($con);
	echo '<b>Mailing List Names and Emails: </b></br>';
	$n=1;
	while ($row = mysql_fetch_array($query)){
	echo $n.'. '.ucfirst($row['fname']).' '.ucfirst($row['lname']).' - '.$row['email'].'<br/>';
	$n++;
	}
	echo '<br/><br/>';
      }
      ?>
      

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Send Email</title>
<style>
.nicEdit-main {
background-color: #FFF;
}
</style>



<meta name="description" content="See questions and answers by Marty Goodman and submit your own question" />

<?php require '../head.php'; ?>

<script src="nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
// 
// $(document).ready(function(){
//    nicEditors.allTextareas();// Your code here
//  });
bkLib.onDomLoaded(function() {
   //new nicEditor().panelInstance('body');
    //new nicEditor({fullPanel : true}).panelInstance('body');
    new nicEditor({iconsPath : 'nicEditorIcons.gif'}).panelInstance('body');
//    new nicEditor({buttonList :   ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
//    new nicEditor({maxHeight : 100}).panelInstance('area5');
});

</script>
</head>

<body>
<div class="container_24 ">
<? require '../header.php';?>
<? require '../top_menu.php';?>
<div class="grid_24 content">
<? require '../side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
      
     
      
      
      <h2>Send Email to Mailing List</h2><hr>
     
      <form name="maillist" action="send_email.php" method="post" onsubmit="return validateForm()">
       
        <h3>Subject: </h3>
        <textarea rows="1" cols="60" name="subject" id="subject" type="text" style="display:block-inline;"></textarea>
       
       <br/><br/>
       <h3>Body: </h3>
		Salutation: 
       <select name="salutation">
       <option value="none">None</option>
       <option value="dear">Dear [first name], </option>
       
       </select>
       
       <!-- <textarea rows="1" cols="10" name="greeting" type="text" style="display:block-inline;"></textarea> -->
        <!-- Dear [Person's First Name],</br> -->
        <textarea rows="20" cols="80" name="body" id="body" type="text" style="display:block-inline;background-color:#FFF;"></textarea>
        <input type="submit" value="Send Email" style="vertical-align:top;"/>
      </form>
      <br /> 
      <?php get_email(); ?>
   </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>
