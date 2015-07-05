

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online MP3 Audio Torah Shiurim by Marty Goodman: Bais-Mordechai.com </title>
<meta name="description" content="Hundreds of free online mp3 audio Torah classes given by Marty Goodman as featured on Chabad.org." />
<? require '../head.php';?>
<script>


function validateForm()
{
var file=document.forms["fileUpload" ]["file"].value;

if (file==null||file==""){
  alert("You must select a file!");
  return false;
  }
}

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
		"Acharei",
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
var parashahList=document.getElementById("parashah");
var suffix=document.getElementById("suffix");
var chumash=document.getElementById("chumash").value;

parashahList.options.length = 0;
var option;//=document.createElement("option");
var n, start, end;
switch (chumash)
{
	case "Bereishit":
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
//setInterval(function() { ObserveInputValue($('#input_id').val()); }, 100);
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
<form name="fileUpload" action="upload_file.php" method="post"
enctype="multipart/form-data" onsubmit="return validateForm()">
      <table>
  <tr>
  <td>Filename:</td>
  <td><input type="file" name="file" id="file" /></td>
  </tr>
      <tr style="display:none">
  <td>Series:</td>
  <td><select name="series" id="series" data-bind="options:series, optionsText:'label', optionsValue: 'value', value:selectedSeries">
      
       </select></td>
  </tr> 
      <tr >
  <td>Chumash/Category:</td>
  <td><select name="chumash" id="chumash" data-bind="options:chumashim, optionsText:'name', optionsValue'name', value:selectedChumash">
      
      </select></td>
  </tr> 
    
      <tr data-bind="visible:selectedSeries() == 'mp3/NC/'">
  <td>Parashah:</td>
  <td><select name="parashah" id="parashah" data-bind="options:displayParashos">
      </select></td>
  </tr>
      <tr >
  <td>Full Title</td>
  <td><input name="title" id="title" type="text" /></td>
  </tr>
      </table>
      <input type="submit" name="submit" value="Upload" style=" width:130px; font-size:18px" />
      <h3>Description:</h3>
      <textarea rows="5" cols="55" name="description" type="text"></textarea>
      <br /><br  />
      
     
    </form> 

 <div class="grid_1"><p></p></div>
 
</div>
</div>
	

</div></div>
<script type="text/javascript" src="../js/knockout.js"></script>
<script type="text/javascript" src="../js/parashos.js"></script>
<script type="text/javascript">
function setTitle(){
	var parashah = $('select[name="parashah"]').val();
	$('input[name="title"]').val(parashah);
}

$(function(){
	vm = new viewModel();
	ko.applyBindings(vm);

	setTitle();
	$('select[name="parashah"]').change(function(){
		setTitle();
	});
});
	function viewModel(){
		var self = this;
		self.series = ko.observableArray([
			{value:'mp3/NC/', label:'New Series'}, 
			{value:'mp3/chazanus/', label:'Leading Services'},
			{value:'mp3/thoughts/', label:'My Thoughts'}
		]);
		
		self.chumashim = chumashim;
		self.selectedChumash = ko.observable('Bereishit');
		self.displayParashos = ko.computed(function(){
			return parashos[self.selectedChumash()];
		});
		self.selectedSeries = ko.computed(function(){
			var selectedSeries;
			$.each(chumashim, function(index, value){
				if(value.name == self.selectedChumash()){
					selectedSeries = value.dir;
				}

			});
			return selectedSeries;
		});
	}
	

</script>
</body>
</html>