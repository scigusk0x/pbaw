<?php
define('_SERVER_NAME', 'localhost/projekty/projekty_moje');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/02_kalk_kred_ochrona_dostepu');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
?>