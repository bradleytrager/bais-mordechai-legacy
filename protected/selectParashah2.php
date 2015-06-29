<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require '../head.php'; ?>
<script>

function getParashah()
{
	var parashas=new Array(
		"Bereishit",
		"Noach",
		"Lech Lecha",
		"Vayeira",
		"Chayei Sarah",
		"Toldot",
		"Vayeitzei",
		"Vayishlach",
		"Vayeishev",
		"Mikeitz",
		"Vayigash",
		"Vayechi",
		"Shemot",
		"Va'eira",
		"Bo",
		"Beshalach",
		"Yitro",
		"Mishpatim",
		"Terumah",
		"Tetzaveh",
		"Ki Tisa",
		"Vayakhel",
		"Pekudei",
		"Vayikra",
		"Tzav",
		"Shemini",
		"Tazria",
		"Metzora",
		"Acharei Mot",
		"Kedoshim",
		"Emor",
		"Behar",
		"Bechukotai",
		"Bamidbar",
		"Naso",
		"Behaalotecha",
		"Shelach",
		"Korach",
		"Chukat",
		"Balak",
		"Pinchas",
		"Matot",
		"Massei",
		"Devarim",
		"Va'etchanan",
		"Eikev",
		"Re'eh",
		"Shoftim",
		"Ki Teitzei",
		"Ki Tavo",
		"Nitzavim",
		"Vayelech",
		"Haazinu",
		"V'Zot HaBerachah");
//var Breishit = 12;
var chumash=document.getElementById("chumash").value;
var parashahList=document.getElementById("parashah");
parashahList.options.length = 0;
var option;//=document.createElement("option");
var n, start=0, end=0;
switch (chumash)
{
	case "Breishit":
	start = 0;
	end = 12;
	break;
	case "Shemot":
	start = 12;
	end = 23;
	break;
	case "Vayikra":
	start = 23;
	end = 33;
	break;
	case "Bamidbar":
	start = 33;
	end = 43;
	break;
	case "Devarim":
	start = 43;
	end = 53;
	break;
	default:
	option=document.createElement("option");
	option.text= chumash;
	try
  {
  // for IE earlier than version 8
  parashahList.add(option,x.options[null]);
  }
catch (e)
  {
  parashahList.add(option,null);
  }
	break;
}
option=document.createElement("option");
option.text="";
try
  {
  // for IE earlier than version 8
  parashahList.add(option,x.options[null]);
  }
catch (e)
  {
  parashahList.add(option,null);
  }
for(n=start; n<end; n++){
option=document.createElement("option");
option.text=parashas[n];
try
  {
  // for IE earlier than version 8
  parashahList.add(option,x.options[null]);
  }
catch (e)
  {
  parashahList.add(option,null);
  }
}

}

</script>
<script>

$(document).ready(
function(){
  $("#parashah").change(function(){
    $("#div1").load("test_ajax.txt");
  });
});

$(document).ready(function(){
  $("#parashah").change(function(){//$("button").click(function(){
    $.ajax({                                      
      type: 'POST',
      url: 'get_shiurim_ajax.php',                  //the script to call to get data          
      data: "parashah="+$('#parashah').val(),//"parashah=Vayeira",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
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
  <div id="output">this element will be accessed by jquery and this text will be replaced</div>
<button>Get External Content</button>
    <form action="selectShiur.php" method="post"
enctype="multipart/form-data">
      <table>
      <tr>
  <td>Chumash/Series:</td>
  <td><select name="chumash" id="chumash" onchange="getParashah()" >
        <option value="Breishit">Breishit</option>
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
      </table>
      
      <br />
      
      <input type="submit" name="submit" value="Get Shiurim" />
    </form><div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>
</body>
</html>
