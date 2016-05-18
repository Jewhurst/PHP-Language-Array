<?php

/* define this in your globals  */
define(LANG,"esp"); //define your default language


/* include this bit in a file for language i.e. language.inc.php */
	global $lang;
	$lang = array (
						"common" => array(
							  "menu" => array("eng"=>"Menu","esp"=>"Menú"),
							  "close"  => array("eng"=>"Close","esp"=>"Cerca"),
							  "home" => array("eng"=>"Home","esp"=>"Casa"),
						),
						"search" => array(
							"submit" => array("eng"=>"Submit","esp"=>"Enviar"),
							"notfound" => array("eng"=>"Item not found","esp"=>"Objeto no encontrado"),
						)	
	);
	
	/* keep this with the language array, or add to your own functions file */
	function stringLang($cat,$word,$language = LANG) {
		global $lang;
		$str = $lang[$cat][$word][$language];
		return $str;		
	}
?>
<p><?php echo $lang['common']['close'][LANG]; ?>"/p>
<br>
<p><?php echo stringLang('common','home'); ?></p>
