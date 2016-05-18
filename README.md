
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
	global $lang;<br>
	$lang = array (<br>
					&nbsp;	&nbsp;$common => array(<br>
						&nbsp;	 &nbsp;&nbsp; $menu => array("eng"=>"Menu","esp"=>"Menú"),<br>
						&nbsp;	&nbsp;&nbsp;  $close  => array("eng"=>"Close","esp"=>"Cerca"),<br>
						&nbsp;	&nbsp;&nbsp;  $home => array("eng"=>"Home","esp"=>"Casa")<br>
						&nbsp;&nbsp;),<br>
						&nbsp;&nbsp;$search => array(<br>
						&nbsp;&nbsp;&nbsp;	$submit => array("eng"=>"Submit","esp"=>"Enviar"),<br>
						&nbsp;&nbsp;&nbsp;	$notfound => array("eng"=>"Item not found","esp"=>"Objeto no encontrado")<br>
					&nbsp;&nbsp;	)	<br>
	);<br>
	<br>
	<br><br>
	<br>
	function stringLang($cat,$word,$language = LANG) {<br>
		&nbsp;&nbsp;&nbsp;global $lang;<br>
		&nbsp;&nbsp;&nbsp;$str = $lang[$cat][$word][$language];<br>
		&nbsp;&nbsp;&nbsp;return $str;		<br>
	}<br>
	</code>
	</p>
