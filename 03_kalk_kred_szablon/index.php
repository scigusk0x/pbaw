<?php
require_once 'config.php';
session_start();
$_SESSION = [];
session_destroy();
session_start();
$_SESSION['_APP_URL'] = _APP_URL;

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/start_page.php';