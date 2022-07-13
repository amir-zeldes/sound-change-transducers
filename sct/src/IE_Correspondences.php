<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>PIE Correspondences</title>
<link href="HUC.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-type" value="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en">
<meta name="Author" content="Amir Zeldes">
<script language="javascript">
function OpenLink(strLink)
{
	strLink = strLink.toLowerCase()
	document.forms[0].elements[0].value = strLink;
	document.forms[0].action = "IE_Glossary.php#" + strLink;
	document.forms[0].submit();
	
}
</script>
<?php 
/*helper function area*/

//Add glossary links to comments and descriptions
function AddLinks($strText) {

	$strText = mb_ereg_replace('%', '&nbsp;', $strText);
	$strText = mb_ereg_replace('([Ll]aryngeal|[Pp]alatovelar|[Ll]abiovelar|[Aa]spirate|[Rr]oot)([ds]?)', '<div title="Glossary: \1s" class="LRef" onClick=OpenLink("\1s")>\1\2</div>', $strText);
	$strText = mb_ereg_replace('([Rr]eduplicat)(ion|e|ing)?', '<div title="Glossary: Reduplication" class="LRef" onClick=OpenLink("\1ion")>\1\2</div>', $strText);
	$strText = mb_ereg_replace('((?:[Cc]entum|[Ss]atem) languages)', '<div title="Glossary: Centum and Satem Languages" class="LRef" onClick=OpenLink("centum_satem")>\1</div>', $strText);
	$strText = mb_ereg_replace('((?:״|e|full)(?:\-| )grades?|Ablaut|[Vv]owel [Gg]radtion)', '<div title="Glossary: Vowel gradation" class="LRef" onClick=OpenLink("grades")>\1</div>', $strText);
	$strText = mb_ereg_replace('(s-mobile|mobile s)', '<div title="Glossary: s-mobile" class="LRef" onClick=OpenLink("s-mobile")>\1</div>', $strText);
	$strText = mb_ereg_replace('(PIE|Proto Indo-European)', '<div title="Glossary: Proto Indo-European" class="LRef" onClick=OpenLink("PIE")>\1</div>', $strText);
	$strText = mb_ereg_replace('([isnoa]-stems?|suffixe?s?)', '<div title="Glossary: Stems and Suffixes" class="LRef" onClick=OpenLink("stems")>\1</div>', $strText);
	$strText = mb_ereg_replace('((?:nominative|accusative|genitive|dative|vocative|ablative|locative|instrumental|case)s?)', '<div title="Glossary: Cases" class="LRef" onClick=OpenLink("cases")>\1</div>', $strText);
	return $strText;
}

?>
</head>

<body class="UniFontTab">
<h2>Indo-European Sound Correspondences</h2>
<p><a href="sct.php">Sound Change Transducers</a> | 
  <a href="IE_Glossary.php">Indo-European Glossary</a>
</p>

<p>The table on this page gives the main correspondences between the sounds of several Indo-European languages, as well as their reconstructed origin in Proto Indo-European (PIE). Where multiple symbols appear, hovering over them will show under what circumstances that correspondence is found. The first symbol stands for the development in all other cases. For the symbols used see the notes under the table.</p>
<p>These correspondences are not exhaustive, and represent rather an overview of the main developments - especially some particular groups of sounds (e.g. consonant clusters or changes conditioned by vowels in other syllables) may have special developments which have not been listed. The table also gives a good idea of the derivations produced on the <a href="sct.php">Sound Change Transducers</a> page, which generally uses rules in line with these correspondences. The table is chiefly based on R.S.P. Beekes' <em>Comparative Indo-European Linguistics: An Introduction</em> (John Benjamins, 1995).</p>
If you're trying to find the proto-form of a word in one of the modern languages, check out this <a onClick="document.getElementById('ex1').style.display='block'" href='#'>example...</a><br><br><div ID="ex1" class="example">
<ul>
  <li class="example_bullet">Find the phonemes (i.e. distinctive sounds) that make up a word in the table (remember: sounds and spelling can be two different things - use the symbol legend below). For instance, Eng. <em>fish</em> has three phonemes: /f/;/i/;/&scaron;/.</li>
<li class="example_bullet">Try to figure out what sources these phonemes could have:
  <ul type="disc">
    <li type="disc">English /f/ only appears on the row of PIE *p, and is said to appear initially.</li>
	<li class="example_bullet">/i/ has several possible sources: *e, *i, and *u. *e can be ruled out since a nasal doesn't follow. </li>
	<li class="example_bullet">/&scaron;/ can only come from *sk.</li>
</ul>
</li>
  <li class="example_bullet">We now have two possible proto-forms: *pisk- and *pusk- (note that English generally drops old case endings). Now try to see what these forms would look like in another language:
    <ul>
      <li class="example_bullet">German would have the same developments, thus <em>Fisch</em> - the word is at least West Germanic</li>
    <li class="example_bullet">Latin would preserve both pisk and pusk. We look in a Latin dictionary and find the word <em>piscis</em> which means &quot;fish&quot; (compare the star sign <em>pisces</em>, a Latin loan word, lit. &quot;fishes&quot;). </li>
    <li class="example_bullet">To know if we have a *k or a *k&#833; in the proto-form we need a language that distinguishes them (which Latin and English don't). We try to reconstruct a Sanskrit form: *pisk&#833;- would give picc<sup>h</sup>-; we find this root in a Sanskrit dictionary in the word picc<sup>h</sup>ala- "slippery". Semantically the connection is reasonable - it seems that at least the root is Proto Indo-European and its protoform was *pisk&#833;.</li>
	<li>You can use the <a href="sct.php">Sound Change Transducers</a> page to test various proto-forms and see what words they might produce in the different languages.</li>
    </ul>
  </li>
  	<li class="example_bullet">In general, it's important to remember that not all forms can be derived directly from a proto-form - some words were created late by analogy or loaned from other languages, in which case these correspondences will not hold</li>	
</ul>
 <a onClick="document.getElementById('ex1').style.display='none'" href='#'>...hide</a></div>


 <br>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse">
  <tr>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>PIE </strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>Sanskrit </strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>Greek </strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>OCS </strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>Latin </strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>English</strong></td>
    <td style="border-bottom-style:solid; border-bottom-width:medium; border-bottom-color:#000000" valign="top" class="UniFontTab"><strong>German </strong></td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*p </td>
    <td valign="top" class="UniFontTab">p, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before h<sub>2</sub>V'); ?> </span>p<sup>h</sup></a> </td>
    <td valign="top" class="UniFontTab">p </td>
    <td valign="top" class="UniFontTab">p </td>
    <td valign="top" class="UniFontTab">p </td>
    <td valign="top" class="UniFontTab">v, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after s'); ?> </span>p</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially or after PIE stress'); ?> </span>f</a> </td>
    <td valign="top" class="UniFontTab">b, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after s'); ?> </span>p</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially or after PIE stress'); ?> </span>f</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*b </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">p </td>
    <td valign="top" class="UniFontTab">pf, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels'); ?> </span>f</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*b<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">b<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">p<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">b, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially'); ?> </span>f</a> </td>
    <td valign="top" class="UniFontTab">b </td>
    <td valign="top" class="UniFontTab">b </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*t </td>
    <td valign="top" class="UniFontTab">t, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before h<sub>2</sub>V'); ?> </span>t<sup>h</sup></a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('following a retroflex'); ?> </span>&#7789;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('following a retroflex and before h<sub>2</sub>V'); ?> </span>&#7789;<sup>h</sup></a></td>
    <td valign="top" class="UniFontTab">t, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before i except after n'); ?> </span>s</a> </td>
    <td valign="top" class="UniFontTab">t </td>
    <td valign="top" class="UniFontTab">t </td>
    <td valign="top" class="UniFontTab">&eth;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially before consonant'); ?> </span>&thorn;</a> </td>
    <td valign="top" class="UniFontTab">d, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after unstressed vowel'); ?> </span>t</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*d </td>
    <td valign="top" class="UniFontTab">d, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('following a retroflex'); ?> </span>ḍ</a></td>
    <td valign="top" class="UniFontTab">d, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before j'); ?> </span>z</a> </td>
    <td valign="top" class="UniFontTab">d </td>
    <td valign="top" class="UniFontTab">d, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before ṷ'); ?> </span>b</a> </td>
    <td valign="top" class="UniFontTab">t </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('a [ts] sound, usually spelled z'); ?> </span>c</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels and finally after vowel'); ?> </span>ss</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*d<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">d<sup>h</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('following a retroflex'); ?> </span>ḍ<sup>h</sup></a></td>
    <td valign="top" class="UniFontTab">t<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">d </td>
    <td valign="top" class="UniFontTab">d, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially'); ?> </span>f</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before l or r and after u or r'); ?> </span>b</a> </td>
    <td valign="top" class="UniFontTab">d </td>
    <td valign="top" class="UniFontTab">t </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*k&#833;</td>
    <td valign="top" class="UniFontTab">s </td>
    <td valign="top" class="UniFontTab">k </td>
    <td valign="top" class="UniFontTab">s </td>
    <td valign="top" class="UniFontTab">k </td>
    <td valign="top" class="UniFontTab">h </td>
    <td valign="top" class="UniFontTab">h </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*g&#833;</td>
    <td valign="top" class="UniFontTab">j </td>
    <td valign="top" class="UniFontTab">g </td>
    <td valign="top" class="UniFontTab">z </td>
    <td valign="top" class="UniFontTab">g </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>č</a> </td>
    <td valign="top" class="UniFontTab">k </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*g&#833;<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">h </td>
    <td valign="top" class="UniFontTab">k<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">z </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels and initially'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before or after front vowels'); ?> </span>y</a> </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels, spelled ch'); ?> </span>x</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*k</td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>c</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before h<sub>2</sub>V'); ?> </span>k<sup>h</sup></a> </td>
    <td valign="top" class="UniFontTab">k </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>č</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>c</a> </td>
    <td valign="top" class="UniFontTab">k </td>
    <td valign="top" class="UniFontTab">h </td>
    <td valign="top" class="UniFontTab">h </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*g</td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>j</a> </td>
    <td valign="top" class="UniFontTab">g </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>&#382;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>dz</a> </td>
    <td valign="top" class="UniFontTab">g </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>&#269;</a> </td>
    <td valign="top" class="UniFontTab">k </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*g<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">g<sup>h</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">k<sup>h</sup> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>&#382;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>dz</a> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels and initially'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before or after front vowels'); ?> </span>y</a> </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels, spelled ch'); ?> </span>x</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*k<sup>ṷ</sup></td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>c</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before h<sub>2</sub>V'); ?> </span>k<sup>h</sup></a> </td>
    <td valign="top" class="UniFontTab">p, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>t</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before and after u'); ?> </span>k</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before velars'); ?> </span>ku</a> </td>
    <td valign="top" class="UniFontTab">k, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>č</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>c</a> </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('spelled qu'); ?> </span>k<sup>ṷ</sup></a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('spelled c, before u, o and consonants'); ?> </span>k</a> </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('spelled wh, still pronounced hw in some places'); ?> </span>w</a>,  <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels and before t'); ?> </span>&Oslash;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before o and u'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('spelled w'); ?> </span>v</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels'); ?> </span>h</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('spelled ch, before t'); ?> </span>x</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*g<sup>ṷ</sup></td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>j</a> </td>
    <td valign="top" class="UniFontTab">b, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before e'); ?> </span>d</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before and after u'); ?> </span>g</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before velars'); ?> </span>gu</a> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>&#382;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>dz</a> </td>
    <td valign="top" class="UniFontTab">v, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before o, u or a consonant'); ?> </span>g</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after n'); ?> </span>gu</a> </td>
    <td valign="top" class="UniFontTab">k<sup>ṷ</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before o, u'); ?> </span>k</a> </td>
    <td valign="top" class="UniFontTab">k<sup>v</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before o, u'); ?> </span>k</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*g<sup>ṷh</sup> </td>
    <td valign="top" class="UniFontTab">g<sup>h</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels and i̭'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">p<sup>h</sup>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>t<sup>h</sup></a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before and after u'); ?> </span>k<sup>h</sup></a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before velars'); ?> </span>k<sup>h</sup>u</a> </td>
    <td valign="top" class="UniFontTab">g, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before front vowels'); ?> </span>&#382;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before monophthongized oi, ai, and after i, e and en'); ?> </span>dz</a> </td>
    <td valign="top" class="UniFontTab">v, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before o, u or a consonant'); ?> </span>g</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after n'); ?> </span>gu</a> </td>
    <td valign="top" class="UniFontTab">w, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after n'); ?> </span>g</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after n'); ?> </span>g</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*s </td>
    <td valign="top" class="UniFontTab">s, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after r, u, k or i, except in final position or before r.'); ?> </span>&#7779;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('along with following ḱ (sḱ > cc<sup>h</sup>)'); ?> </span>cc<sup>h</sup></a></td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('in some positions with compensatory lengthening'); ?> </span>&Oslash;</a> , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before or after stops and in final position'); ?> </span>s</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before initial vowel'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">s, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after r, u, k, i and before a non diphthong back vowel'); ?> </span>x</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks(' after r, u, k, i and before a front vowel or before i̭'); ?> </span>&scaron;</a> </td>
    <td valign="top" class="UniFontTab">s, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels'); ?> </span>r</a> </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially and after the stress'); ?> </span>s</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after a stressed vowel and before another vowel'); ?> </span>z</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between two vowels where the first is not stressed'); ?> </span>r</a> , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('along with a following k (sk > š)'); ?> </span>š</a> </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially and after the stress'); ?> </span>s</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after a stressed vowel and before another vowel'); ?> </span>z</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between two vowels where the first is not stressed'); ?> </span>r</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before t, p, l, r in  same syllable; with following k: sk > š'); ?> </span>š</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*l </td>
    <td valign="top" class="UniFontTab">r </td>
    <td valign="top" class="UniFontTab">l, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-initially'); ?> </span>la</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic initially '); ?> </span>al</a></td>
    <td valign="top" class="UniFontTab">l, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>lu</a> </td>
    <td valign="top" class="UniFontTab">l, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ol</a> </td>
    <td valign="top" class="UniFontTab">l, 


 <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ʌl</a> </td>
    <td valign="top" class="UniFontTab">l, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ul</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*r </td>
    <td valign="top" class="UniFontTab">r </td>
    <td valign="top" class="UniFontTab">r, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-initially'); ?> </span>ra</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic initially '); ?> </span>ar</a></td>
    <td valign="top" class="UniFontTab">r, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ru</a> </td>
    <td valign="top" class="UniFontTab">r, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>or</a> </td>
    <td valign="top" class="UniFontTab">r, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ʌr</a> </td>
    <td valign="top" class="UniFontTab">r, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ur</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*n </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('following a retroflex'); ?> </span>ṇ</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before velars'); ?> </span>ṅ</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after palatals'); ?> </span>ñ</a> </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic or along with e, i or u before a consonant'); ?> </span>ę</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('along with preceding a or o before a consonant'); ?> </span>ǫ</a> </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>en</a> </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>ʌn</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before s'); ?> </span>&Oslash; </a> </td>
    <td valign="top" class="UniFontTab">n, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>un</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*m </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before consonants'); ?> </span>ṃ</a> </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic or along with e, i or u before a consonant'); ?> </span>ę</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('along with preceding a or o before a consonant'); ?> </span>ǫ</a> </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>em</a> </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-finally'); ?> </span>ʌm</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic finally'); ?> </span>n</a>,  <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before s'); ?> </span>&Oslash;</a> </td>
    <td valign="top" class="UniFontTab">m, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-finally'); ?> </span>um</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic finally'); ?> </span>n</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*h<sub>1</sub> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>e</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially along with following i̭'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-initially'); ?> </span>a</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*h<sub>2</sub> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-initially'); ?> </span>a</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*h<sub>3</sub> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>o</a> </td>
    <td valign="top" class="UniFontTab">&Oslash; </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic'); ?> </span>a</a> </td>
    <td valign="top" class="UniFontTab">&Oslash;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('when syllabic non-initially'); ?> </span>a</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*i </td>
    <td valign="top" class="UniFontTab">i, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>y</a> </td>
    <td valign="top" class="UniFontTab">i, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels'); ?> </span>&Oslash;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially'); ?> </span>z</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially along with preceding laryngeal'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">&#301;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>j</a> </td>
    <td valign="top" class="UniFontTab">i, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('between vowels'); ?> </span>&Oslash;</a> </td>
    <td valign="top" class="UniFontTab">i, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>y</a> </td>
    <td valign="top" class="UniFontTab">i, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>j</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*u </td>
    <td valign="top" class="UniFontTab">u, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>v</a> </td>
    <td valign="top" class="UniFontTab">u, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>&Oslash;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('initially along with preceding laryngeal'); ?> </span>h</a> </td>
    <td valign="top" class="UniFontTab">&#365;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>v</a> </td>
    <td valign="top" class="UniFontTab">u, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>v</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('in medial open syllable'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">ʌ , <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>w</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>i</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had the vowel a'); ?> </span>o</a> </td>
    <td valign="top" class="UniFontTab">u, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before vowel'); ?> </span>v</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable hadl i'); ?> </span>&uuml;</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had the vowel a'); ?> </span>o</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('by later i-mutation of the o development'); ?> </span>&ouml;</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*e </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">e </td>
    <td valign="top" class="UniFontTab">e </td>
    <td valign="top" class="UniFontTab">e, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('in medial open syllable'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">e, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before n or if following syllable had i'); ?> </span>i</a> </td>
    <td valign="top" class="UniFontTab">e, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before n or if following syllable had i'); ?> </span>i</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*o </td>
    <td valign="top" class="UniFontTab">a, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('in open syllables'); ?> </span>&#257;</a> </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">&aelig;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before a nasal'); ?> </span>o</a> </td>
    <td valign="top" class="UniFontTab">a, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before a nasal'); ?> </span>o</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*&#275; or eh<sub>1</sub> </td>
    <td valign="top" class="UniFontTab">&#257;</td>
    <td valign="top" class="UniFontTab">&#275;</td>
    <td valign="top" class="UniFontTab"> ĕ </td>
    <td valign="top" class="UniFontTab">&#275;</td>
    <td valign="top" class="UniFontTab">&#299;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before nasals'); ?> </span>&#363;</a> </td>
    <td valign="top" class="UniFontTab">&#257;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before nasals'); ?> </span>&#333;</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*&#333; or eh<sub>3</sub> </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">&#363;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>&#299;</a> </td>
    <td valign="top" class="UniFontTab">&#363;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span> ĕ </a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*h<sub>2</sub>e (=a) </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">&aelig;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before a nasal'); ?> </span>o</a> </td>
    <td valign="top" class="UniFontTab">a, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('before a nasal'); ?> </span>o</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*eh<sub>2</sub>(=&#257;)</td>
    <td valign="top" class="UniFontTab">&#257;</td>
    <td valign="top" class="UniFontTab">&#275;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('after r, i or e'); ?> </span>&#257;</a> </td>
    <td valign="top" class="UniFontTab">a </td>
    <td valign="top" class="UniFontTab">&#257;</td>
    <td valign="top" class="UniFontTab">&#363;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>&#299;</a> </td>
    <td valign="top" class="UniFontTab">&#363;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span> ĕ </a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*ei </td>
    <td valign="top" class="UniFontTab">e </td>
    <td valign="top" class="UniFontTab">ei </td>
    <td valign="top" class="UniFontTab">i </td>
    <td valign="top" class="UniFontTab">&#299;</td>
    <td valign="top" class="UniFontTab">ai </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('usually spelled ei'); ?> </span>ai</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*oi </td>
    <td valign="top" class="UniFontTab">e </td>
    <td valign="top" class="UniFontTab">oi </td>
    <td valign="top" class="UniFontTab"> ĕ </td>
    <td valign="top" class="UniFontTab">&#363;</td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('diphthong pronounced ow, usually spelled oCe'); ?> </span>ou</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>&#299;</a></td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('usually spelled ei'); ?> </span>ai</a> </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*h<sub>2</sub>ei (=ai) </td>
    <td valign="top" class="UniFontTab">e </td>
    <td valign="top" class="UniFontTab">ai </td>
    <td valign="top" class="UniFontTab"> ĕ </td>
    <td valign="top" class="UniFontTab">ae </td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('diphthong pronounced ow, usually spelled oCe'); ?> </span>ou</a>, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>&#299;</a></td>
    <td valign="top" class="UniFontTab"><a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('usually spelled ei'); ?> </span>ai</a> </td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*eu </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">eu </td>
    <td valign="top" class="UniFontTab">ju </td>
    <td valign="top" class="UniFontTab">u </td>
    <td valign="top" class="UniFontTab">&#363;, <a class='hintTab' href='#'><span class='noteTab'><?php echo AddLinks('if following syllable had i'); ?> </span>&#299;</a> </td>
    <td valign="top" class="UniFontTab"> ǖ </td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td valign="top" class="UniFontTab">*ou </td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">ou </td>
    <td valign="top" class="UniFontTab">u</td>
    <td valign="top" class="UniFontTab">&#363;</td>
    <td valign="top" class="UniFontTab">&#299;</td>
    <td valign="top" class="UniFontTab">&#333;</td>
  </tr>
  <tr>
    <td valign="top" class="UniFontTab">*h<sub>2</sub>eu (=au)</td>
    <td valign="top" class="UniFontTab">o </td>
    <td valign="top" class="UniFontTab">au </td>
    <td valign="top" class="UniFontTab">u </td>
    <td valign="top" class="UniFontTab">au </td>
    <td valign="top" class="UniFontTab">&#299;</td>
    <td valign="top" class="UniFontTab">&#333;</td>
  </tr>
  <tr style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" >
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>PIE </strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>Sanskrit </strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>Greek </strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>OCS </strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>Latin </strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>English</strong></td>
    <td style="border-top-style:solid; border-top-width:medium; border-top-color:#000000" valign="top" class="UniFontTab"><strong>German </strong></td>
  </tr>
</table>
<h4>Symbol Conventions</h4>
<table border="0">
  <tr>
    <td><b>General</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>&scaron;</strong></td>
    <td>as in <strong>sh</strong>ow</td>
  </tr>
  <tr>
    <td>&#382;</td>
    <td>as in  gara<strong>g</strong>e</td>
  </tr>
  <tr>
    <td>&#269;</td>
    <td>as in <strong>ch</strong>ip </td>
  </tr>
  <tr>
    <td>x</td>
    <td>as in Scottish lo<strong>ch</strong></td>
  </tr>
  <tr>
    <td>k<sup>ṷ</sup></td>
    <td>as in <strong>qu</strong>een </td>
  </tr>
  <tr>
    <td>g<sup>ṷ</sup></td>
    <td>as in <strong>Gu</strong>inevere</td>
  </tr>
  <tr>
    <td>&lang;<sup>h</sup></td>
    <td>an aspirated consonant</td>
  </tr>
   <tr>
    <td>c</td>
    <td>[ts], as in klu<strong>tz</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>English</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>y</td>
    <td>as in <strong>y</strong>es </td>
  </tr>
  <tr>
    <td>&eth;</td>
    <td>as in <strong>th</strong>is </td>
  </tr>
  <tr>
    <td>&thorn;</td>
    <td>as in <strong>th</strong>ree </td>
  </tr>
  <tr>
    <td>ʌ</td>
    <td>as in  p<strong>u</strong>t</td>
  </tr>
  <tr>
    <td> æ </td>
    <td>as in m<strong>a</strong>n</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Sanskrit</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>y</td>
    <td> as in <strong>y</strong>es</td>
  </tr>
  <tr>
    <td>j</td>
    <td>as in <strong>J</strong>ohn</td>
  </tr>
  <tr>
    <td>c</td>
    <td>as in <strong>ch</strong>ip</td>
  </tr>
   <tr>
    <td>&ntilde;</td>
    <td>as in Spanish ni<strong>&ntilde;</strong>o </td>
  </tr>
   <tr>
    <td>&#7751; &#7779; &#7789; &#7693; &#7789;<sup>h</sup> &#7693;<sup>h</sup></td>
    <td>retroflex consonants</td>
  </tr>
   <tr>
    <td>&#347;</td>
    <td>a palatal <strong>sh</strong></td>
  </tr>
   <tr>
    <td>&#7749;</td>
    <td>as in si<strong>n</strong>g</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><strong>OCS</strong></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&#281;</td>
    <td>as in French m<strong>ain</strong> </td>
  </tr>
   <tr>
    <td> ǫ </td>
    <td>as in French m<strong>on</strong> </td>
  </tr>
   <tr>
    <td>&#301;</td>
    <td>as in p<strong>i</strong>t </td>
  </tr>
   <tr>
    <td>&#365;</td>
    <td>as in p<strong>u</strong>t</td>
  </tr>
   <tr>
    <td> ĕ </td>
    <td>as in m<strong>a</strong>n </td>
  </tr>
   <tr>
    <td>j</td>
    <td>as in <strong>y</strong>es</td>
  </tr>
</table>
<form method="post" action="IE_Glossary.php"><input type="hidden" ID="nav" name="nav" value=""></input></form>
</body>
</html>
