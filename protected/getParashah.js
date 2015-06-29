
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
		"Beha'alotecha",
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
		"Ha'azinu",
		"Vezot Hab'rachah");
//var Breishit = 12;
var chumash=document.getElementById("chumash").value;
var parashahList=document.getElementById("parashah");
parashahList.options.length = 0;
var option;//=document.createElement("option");
var n, start=0, end=0;
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
	end = 54;
	break;
	default:
	option=document.createElement("option");
	option.text= chumash;
	try
  	{
  		// for IE earlier than version 8
  		parashahList.add(option,parashahList.options[null]);
  	}
		catch (e)
  	{
  		parashahList.add(option,null);
  	}
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