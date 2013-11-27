<?php
class AutoLoad
{
	static public function register(){
		require_once dirname(__FILE__).'/lib/RakutenRws/Autoloader.php';
		RakutenRws_Autoloader::register();
	}
}