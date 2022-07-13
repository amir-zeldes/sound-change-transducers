<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sound Change Transducers</title>
<link href="HUC.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-type" value="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en">
<meta name="Author" content="Amir Zeldes">
<?php 
/*helper function area*/
ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.http_output', 'UTF-8');

//Add glossary links to comments and descriptions
function AddLinks($strText) {

	$strText = mb_ereg_replace('%', '&nbsp;', $strText);
	$strText = mb_ereg_replace('([Ll]aryngeal|[Pp]alatovelar|[Ll]abiovelar|[Aa]spirate|[Rr]oot)([ds]?)', '<div title="Glossary: \1s" class="LRef" onClick=OpenLink("\1s")>\1\2</div>', $strText);
	$strText = mb_ereg_replace('([Rr]eduplicat)(ion|e|ing)?', '<div title="Glossary: Reduplication" class="LRef" onClick=OpenLink("\1ion")>\1\2</div>', $strText);
	$strText = mb_ereg_replace('((?:[Cc]entum|[Ss]atem) languages)', '<div title="Glossary: Centum and Satem Languages" class="LRef" onClick=OpenLink("centum_satem")>\1</div>', $strText);
	$strText = mb_ereg_replace('((?:Ø|e|full)(?:\-| )grades?|Ablaut|[Vv]owel [Gg]radtion)', '<div title="Glossary: Vowel gradation" class="LRef" onClick=OpenLink("grades")>\1</div>', $strText);
	$strText = mb_ereg_replace('(s-mobile|mobile s)', '<div title="Glossary: s-mobile" class="LRef" onClick=OpenLink("s-mobile")>\1</div>', $strText);
	$strText = mb_ereg_replace('(PIE|Proto Indo-European)', '<div title="Glossary: s-mobile" class="LRef" onClick=OpenLink("PIE")>\1</div>', $strText);
	$strText = mb_ereg_replace('([isnoa]-stems?|suffixe?s?)', '<div title="Glossary: Stems and Suffixes" class="LRef" onClick=OpenLink("stems")>\1</div>', $strText);
	$strText = mb_ereg_replace('((?:nominative|accusative|genitive|dative|vocative|ablative|locative|instrumental|case)s?)', '<div title="Glossary: Cases" class="LRef" onClick=OpenLink("cases")>\1</div>', $strText);
	return $strText;
}

//Prevent undefined post variables 
function postvar($name) { 
    if(isset($_POST[$name])) { 
        return $_POST[$name]; 
    } else { 
            return ""; 
    } 
} 

//HTML format for IE code inputs
function FormatCode($strInputA)
{
	$strInput = $strInputA;
	$strInput = mb_ereg_replace("%.%", "", $strInput);
	$strInput = mb_ereg_replace("h1", "h<sub>1</sub>", $strInput);
	$strInput = mb_ereg_replace("h2", "h<sub>2</sub>", $strInput);
	$strInput = mb_ereg_replace("h3", "h<sub>3</sub>", $strInput);
	$strInput = mb_ereg_replace("bh(?!<)", "b<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("gwh(?!<)", "g<sup>wh</sup>", $strInput);
	$strInput = mb_ereg_replace("gh(?!<)", "g<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("dh(?!<)", "d<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("ph(?!<)", "p<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("kh(?!<)", "k<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("th(?!<)", "t<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("b/h", "b/<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("g/h", "g/<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("d/h", "d/<sup>h</sup>", $strInput);
	$strInput = mb_ereg_replace("a=", "ā", $strInput);
	$strInput = mb_ereg_replace("e=", "ē", $strInput);
	$strInput = mb_ereg_replace("i=", "ī", $strInput);
	$strInput = mb_ereg_replace("o=", "ō", $strInput);
	$strInput = mb_ereg_replace("u=", "ū", $strInput);
	$strInput = mb_ereg_replace("a/", "á", $strInput);
	$strInput = mb_ereg_replace("e/", "é", $strInput);
	$strInput = mb_ereg_replace("i/", "í", $strInput);
	$strInput = mb_ereg_replace("o/", "ó", $strInput);
	$strInput = mb_ereg_replace("u/", "ú", $strInput);
	$strInput = mb_ereg_replace("ā\^", "â", $strInput);
	$strInput = mb_ereg_replace("ē\^", "ê", $strInput);
	$strInput = mb_ereg_replace("ī\^", "î", $strInput);
	$strInput = mb_ereg_replace("ō\^", "ô", $strInput);
	$strInput = mb_ereg_replace("ū\^", "û", $strInput);	
	$strInput = mb_ereg_replace("i\^", "î", $strInput);
	$strInput = mb_ereg_replace("u\^", "û", $strInput);	
	$strInput = mb_ereg_replace("y\^", "ŷ", $strInput);
	$strInput = mb_ereg_replace("ӯ\^", "ŷ", $strInput);	
	$strInput = mb_ereg_replace("gwh", "g<sup>wh</sup>", $strInput);
	$strInput = mb_ereg_replace("kwh", "k<sup>wh</sup>", $strInput);
	$strInput = mb_ereg_replace("kw", "k<sup>w</sup>", $strInput);
	$strInput = mb_ereg_replace("gw", "g<sup>w</sup>", $strInput);
	//$strInput = mb_ereg_replace("([iu])([aeiouāēīōū])", "̭", $strInput);
	$strInput = mb_ereg_replace("([ptkbgdlmnrs>][lmnrH])([/ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("([kg][w/][lmnrH])([/ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("(^[lmnrH])([/ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("(^[lmnrH])([/ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("([ptkbgdlmnrs][lmnrH])$", '\1̥', $strInput);
	$strInput = mb_ereg_replace("([kg][w/][lmnrH])$", '\1̥', $strInput);
	$strInput = mb_ereg_replace("([ptkbgdlmnrs]h)(<sub>[123]</sub>[ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("([kg][w/]h)(<sub>[123]</sub>[ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("(^h)(<sub>[123]</sub>[ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("(^h)(<sub>[123]</sub>[ptkbgdlmnrs])", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("([ptkbgdlmnrs]h)(<sub>[123]</sub>$)", '\1̥\2', $strInput);
	$strInput = mb_ereg_replace("([kg][w/]h)(<sub>[123]</sub>$)", '\1̥\2', $strInput);
	//$strInput = mb_ereg_replace("([^<])/", "\1́", $strInput);	
	$strInput = mb_ereg_replace("</", "&", $strInput);	
	$strInput = mb_ereg_replace("/", "́", $strInput);	
	$strInput = mb_ereg_replace("&", "</", $strInput);	
	$strInput = mb_ereg_replace("(mm|ll|nn|rr)̥", '\1', $strInput); 	//Undo unwanted circles
	$strInput = mb_ereg_replace("^", "", $strInput);	
	$strInput = mb_ereg_replace("@", "̥", $strInput);
	$strInput = mb_ereg_replace("l\.", "ḷ", $strInput);
	$strInput = mb_ereg_replace("r\.", "ṛ", $strInput);
	$strInput = mb_ereg_replace("(^|[^~])w", '\1ṷ', $strInput);
	$strInput = mb_ereg_replace("~", "", $strInput);

	return $strInput;
}

function ValidateInput($strInput)
{
	if (strlen($strInput) > 20)
	{$strInput=substr($strInput,0,20);}
	$strInput = mb_ereg_replace("[^ptkbdghHwlmnrs123\./=aeiou\(\)\-]", "", $strInput);
	return $strInput;
}

function CleanUp($strInput)
{
	$strInput = mb_ereg_replace("\(.*\)", "", $strInput);
	$strInput = mb_ereg_replace("\-", "", $strInput);
	$strInput = mb_ereg_replace("a=", "ā", $strInput);
	$strInput = mb_ereg_replace("e=", "ē", $strInput);
	$strInput = mb_ereg_replace("i=", "ī", $strInput);
	$strInput = mb_ereg_replace("o=", "ō", $strInput);
	$strInput = mb_ereg_replace("u=", "ū", $strInput);
	return $strInput;
}

function ApplyRule($replace, $messageA, $string, $pat, $desc)
{
	$output = mb_ereg_replace($pat, $replace, $string);
	return $output;
}

?>
</head>
<body>

<h2>&nbsp; Sound Change Transducers</h2>
<a href="sct_intro.htm">Introduction</a> | 
<a href="IE_Correspondences.php">Sound Correspondences</a> | 
<a href="IE_Glossary.php">Indo-European Glossary</a>
<script language="javascript">


function OpenLink(strLink)
{
	strLink = strLink.toLowerCase()
	document.forms[1].elements[0].value = strLink;
	document.forms[1].action = "IE_Glossary.php#" + strLink;
	document.forms[0].hidNewLang.value = "";
	document.forms[0].hidNewText.value = "";
	document.forms[1].submit();
	
}
function ChangeWord()
{
	document.forms[0].txtInput.value = document.forms[0].cboOptions.value;
	document.forms[0].hidNewLang.value = "";
	document.forms[0].hidNewText.value = "";
	document.forms[0].submit();
}function SubmitClick()
{
	document.forms[0].hidNewLang.value = "";
	document.forms[0].hidNewText.value = "";
	document.forms[0].submit();
}
function ChangeLang()
{
	document.forms[0].cboOptions.value = "";
	document.forms[0].txtInput.value = "";
	document.forms[0].hidNewLang.value = "";
	//document.forms[0].hidNewText.value = "";
	document.forms[0].submit();
}
function RootClick(langs)
{
var arr=langs.split(":");
//document.forms[0].txtInput.value=arr[1];
document.forms[0].hidNewLang.value = arr[0];
document.forms[0].hidNewText.value = arr[1];
document.forms[0].submit();

}

</script>
<form action="sct.php" method="post">
<input type="hidden" name="hidNewLang" value="">
<input type="hidden" name="hidNewText" value="">
<script language="javascript">
document.forms[0].hidNewLang.value = "";
</script>
<table cellspacing="15"><tr><td>Language:</td><td><select name='cboLang' onChange='ChangeLang()'>
<?php

if (postvar('hidNewLang') != "") 
{
	$_POST['cboLang'] = $_POST['hidNewLang'];
}
if (postvar('hidNewText') != "") 
{
	$_POST['txtInput'] = strip_tags($_POST['hidNewText']);
}
//manage counter
/*
session_start(); 
if (!session_is_registered("counted")){ 
	session_register("counted"); 
	$count_my_page = "../hitcounter.txt";
	$hits = file($count_my_page);
	$hits[0] ++;
	$fp = fopen($count_my_page , "w");
	fputs($fp , $hits[0]);
	fclose($fp);
	echo $hits[0];
}
*/
echo "<option value='English'";
	if (postvar("cboLang") == "English") 
	{
		echo "selected";
	}
echo ">English</option>";
echo "<option value='German'";
	if (postvar("cboLang") == "German") 
	{
		echo "selected";
	}
echo ">German</option>";
echo "<option value='Greek'";
	if (postvar("cboLang") == "Greek") 
	{
		echo "selected";
	}
echo ">Greek (Attic)</option>";
echo "<option value='Latin'";
	if (postvar("cboLang") == "Latin") 
	{
		echo "selected";
	}
echo ">Latin</option>";
echo "<option value='OCS'";
	if (postvar("cboLang") == "OCS") 
	{
		echo "selected";
	}
echo ">Old Church Slavonic</option>";
echo "<option value='Sanskrit'";
	if (postvar("cboLang") == "Sanskrit") 
	{
		echo "selected";
	}
echo ">Sanskrit</option>";


?>
</select></td></tr>
<tr><td>
Proto form: </td><td>
  <input ID="txtInput" name="txtInput" type="textarea" value="<?php echo strip_tags(postvar("txtInput")); ?>" onKeyUp="TextChange()"></input>
  <a href="sct_help.htm"><img src="help.png" alt="help" style="border-left-style:solid; border-left-width:thick; border-right-style:solid; border-right-width:thick; border-color:#FFFFFF " width="15" height="15"></a>
  <input name="cmdSubmit" type="submit" onClick="SubmitClick()">
</td>
</tr>
<tr>
<td>Examples:
</td><td>
<select  ID="cboOptions" name="cboOptions" onChange="ChangeWord()">
<?php

$lang = postvar("cboLang");

$root="";
$my_root="";
$comment = "";
$trans = "";
$root_found=false;

//Function to use at the start of an element
function start($parser,$element_name,$element_attrs)
{
  global $My_XML_Handler;
  if ($My_XML_Handler=="start2")
  {
  start2($parser,$element_name,$element_attrs);
  }
  else
  {
	global $my_root;
	global $trans, $comment, $root;
	global $root_string, $root_found, $root_final;
	global $options;
	
	$lang = (string) postvar("cboLang");

 if ((string) $element_name=="W") 
 	{

    	$form = (string) $element_attrs['FORM'];
    	$value = (string) $element_attrs['FORM'];
		$langs = (string) $element_attrs['LANG'];

		if (strlen($lang)<1)
		{
			$lang="English"; //Sets default language for first load
		}
		if (strpos($langs, $lang) !== false)
		{
			if (isset($element_attrs['RES']))
				{$res =  mb_ereg_replace("(́|͂)", "", (string) $element_attrs['RES']) ;}
			else
				{$res="";}
			$options[mb_ereg_replace("[\-]","",$res)] =  "<option value='" . strip_tags($value) . "'";
			if (postvar("txtInput") == $value && $lang == $langs) 
			{
				$options[mb_ereg_replace("[\-]","",$res)] = $options[mb_ereg_replace("[\-]","",$res)] . "selected";
				$root=$my_root;
				$root_found=true;
				if (isset($element_attrs['COMMENT']))
				{
				$comment = "<br>Note:<br>".  AddLinks((string) $element_attrs['COMMENT']);
				}
				if (isset($element_attrs['TRANS']))
				{
				$trans = "<i>" . (string) $element_attrs['TRANS'] . "</i>";
				}
			}

			$options[mb_ereg_replace("[\-]","",$res)] = $options[mb_ereg_replace("[\-]","",$res)] . ">" . mb_ereg_replace("[\-]","",$res) . "</option>";
		}
		else //different language
		{
			if ($form!="")
			{
				if (isset($element_attrs['RES']))
				{
					$res = (string) $element_attrs['RES'];
				}
				else
				{
					$res="";
				}
					//$root_string = $root_string . "<li><table border=1><tr><td class='UniFont' width=50 style='vertical-align:middle'>" .  $langs . ":</td><td class='UniFont' style='vertical-align:middle'><a class='sups' href='#' onClick=RootClick('" . $langs . ":" . $form . "')><div class='sups'>"  . $res . " &lt; *" . FormatCode($form) . "</div></a></td></tr></table></li>"; 
					$root_string = $root_string . "<li><span width=50 style='vertical-align:middle;'>" .  $langs . ":</span> <span class='UniFont' style='vertical-align:middle'><a class='sups' href='#' onClick=RootClick('" . $langs . ":" . $form . "')>"  . $res . " &lt; *" . FormatCode($form) . "</a></span></li>"; 
			}
		}
	}
	elseif ((string) $element_name=="R")
	{
		if ($root_found==true)
		{
			$root_final=$root_string;
			$root_found=false;
		}
		else
		{
			$root_string="";
		}
		if (isset($element_attrs['ROOT']))
		{
			$my_root = (string) $element_attrs['ROOT'];
		}
	}
  }
}


//Initialize the XML parser
$parser=xml_parser_create();
//Function to use at the end of an element
function stop($parser,$element_name) {
  global $message;
  global $desc;
  global $input;
  global $prevform;
  global $options;
  
   	if ((string) $element_name=="RULESET" && $prevform!=$input) 
 	{
		echo "<tr><td height=24 style='vertical-align:baseline; border-style:solid; width:150; font-family:" . '"Arial Unicode MS"' .", Lucida Sans Unicode, Tahoma, Gentium, Verdana, sans-serif; font-size:14px; white-space:nowrap;'>";
		echo FormatCode($input);
		echo "</td><td style='border-style:solid; white-space:normal;'>";
		if ($desc!="")
		{
			echo "<a class='hint' href='#'> <span class='note'>" . AddLinks($desc) . "</span>" . $message . "</a></td></tr>";
		}
		else
		{
			echo $message . "</td></tr>";
		}

	}
	elseif ((string) $element_name=="WORDLIST") 
	{

		uksort($options, "SortCapIgnore");
		foreach ($options as $key => $val) 
		{
		   echo  $val . "\n";
		}

	}

}  
function SortCapIgnore($a, $b)
{
$a = preg_replace('\-\(\)', '', $a);
$b = preg_replace('\-\(\)', '', $b);
$a = strtolower($a);
$b = strtolower($b);

return strcasecmp($a, $b);
}
//Function to use when finding character data
function char($parser,$data) {}
//Specify element handler
xml_set_element_handler($parser,"start","stop");
//Specify data handler
xml_set_character_data_handler($parser,"char");



//Open XML file
$fp=fopen("../../words.xml","r");
//Read data
while ($data=fread($fp,4096))
  {
  xml_parse($parser,$data,feof($fp)) or 
  die (sprintf("XML Error: %s at line %d", 
  xml_error_string(xml_get_error_code($parser)),
  xml_get_current_line_number($parser)));
  }

if ($root_found==true && $root_string!="" && $root_final=="")
		{$root_final=$root_string;} //last entry in word list doesn't print root in parse loop but here



 ?> 
</select></td></tr>
<tr><td>
<p>Translation:</p></td><td width="300">
<div ID="Translation" style="border-style:solid; padding-left::20" width="98%"><div style="border-width:thick; border-style:solid; border-color:#FFFFFF">
<?php
echo $trans . "<br>";
echo $comment;
?></div>
</div>
</td></tr>
<tr><td>Derivation:

</td><td><div ID="Results" style="border-style:solid">

<?php

switch ($lang)
{
case "OCS":
	$xmlpath = "../../OCS.xml";
	break;
case "German":
	$xmlpath = "../../German.xml";
	break;
case "English":
	$xmlpath = "../../English.xml";
	break;
case "Sanskrit":
	$xmlpath = "../../Sanskrit.xml";
	break;
case "Latin":
	$xmlpath = "../../Latin.xml";
	break;
default:
	$xmlpath = "../../Greek.xml";
}

$input = strip_tags(postvar("txtInput"));

//Function to use at the start of an element
function start2($parser,$element_name,$element_attrs)
{

  global $input; 
  global $trans;
  global $message;
  global $desc;
  global $prevform;
 	if ((string) $element_name=="RULESET") 
 	{
		$prevform = $input;
    	$message = (string) $element_attrs['MESSAGE'];
		if (isset($element_attrs['DESC']))
	    {$desc= (string) $element_attrs['DESC'];}
		else
		{$desc="";}
	}
	elseif ((string) $element_name=="RULE")
	{	
		$input = ApplyRule((string) $element_attrs['REPLACE'], $message, $input, (string) $element_attrs['PAT'], $desc);  
	}
	elseif ((string) $element_name=="STAGE")
	{
		//echo "<tr><td colspan=2  style='border-style:solid; text-align:center; font-style:italic'>" . (string) $element_attrs['NAME'] . " Stage</td></tr>";
	}

}

$parser3=xml_parser_create();
//Specify element handler
xml_set_element_handler($parser3,"start2","stop");
//Specify data handler
xml_set_character_data_handler($parser3,"char");

$input = ValidateInput($input);
echo "<table style='border-style:solid; width:100%' cellpadding=3><tr><td class='UniFont' height=24 style='vertical-align:baseline; border-style:solid; width:150; font-family:" . '"Arial Unicode MS"' .", Lucida Sans Unicode, Tahoma, Gentium, Verdana, sans-serif; font-size:14px;'>" . FormatCode($input) . "</td><td style='border-style:solid; font-family:" . '"Arial Unicode MS"' .", Gentium, Lucida Sans Unicode, Verdana, sans-serif; font-size:14px;'>";
if ($input != "" && $input != " ") {
echo "Protoform";
}
echo "</td>";
$input = CleanUp($input);

  //Open XML file
$fq=fopen($xmlpath,"r");
  //Read data
$My_XML_Handler="start2";
while ($data2=fread($fq,4096))
  {
  xml_parse($parser3,$data2,feof($fq)) or 
  die (sprintf("XML Error: %s at line %d", 
  xml_error_string(xml_get_error_code($parser3)),
  xml_get_current_line_number($parser3)));
  }
//Free the XML parser
xml_parser_free($parser);
//Free the XML parser
xml_parser_free($parser3);


echo "</table>";

?>

</div>
</td></tr>
</table>

</form>
<form method="post" action="IE_Glossary.php"><input type="hidden" ID="nav" name="nav" value=""></input></form>
<?php 
if ($root_final!="")
{echo "See this root in other languages:<br><ul>" . $root_final . "</ul>";} ?>
<br>
&copy; 2008 - 2009 <a href="http://corpling.uis.georgetown.edu/amir">Amir Zeldes </a>
</body>
</html>