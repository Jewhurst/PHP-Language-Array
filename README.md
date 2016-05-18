
<p>You can call any string from the array like so in a simple echo</p>
<p>`<?php echo $lang['common']['close'][LANG]; ?>` which returns "Cerca"</p>
<p> The function for this is `$lang[StringSetToUse][WordToTranslate][LANGorTheLanguageYouPrefer];`
<br>
<br>
<p>I included a function to call the language. not much different or easier, but lets put the FUN back in function</p>

<p>Just use this code here `<?php echo stringLang('common','home'); ?>` and it will return "Casa" </p>
<p> The function for this is <code>stringLang(StringSetToUse,WordToTranslate,LanguageIfNotDefault);</code>

<p>Below is the array structure and the function setup</p>
<p>
```
	global $lang;
	$lang = array (
						"common" => array(
							  "menu" => array("eng"=>"Menu","esp"=>"Menú"),
							  "close"  => array("eng"=>"Close","esp"=>"Cerca"),
							  "home" => array("eng"=>"Home","esp"=>"Casa")
						),
						"search" => array(
							"submit" => array("eng"=>"Submit","esp"=>"Enviar"),
							"notfound" => array("eng"=>"Item not found","esp"=>"Objeto no encontrado")
						)	
	);
	
	/* keep this with the language array, or add to your own functions file */
	function stringLang($cat,$word,$language = LANG) {
		global $lang;
		$str = $lang[$cat][$word][$language];
		return $str;		
	}
	```
