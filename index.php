<?php
include('language.inc.php');
?>
<p>You can call any string from the array like so in a simple echo</p>
<p><code>&lt;?php echo $lang['common']['close'][LANG]; ?&gt;</code> which returns "<?php echo $lang['common']['close'][LANG]; ?>"</p>
<p> The function for this is <code>$lang[StringSetToUse][WordToTranslate][LANGorTheLanguageYouPrefer];</code>
<br>
<br>
<p>I included a function to call the language. not much different or easier, but lets put the FUN back in function</p>

<p>Just use this code here <code>&lt;?php echo stringLang('common','home'); ?&gt;</code> and it will return "<?php echo stringLang('common','home'); ?>" </p>
<p> The function for this is <code>stringLang(StringSetToUse,WordToTranslate,LanguageIfNotDefault);</code>

<p>Below is the array structure and the function setup</p>
<p>
<code>	
	&nbsp;global $lang;
	&nbsp;$lang = array (
						&nbsp;&nbsp;$common => array(
							&nbsp;&nbsp;&nbsp;  $menu => array("eng"=>"Menu","esp"=>"Menú"),
							&nbsp;&nbsp;&nbsp;  $close  => array("eng"=>"Close","esp"=>"Cerca"),
							 &nbsp;&nbsp;&nbsp; $home => array("eng"=>"Home","esp"=>"Casa")
						&nbsp;&nbsp;),
						&nbsp;&nbsp;$search => array(
						&nbsp;&nbsp;&nbsp;	$submit => array("eng"=>"Submit","esp"=>"Enviar"),
						&nbsp;&nbsp;&nbsp;	$notfound => array("eng"=>"Item not found","esp"=>"Objeto no encontrado")
						&nbsp;&nbsp;)	
	&nbsp;);
	
	&nbsp;/* keep this with the language array, or add to your own functions file */
	&nbsp;function stringLang($cat,$word,$language = LANG) {
	&nbsp;&nbsp;	global $lang;
	&nbsp;&nbsp;	$str = $lang[$cat][$word][$language];
	&nbsp;&nbsp;	return $str;		
	&nbsp;}
	</code>
	</p>
