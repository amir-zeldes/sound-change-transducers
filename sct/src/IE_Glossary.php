<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>A Glossary of Indo-European Linguistic Terms</title>
<link href="HUC.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-type" value="text/html; charset=UTF-8">
<script language="javascript">
function OpenLink(strLink)
{

	document.forms[0].elements[0].value = strLink;
	document.forms[0].action = "IE_Glossary.php#" + strLink;
	document.forms[0].submit();
	
}
</script>
<?php
function GetVar($name)
{
    if(isset($_GET[$name])) { 
        return $_GET[$name]; 
    } else { 
            return ""; }
}
function PostVar($name)
{
    if(isset($_POST[$name])) { 
        return $_POST[$name]; 
    } else { 
            return ""; }
}
global $selected;
$selected= PostVar("nav");
//<div Name="mno" style="background-color:white; width:100px; height:100px" onMouseover="this.style.backgroundColor='#E2E2E2'" onMouseout="this.style.backgroundColor='white'">This is a div</div>

?>
</head>

<body>
<h2>A Glossary of Indo-European Linguistic Terms</h2>


<div <?php if((string) $selected == 'aspirates'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="aspirates"><h3>Aspirates</h3>
</a>
<strong>Aspirated consonants</strong> are consonants whose pronunciation ends with a puff of air, like a short h sound. Proto-Indo European had  aspirated consonants, which are denoted with a superscripted h: <span class="UniFont"><strong>b<sup>h</sup>, d<sup>h</sup>, g<sup>h</sup>, <strong>g&#833;<sup>h</sup>,</strong> g<sup>ṷh</sup></strong></span> (the latter two symbols stand for the aspirated <div class="LRef" onClick="OpenLink('palatovelars')">palatovelar</div> and <div class="LRef" onClick="OpenLink('labiovelars')">labiovelar</div>). </div>

<div <?php if((string) $selected == 'cases'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="cases"><h3>Cases</h3>
</a>
Cases are the different forms a noun, adjective or pronoun can take to indicate its role in a sentence. For instance English <strong>he </strong>can function as a subject, but <strong>him </strong>is the form for the object in &quot;he saw him&quot;. <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div> is thought to have had 8 cases, like Sanskrit:
<ul>
  <li><strong>Nominative</strong>: marking the subject (<strong>John</strong> is tall) </li>
<li><strong>Accusative</strong>: marking the direct object (John hit <strong>Bill</strong>) </li>
<li><strong>Genitive</strong>: marking possession (<strong>John's</strong> dog)</li>
<li><strong>Dative</strong>: marking the indirect object (John gave the dog <strong>to Bill</strong>)</li>
<li><strong>Ablative</strong>: marking the point of origin (John came home <strong>from work</strong>) </li>
<li><strong>Instrumental</strong>: marking the instrument (John hit the nail <strong>with a hammer</strong>) </li>
<li><strong>Locative</strong>: marking location (John is <strong>at home</strong>) </li>
<li><strong>Vocative</strong>: marking direct address (hey <strong>John!</strong>)</li>
</ul>
<p>A Proto Indo-European sentence featuring all the cases might have looked something like this (however very little is known about word order):</p>
<table class="UniFont"  width="678">
  <tr valign="middle">
    <th height="30" scope="col"><center>
      voc
    </center></th>
    <th height="30" scope="col"><center>
    </center></th>
    <th height="30" scope="col"><center>
      nom
    </center></th>
    <th height="30" scope="col"><center>
      dat
    </center></th>
    <th height="30" scope="col"><center>
      acc
    </center></th>
    <th height="30" scope="col"><center>
      loc
    </center></th>
    <th height="30" scope="col"><center>
      inst
    </center></th>
    <th height="30" scope="col"><center>
      gen
    </center></th>
    <th height="30" scope="col"><center>
      abl
    </center></th>
    <th height="30" scope="col"><center>
      (verb)
    </center></th>
  </tr>
  <tr valign="baseline" class="UniFont">
    <td height="30" class="UniFont"><center>
      p&oacute;ti
    </center></td>
    <td height="30" class="UniFont"><center>
      ,
    </center></td>
    <td height="30" class="UniFont"><center>
      m&eacute;h<sub>2</sub>tr
    </center></td>
    <td height="30" class="UniFont"><center>
      ph<sub>2</sub>tr&eacute;i
    </center></td>
    <td height="30" class="UniFont"><center>
      g<sup>ṷ</sup>&eacute;h<sub>3</sub>um
    </center></td>
    <td height="30" class="UniFont"><center>
      h<sub>2</sub>&eacute;g&#833;roi
    </center></td>
    <td height="30" class="UniFont"><center>
      iug&oacute;h<sub>1</sub>
    </center></td>
    <td height="30" class="UniFont"><center>
      b<sup>h</sup>rh<sub>2</sub>tr&oacute;s
    </center></td>
    <td height="30" class="UniFont"><center>
      ulk<sup>ṷ</sup>&#333;d
    </center></td>
    <td height="30" class="UniFont"><center>
      u&eacute;g&#833;<sup>h</sup>e
    </center></td>
  </tr>
  <tr valign="middle">
    <td height="30"><center>
      master
    </center></td>
    <td height="30"><center>
    </center></td>
    <td height="30"><center>
      mother
    </center></td>
    <td height="30"><center>
      for father 
    </center></td>
    <td height="30"><center>
      bull
    </center></td>
    <td height="30"><center>
      in the field 
    </center></td>
    <td height="30"><center>
      with yoke 
    </center></td>
    <td height="30"><center>
      of brother
    </center></td>
    <td height="30"><center>
      away from wolf
    </center></td>
    <td height="30"><center>
      leads
    </center></td>
  </tr>
  <tr>
    <th colspan="10" scope="row"><div align="left">Master! Mother is leading the bull in brother's field  for father with the yoke, away from the wolf.</div></th>
  </tr>
</table>
</div>

<div <?php if((string) $selected == 'centum_satem'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="centum_satem"><h3>Centum and Satem Languages</h3>
</a>
<strong>Centum languages </strong>(pronounced "kentum") are Indo-European languages in which
<div class="LRef" onClick="OpenLink('palatovelars')">palatovelars</div> merged with regular velars (this process may be called <em>centumization</em>). In <strong>satem languages </strong> the  
<div class="LRef" onClick="OpenLink('labiovelars')">labiovelars</div> 
merged with regular velars (<em>satemization</em>). The names for the two groups come from the pronunciation of the word for &quot;hundred&quot; (which started with a palatovelar) in Latin (a centum language) and Avestan (a satem language).</div>

<div <?php if((string) $selected == 'labiovelars'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="labiovelars"><h3>Labiovelars</h3>
</a>
<strong>Labiovelar consonants</strong> are velar consonants (pronouned with the tongue touching the velum, like <strong>k</strong>, <strong>g</strong>) whose pronunciation ends with a labial <strong>w</strong> element. The English word '<strong>qu</strong>een' begins with a labiovelar. <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div> had three labiovelars, which are denoted with a superscripted u: <span class="UniFont"><strong>k<sup>ṷ</sup>, g<sup>ṷ</sup>, g<sup>ṷh</sup></strong></span> (the latter symbol stands for the 
<div class="LRef" onClick="OpenLink('aspirates')">aspirated</div> 
labiovelar). </div>

<div <?php if((string) $selected == 'laryngeals'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="laryngeals"><h3>Laryngeals</h3></a>
  <strong>Laryngeals</strong> are sounds produced in the larynx, lower in the throat than other sounds. The glottal stop before an initial vowel in English is a laryngeal, e.g. the first sound before the u vowel in the word <strong>up</strong>. <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div> is thought to have had three laryngeals, marked <strong>h<sub>1</sub></strong>, <strong>h<sub>2</sub> </strong>and <strong>h<sub>3</sub></strong> (their exact pronunciation is unknown). In certain environments it cannot be determined which laryngeal was present, in which case we write a capital <strong>H</strong>.</div>

<div <?php if((string) $selected == 'palatovelars'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="palatovelars"><h3>Palatovelars</h3>
</a>
<strong>Palatovelar consonants</strong> are velar consonants (pronouned with the tongue touching the velum, like <strong>k</strong>, <strong>g</strong>) that are pronounced with the tongue towards the palate (somewhat like the <strong>k</strong> in "kid" as opposed to the <strong>c</strong> in "cone"). <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div> 
had three palatovelars, which are denoted here with an accute sign on top: <span class="UniFont"><strong>k&#833;, g&#833;, g&#833;<sup>h</sup></strong></span> (the latter symbol stands for the 
<div class="LRef" onClick="OpenLink('aspirates')">aspirated</div> 
palatovelar). See also <div class="LRef" onClick="OpenLink('centum_satem')">Centum and Satem Languages</div>. </div>

<div <?php if((string) $selected == 'pie'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="pie"><h3>Proto Indo-European</h3>
</a>
  <strong>Proto Indo-European</strong> (PIE) is the name given to a hypothetical prehistoric language, which would have been the ancestor of all known Indo-European languages. Historical linguists try to reconstruct PIE word forms (or <strong>proto forms</strong>) by comparing related words in different languages and positing a common ancestor form from which the attested forms can  best be explained. These proto forms are usually marked with a star (e.g. <strong>*d<sup>h</sup>eh<sub>1</sub></strong>) to show that they are only postulated and not attested. While some think PIE was actually spoken at some time (perhaps in the 4th or 5th millenium BC), others are less sure such a uniform language ever existed, and prefer to regard proto-forms as useful abstractions which describe the relationships between related languages. </div>

<div <?php if((string) $selected == 'reduplication'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="reduplication"><h3>Reduplication</h3></a>
<strong>Reduplication</strong> is the repetition of part or all of a word form to produce a new word form, like '<strong>bye bye</strong>' (which is not simply saying goodbye two separate times). In old Indo-European languages reduplication of part of a verbal stem played an important role in forming different tenses, e.g.
  Greek present <strong>d&iacute;-d&#333;-mi</strong> '<em>I give</em>' : aorist infinitive <strong>d&oacute;-menai</strong> '<em>to give</em>', where the prefixed di- is reduplicating the begining of the stem do-.</div>
<div <?php if((string) $selected == 'roots'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="roots"><h3>Root</h3>
</a>
  Almost all Indo-European words can be derived from a <strong>root</strong>. The root supplys the basic lexical meaning of all words derived from it, e.g. from the root <strong>build</strong> we get <strong>build-er</strong>, <strong>build-ing-s</strong>,<strong> build-s</strong> etc. 
  <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div>  roots had the following properties, which are still reflected in the modern languages:
  <ol>
    <li>They have only <strong>1 syllable </strong></li>
  <li>The syllable can start with 1-2 consonants and end with 1-2 consonants. </li>
    <li>Between these consonants is a vowel, usually e, which can however change into other vowels or disappear as a result of  
      <div class="LRef" onClick="OpenLink('grades')"><strong>vowel gradation</strong></div>.</li>
    <li>Roots cannot have a <strong>voiceless stop</strong> (p, t, k) and an 
      <div class="LRef" onClick="OpenLink('aspirates')"><strong>aspirated</strong></div> consonant: *<strong>b<sup>h</sup>ek </strong>and <strong>*keb<sup>h</sup> </strong>are impossible roots. </li>
  <li>They cannot both start and end with a <strong>voiced stop</strong> (b, d, g): <strong>*bid</strong>, <strong>*geb</strong> etc. are impossible (in English such combinations have developed e.g. from aspirates <strong>bid</strong> &lt; <strong>*b<sup>h</sup>id<sup>h</sup>-</strong>)</li>
  <li>They have rising <strong>sonority </strong>up to the vowel, then falling (see below). The only exception to this is the possible addition of a prefix s- (see also 
    <div class="LRef" onClick="OpenLink('s-mobile')"><strong>s-mobile</strong></div>) </li>
  </ol>
The basic structure is thus <strong>(s)(C)CeC(C)</strong>, where C can be any consonant . Most apparent exceptions to these rules stem from a 
<div class="LRef" onClick="OpenLink('laryngeals')">laryngeal</div>
: Eng. <strong>is</strong> < <strong>*h<sub>1</sub>es-</strong>, where the lareyngeal h<sub>1</sub> is  a consonant.
The last criterion (VI) means that as a root is pronounced, more and more air is released with each sound, up to a peak, after which less and less air is released. As we can see from the following two diagrams, the sequence <strong>strong</strong> would form a valid root, but <strong>strength</strong> would not:<br>

<table cellspacing="20"><tr><td>
<table width="200" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 ">&nbsp;</td>
    <td style="border-right-style:dotted; border-right-color:#999999 ; border-right-width:thin "><center>
          &nbsp;
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      o
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
  </tr>
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 "><center>
        <strong>air</strong>
    </center></td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center>
      <strong>      s
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      r
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      n
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
  </tr>
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 ">&nbsp;</td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center> &nbsp;
          
    </center></td>
    <td><center>
      <strong>      t
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      g
      </strong>
    </center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="6"  style="border-top-style:solid; border-top-color:#000000 "><center>
      <strong>      time
      </strong>
    </center></td>
    </tr>
</table>
</td><td>
<table width="200" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 ">&nbsp;</td>
    <td style="border-right-style:dotted; border-right-color:#999999 ; border-right-width:thin "><center>
          &nbsp;
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong> e      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin ">&nbsp;</td>
    <td><center>
          
    </center></td>
  </tr>
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 "><center>
        <strong>air</strong>
    </center></td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center>
      <strong>      s
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      r
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
      <strong>      n
      </strong>
    </center></td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center>&nbsp;
    </center></td>
    <td>      <center>
        <strong>      th
            
      </strong>
      </center></td>
  </tr>
  <tr>
    <td style="border-right-style:solid; border-right-color:#000000 ">&nbsp;</td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center> &nbsp;
          
    </center></td>
    <td><center>
      <strong>      t
      </strong>
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td><center>
          
    </center></td>
    <td style="border-right-style:dotted; border-right-color:#999999; border-right-width:thin "><center>
      <strong>g</strong>
    </center></td>
    <td>      <center>
        <strong>      </strong>
      </center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="7"  style="border-top-style:solid; border-top-color:#000000 "><center>
      <strong>      time
      </strong>
    </center></td>
    </tr>
</table></td></tr></table>
You can try pronouncing these words slowly, sound by sound, to see how more and less air gets released with each sound.</div>
  
<div <?php if((string) $selected == 's-mobile'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="s-mobile"><h3>S-Mobile</h3>
</a>
The <strong>mobile s</strong> (or s-mobile) is a prefixed s- that appears in certain words, which also appear elsewhere without the s-, either in another language, or even in the same language. For instance, the two English words <strong>melt</strong> and <strong>smelt</strong> are very similar (the latter is restricted to melting metals etc.), and are most probably derived from the same root. Originally the s- must have had a separate meaning, which has been lost over time. </div>
<div <?php if((string) $selected == 'stems'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="stems"><h3>Stems and Suffixes</h3>
</a>
In Indo-European languages, a <strong>stem</strong> is the part of a word up to its inflectional <strong>ending</strong>. For instance, the word <strong>dogs</strong> has a stem <strong>dog-</strong> and an ending <strong>-s</strong>, which marks the plural. Stems themselves can be composed of 
<div class="LRef" onClick="OpenLink('roots')">roots</div> 
and <strong>suffixes</strong>: the word <strong>meetings</strong> is comprised of a root <strong>meet-</strong>, a suffix <strong>-ing-</strong> which forms nouns from verbal roots, and finally the plural ending <strong>-s</strong>. In old Indo-European languages, we often classify stems according to the last sound of the last suffix (e.g. <strong>s-stem</strong>, <strong>n-stem</strong>), since this affected the inflection of the word. The distinction between stem types has been completely lost in English, except in a few irregular forms, such as <strong>ox</strong> : <strong>oxen</strong>, where the n-suffix of an old <strong>n-stem</strong> still appears in the plural. </div>

<div <?php if((string) $selected == 'grades'){echo "style='background-color: #FFFFCC;' ";} ?> ><a name="grades"><h3>Vowel Gradation (Ablaut)</h3></a>
<strong>Vowel gradation</strong> is the alternation of vowels in different forms from the same root, e.g. English <strong>run</strong> : <strong>ran</strong> shows a vowel gradation that distinguishes past and present forms of the same verb. <div class="LRef" onClick="OpenLink('pie')">Proto Indo-European</div> had three vowel grades: the <strong>full-grade</strong> (with the vowel e or sometimes o, respectively also called e- and o-grade), the <strong>&Oslash;-grade</strong> (with no vowel) and the <strong>lengthened grade</strong> (with long &#275; or &#333;). The alternation was at one time probably a result of the stress: stressed syllables had a vowel (usually -e-), but in unstressed syllables the vowel disappeared. The most common forms were those with the full e- and o-grades, and also the &Oslash;-grade, which marked for instance forms in the present, the perfect and the participle respectively. We can still see the continuation of these grades (e : o : &Oslash;) in  irregular verbs in English: 
<br>
<br><table width="376" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col"><div align="left">present (e) </div></th>
    <th scope="col"><div align="left">perfect (o) </div></th>
    <th scope="col"><div align="left">participle (&Oslash;) </div></th>
  </tr>
  <tr>
    <th scope="row"><div align="left">Proto-Stems</div></th>
    <td><center>
      *-g<sup>h</sup><strong>e</strong>n-
    </center></td>
    <td><center>
      *-g<sup>h</sup><strong>o</strong>n-
    </center></td>
    <td><center>
      *-g<sup>h</sup>n-
    </center></td>
  </tr>
  <tr>
    <th scope="row"><div align="left">English</div></th>
    <td><center>
      (be-)gin
    </center></td>
    <td><center>
      (be-)gan
    </center></td>
    <td><center>
      (be-)gun
    </center></td>
  </tr>
</table>
<p>Since different grades appeared in various forms of the same word, different languages often generalized one of the grades to all forms of the same word (as an illustration of this idea, imagine what would happen if Americans would start saying &quot;I have beg<strong>a</strong>n&quot; while say Australians would say &quot;Last year I beg<strong>u</strong>n...&quot;). This is why we sometimes find different forms stemming from different grades in related words in different languages. </p>
</div>
<form method="post" action="IE_Glossary.php"><input type="hidden" ID="nav" name="nav" value=""></input></form>
</body>
</html>
