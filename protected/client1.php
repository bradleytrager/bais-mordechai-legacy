<!---------------------------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
by Trystan Lea : openenergymonitor.org : GNU GPL

I recommend going to http://jquery.com/ for the great documentation there about all of this
---------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head>
<?php require "../head.php"; ?>
<script src="jquery.js"></script>

<script>

$(document).ready(
function(){
  $("button").click(function(){
    $("#div1").load("test_ajax.txt");
  });
});

$(document).ready(function(){
  $("button").click(function(){
    $.ajax({                                      
      url: 'get_shiurim_ajax.php?',                  //the script to call to get data          
      data: "parashah=Vayeira",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var d0 = data[0];              //get id
        var d1 = data[1]; 
        var d2 = data[2];              //get id
        var d3 = data[3]; 
        
        
                  //get name
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        // 3) Update html content
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        $('#output').html("<b>d0: </b>"+d0+"<b> d1: </b>"+d1+"<b>d2: </b>"+d2+"<b>d3: </b>"+d3);}});
        });
    });

</script>
</head>
<body>
<h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text will be replaced</div>


<button>Get External Content</button>
<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
</body>
</html>



<!-- 
<html>
  <head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
  </head>
  <body>


  <h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text will be replaced</div>

  <script id="source" language="javascript" type="text/javascript">

  $(document).ready(
  	function () {

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-
    $.ajax({                                      
      url: 'get_shiurim_ajax.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var d0 = data[0];              //get id
        var d1 = data[1]; 
        var d2 = data[2];              //get id
        var d3 = data[3]; 
        
        
                  //get name
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        // 3) Update html content
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        $('#output').html("<b>d0: </b>"+d0+"<b> d1: </b>"+d1+"<b>d2: </b>"+d2+"<b>d3: </b>"+d3);}});
        }
  );
  });
//$.ajax({
//       url: 'api.php', data: "", dataType: 'json',  success: function(rows)
//       {
//       for (var i in rows)
//       {
//       var row = rows[i];
//       
//       var id = row[0];
//       var vname = row[1];
//       $('#output').append("<b>id: </b>"+id+"<b> name: </b>"+vname)
//       .append("<hr />");
//       } 
//       } 
//       });
  </script>
   
  </body>
</html>  
 -->
