<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>bais-mordechai.com Donation Form</title>
<meta name="description" content="Show your appreciation by submitting a donation" />
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
      <i>All donations will go towards improving and maintaining bais-mordechai.com and 
      supporting Bais Chabad of West Bloomfield where Marty gives his classes.</i><hr>
     
      <form name="donate" action="get_donation.php" method="post" onsubmit="return validateForm()">
       <table >
          <tr>
            <td>Name: <span class="required" style="color: red; ">*</span></td>
            <td><input name="name"  type="text" value="<?= $_SESSION['name'];?>"/></td>
          </tr>
          <tr>
            <td>Email: <span class="required" style="color: red; ">*</span></td>
            <td><input name="email" type="text" value="<?= $_SESSION['email'];?>"/></td>
          </tr>
          <tr>
            <td>Amount: <span class="required" style="color: red; ">*</span></td>
            <td><input name="amount" type="text" value="<?= $_SESSION['amount'];?>"/></td>
          </tr>
          
          <tr></tr><td><br /></td><tr>
          <td><b>Billing Address:</b></td></tr>
          <tr>
            <td>Street: <span class="required" style="color: red; ">*</span></td>
            <td><input name="street" type="text" value="<?= $_SESSION['street'];?>"/></td>
          </tr>
          <tr>
            <td>City: <span class="required" style="color: red; ">*</span></td>
            <td><input name="city" type="text" value="<?= $_SESSION['city'];?>"/></td>
          </tr>
          <tr>
            <td>State: <span class="required" style="color: red; ">*</span></td>
            <td><input name="state" type="text" value="<?= $_SESSION['state'];?>"/></td>
          </tr>
          <tr>
            <td>Zip: <span class="required" style="color: red; ">*</span></td>
            <td><input name="zip" type="text" value="<?= $_SESSION['zip'];?> "/></td>
          </tr>
          
           <tr></tr><td><br /></td><tr>
          <tr>
            <td>Credit Card Number: <span class="required" style="color: red; ">*</span></td>
            <td><input name="card_number" type="text" value="<?= $_SESSION['card_number'];?>"/></td>
          </tr>
          <tr>
            <td>Card Type: <span class="required" style="color: red; ">*</span></td>
            <td><select name="card_type">
            <option value=""></option>
            <option value="Visa">Visa</option>
            <option value="Master Card">Master Card</option>
            <option value="American Express">American Express</option>
            </select>
            </td>
          </tr>
          
          <tr>
            <td>Expiration Date: <span class="required" style="color: red; ">*</span></td>
            <td><input name="exp_date" type="text" value="<?= $_SESSION['exp_date'];?>"/></td>
          </tr>
          <tr>
            <td>CVV Security Code: <span class="required" style="color: red; ">*</span></td>
            <td><input name="pin" type="text" value="<?= $_SESSION['pin'];?>"/></td>
          </tr>
          
          
          
        </table>
        <h3>Message: </h3>
        <textarea rows="15" cols="60" name="message" type="text" style="display:block-inline;"><?= $_SESSION['message'];?></textarea>
       
        <input type="submit" value="Submit Donation" style="vertical-align:top; width:150px;"/>
      </form>
      <br />
   </div><!--end grid_16 -->
        <div class="grid_1"><p></p></div>
    </div><!--end grid_20 -->
  </div><!--end grid_24 -->
</div><!--end container__24 -->

</body>
</html>
