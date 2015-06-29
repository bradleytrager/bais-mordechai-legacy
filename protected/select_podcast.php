<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require '../head.php'; ?>
<title>Create Podcast</title>
<script src="getParashah.js" ></script>


<script>

$(document).ready(
function(){
  $("#parashah, #chumash").change(function(){
    $("#div1").load("test_ajax.txt");
  });
});

$(document).ready(function(){
  getParashah()
  $.ajax({                                      
      type: 'POST',
      url: 'get_shiurim_ajax1.php',                  //the script to call to get data          
      data: "parashah="+$('#parashah').val(),//"parashah=Vayeira",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
      $('#shiur').html("<br/>");
        
      for (var i in data){
        var row = data[i]
        var title = row['filename'];              //get id
        
        
        
                  //get name
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        // 3) Update html content
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        $('#shiur').append("<option value=\""+title+"\">"+title+"</option>");}}});
  
  
  $("#parashah, #chumash").change(function(){//$("button").click(function(){
    $.ajax({                                      
      type: 'POST',
      url: 'get_shiurim_ajax1.php',                  //the script to call to get data          
      data: "parashah="+$('#parashah').val(),//"parashah=Vayeira",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
      $('#shiur').html("<br/>");
        
      for (var i in data){
        var row = data[i]
        var title = row['filename'];              //get id
        
        
        
                  //get name
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        // 3) Update html content
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        $('#shiur').append("<option value=\""+title+"\">"+title+"</option>");}}});
        });
    });

</script>
</head>

<body onload="getParashah()">
<div class="container_24 ">
  <?
require '../header.php';

?>
<? require '../top_menu.php';?>
<div class="grid_24 content">
<? require '../side_bar.php';?>
<div class="grid_20 alpha omega">
  <div class="grid_1"><p></p></div>
  <div class="grid_16 prefix_1 suffix_1 padding_1 down_1 up_1 boxed text">
  

    <form action="create_podcast.php" method="post"
enctype="multipart/form-data">
      <table>
      <tr>
  <td>Chumash/Series:</td>
  <td><select name="chumash" id="chumash" onchange="getParashah()" >
        <option value="Bereishit">Bereishit</option>
        <option value="Shemot">Shemot</option>
        <option value="Vayikra">Vayikra</option>
        <option value="Bamidbar">Bamidbar</option>
        <option value="Devarim">Devarim</option>
        <option value="Davening">Davening</option>
        <option value="Tehillim">Tehillim</option>
        <option value="The Laws of Brochos">The Laws of Brochos</option>
      </select></td>
  </tr> 
    
      <tr>
  <td>Parasha/Series:</td>
  <td><select name="parashah" id="parashah">
      </select></td>
  </tr>
  <!--<tr><td>Shiur</td>
  <td><select name="shiur" id="shiur"> Shiur</select></td>
  </tr>-->
      </table>
      
      <br />
      
      <input type="submit" name="submit" value="Create Podcast" />
    </form>
  
    <div class="grid_1"><p></p>
    
    
    </div>
 
</div>
</div>
	

</div></div>
</body>
</html>
