<?php

/* define this in your globals  */
define(LANG,"esp"); //define your default language


/* include this bit in a file for language i.e. language.inc.php */
	global $lang;
	$lang = array (
						$common => array(
							  $menu => array("eng"=>"Menu","esp"=>"Menú"),
							  $close  => array("eng"=>"Close","esp"=>"Cerca"),
							  $home => array("eng"=>"Home","esp"=>"Casa")
						),
						$search => array(
							$submit => array("eng"=>"Submit","esp"=>"Enviar"),
							$notfound => array("eng"=>"Item not found","esp"=>"Objeto no encontrado")
						)	
	);
	
	/* keep this with the language array, or add to your own functions file */
	function stringLang($cat,$word,$language = LANG) {
		global $lang;
		$str = $lang[$cat][$word][$language];
		return $str;		
	}
?>

<p>You can call any string from the array like so in a simple echo</p>
<p><code>&lt;?php echo $lang[$common][$close][LANG]; ?&gt;</code> which returns "<?php echo $lang[$common][$close][LANG]; ?>"</p>
<p> The function for this is <code>$lang[StringSetToUse][WordToTranslate][LANGorTheLanguageYouPrefer];</code>
<br>
<br>
<p>I included a function to call the language. not much different or easier, but lets put the FUN back in function</p>

<p>Just use this code here <code>&lt;?php echo stringLang($common,$menu); ?&gt;</code> and it will return "<?php echo stringLang($common,$menu); ?>" </p>
<p> The function for this is <code>stringLang(StringSetToUse,WordToTranslate,LanguageIfNotDefault);</code>

<p>Below is the array structure and the function setup</p>
<p>
<code>	
	global $lang;
	$lang = array (
						$common => array(
							  $menu => array("eng"=>"Menu","esp"=>"Menú"),
							  $close  => array("eng"=>"Close","esp"=>"Cerca"),
							  $home => array("eng"=>"Home","esp"=>"Casa")
						),
						$search => array(
							$submit => array("eng"=>"Submit","esp"=>"Enviar"),
							$notfound => array("eng"=>"Item not found","esp"=>"Objeto no encontrado")
						)	
	);
	
	/* keep this with the language array, or add to your own functions file */
	function stringLang($cat,$word,$language = LANG) {
		global $lang;
		$str = $lang[$cat][$word][$language];
		return $str;		
	}
	</code>
	</p>
